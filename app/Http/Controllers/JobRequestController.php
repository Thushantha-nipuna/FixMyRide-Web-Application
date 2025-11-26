<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class JobRequestController extends Controller
{
    /**
     * Get nearby mechanics for SOS request
     */
    public function getNearbyMechanics(Request $request)
    {
        try {
            $request->validate([
                'latitude' => 'required|numeric',
                'longitude' => 'required|numeric'
            ]);

            $userLat = $request->latitude;
            $userLng = $request->longitude;
            $radiusKm = 50; // 50km radius

            // Get approved mechanics within radius using Haversine formula
            $mechanics = Mechanic::where('is_approved', true)
                ->selectRaw("
                    id,
                    garage_name,
                    full_name,
                    specialty,
                    phone_number,
                    available_time,
                    photo,
                    latitude,
                    longitude,
                    (6371 * acos(cos(radians(?)) 
                    * cos(radians(latitude)) 
                    * cos(radians(longitude) - radians(?)) 
                    + sin(radians(?)) 
                    * sin(radians(latitude)))) AS distance
                ", [$userLat, $userLng, $userLat])
                ->having('distance', '<', $radiusKm)
                ->orderBy('distance', 'asc')
                ->limit(10)
                ->get()
                ->map(function ($mechanic) {
                    return [
                        'id' => $mechanic->id,
                        'garage_name' => $mechanic->garage_name,
                        'full_name' => $mechanic->full_name,
                        'specialty' => $mechanic->specialty,
                        'phone_number' => $mechanic->phone_number,
                        'available_time' => $mechanic->available_time,
                        'latitude' => (float) $mechanic->latitude,
                        'longitude' => (float) $mechanic->longitude,
                        'distance' => round($mechanic->distance, 2),
                        'photo' => $mechanic->photo ? asset('storage/' . $mechanic->photo) : null
                    ];
                });

            return response()->json($mechanics);
        } catch (\Exception $e) {
            Log::error('Error fetching nearby mechanics: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch mechanics'], 500);
        }
    }

    /**
     * Store new job request
     */
    public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'mechanic_id' => 'required|exists:mechanics,id',
            'problem_type' => 'required|string',
            'additional_notes' => 'nullable|string',
            'customer_latitude' => 'required|numeric',
            'customer_longitude' => 'required|numeric',
            'customer_location' => 'nullable|string'
        ]);

        $jobRequest = JobRequest::create([
            'customer_id' => Auth::id(),
            'mechanic_id' => $validated['mechanic_id'],
            'problem_type' => $validated['problem_type'],
            'additional_notes' => $validated['additional_notes'] ?? null,  // Add null coalescing
            'customer_latitude' => $validated['customer_latitude'],
            'customer_longitude' => $validated['customer_longitude'],
            'customer_location' => $validated['customer_location'] ?? null,  // Add null coalescing
            'status' => 'pending'
        ]);

        Log::info('Job request created successfully', ['job_id' => $jobRequest->id, 'customer_id' => Auth::id(), 'mechanic_id' => $validated['mechanic_id']]);

        return response()->json([
            'success' => true,
            'message' => 'Emergency request sent successfully!',
            'job_id' => $jobRequest->id
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        Log::error('Validation error creating job request: ' . json_encode($e->errors()));
        return response()->json([
            'success' => false,
            'message' => 'Validation failed: ' . json_encode($e->errors())
        ], 422);
    } catch (\Exception $e) {
        Log::error('Error creating job request: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Failed to send request. Please try again.'
        ], 500);
    }
}

    /**
     * Get job requests for mechanic dashboard
     */
    public function mechanicJobs()
    {
        try {
            $mechanic = Mechanic::where('user_id', Auth::id())->firstOrFail();
            
            $jobs = JobRequest::where('mechanic_id', $mechanic->id)
                ->with('customer')
                ->orderBy('created_at', 'desc')
                ->get();

            return view('mechanic.jobs', compact('jobs', 'mechanic'));
        } catch (\Exception $e) {
            Log::error('Error fetching mechanic jobs: ' . $e->getMessage());
            return redirect()->route('mechanic.dashboard')->with('error', 'Failed to load job requests.');
        }
    }

    /**
     * Get job requests for customer
     */
    public function customerJobs()
    {
        try {
            $jobs = JobRequest::where('customer_id', Auth::id())
                ->with('mechanic')
                ->orderBy('created_at', 'desc')
                ->get();

            return view('customer.jobs', compact('jobs'));
        } catch (\Exception $e) {
            Log::error('Error fetching customer jobs: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Failed to load your requests.');
        }
    }

    /**
     * Update job status (for mechanics)
     */
    public function updateStatus(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'status' => 'required|in:accepted,in_progress,completed,cancelled'
            ]);

            $job = JobRequest::findOrFail($id);
            
            // Verify mechanic owns this job
            $mechanic = Mechanic::where('user_id', Auth::id())->firstOrFail();
            
            if ($job->mechanic_id !== $mechanic->id) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }

            $job->status = $validated['status'];
            
            if ($validated['status'] === 'accepted') {
                $job->accepted_at = now();
            } elseif ($validated['status'] === 'completed') {
                $job->completed_at = now();
            }
            
            $job->save();

            Log::info('Job status updated', ['job_id' => $job->id, 'status' => $validated['status']]);

            return response()->json([
                'success' => true,
                'message' => 'Job status updated successfully!'
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating job status: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to update status.'
            ], 500);
        }
    }
}