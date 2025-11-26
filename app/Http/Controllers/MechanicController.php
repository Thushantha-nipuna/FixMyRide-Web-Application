<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MechanicController extends Controller
{
    /**
     * Show the mechanic registration form
     */
    public function showForm()
    {
        // Check if mechanic already registered
        $existingMechanic = Mechanic::where('user_id', Auth::id())->first();
        
        if ($existingMechanic) {
            return redirect()->route('mechanic.dashboard')
                ->with('info', 'You have already completed your registration.');
        }

        return view('mechanic.form');
    }

    /**
     * Store mechanic registration data
     */
    public function storeForm(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'garage_name' => 'required|string|max:255',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'business_registration_number' => 'required|string|unique:mechanics,business_registration_number',
            'specialty' => 'required|string|max:255',
            'available_time' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle photo upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('mechanic_photos', 'public');
        }

        // Create mechanic record
        Mechanic::create([
            'user_id' => Auth::id(),
            'full_name' => $validated['full_name'],
            'garage_name' => $validated['garage_name'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
            'business_registration_number' => $validated['business_registration_number'],
            'specialty' => $validated['specialty'],
            'available_time' => $validated['available_time'],
            'phone_number' => $validated['phone_number'],
            'photo' => $photoPath,
            'is_approved' => false // Admin approval required
        ]);

        return redirect()->route('mechanic.dashboard')
            ->with('success', 'Your mechanic profile has been created successfully!');
    }

    /**
     * Show mechanic dashboard
     */
    public function dashboard()
    {
        $mechanic = Mechanic::where('user_id', Auth::id())->firstOrFail();
        
        return view('mechanic.dashboard', compact('mechanic'));
    }

    /**
     * API endpoint to get all approved mechanics for map
     */
    public function getApprovedMechanics()
    {
        $mechanics = Mechanic::where('is_approved', true)
            ->with('user')
            ->get()
            ->map(function ($mechanic) {
                return [
                    'id' => $mechanic->id,
                    'garage_name' => $mechanic->garage_name,
                    'full_name' => $mechanic->full_name,
                    'latitude' => (float) $mechanic->latitude,
                    'longitude' => (float) $mechanic->longitude,
                    'specialty' => $mechanic->specialty,
                    'phone_number' => $mechanic->phone_number,
                    'available_time' => $mechanic->available_time,
                    'photo' => $mechanic->photo ? asset('storage/' . $mechanic->photo) : null
                ];
            });

        return response()->json($mechanics);
    }
}