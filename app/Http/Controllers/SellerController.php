<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellerController extends Controller
{
    /**
     * Show the seller registration form
     */
    public function create()
    {
        // Check if seller already registered
        $existingSeller = Seller::where('user_id', Auth::id())->first();
        
        if ($existingSeller) {
            return redirect()->route('seller.dashboard')
                ->with('info', 'You have already completed your registration.');
        }

        return view('seller.form');
    }

    /**
     * Store seller registration data
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'shop_name' => 'required|string|max:255',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'business_registration_number' => 'required|string|unique:sellers,business_registration_number',
            'parts_category' => 'required|string|max:255',
            'available_time' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Handle photo upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('seller_photos', 'public');
        }

        // Create seller record
        Seller::create([
            'user_id' => Auth::id(),
            'full_name' => $validated['full_name'],
            'shop_name' => $validated['shop_name'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
            'business_registration_number' => $validated['business_registration_number'],
            'parts_category' => $validated['parts_category'],
            'available_time' => $validated['available_time'],
            'phone_number' => $validated['phone_number'],
            'photo' => $photoPath,
            'is_approved' => false // Admin approval required
        ]);

        return redirect()->route('seller.dashboard')
            ->with('success', 'Your spare parts shop profile has been created successfully!');
    }

    /**
     * Show seller dashboard
     */
    public function dashboard()
    {
        $seller = Seller::where('user_id', Auth::id())->firstOrFail();
        
        return view('seller.dashboard', compact('seller'));
    }

    /**
     * API endpoint to get all approved sellers for map
     */
    public function getApprovedSellers()
    {
        $sellers = Seller::where('is_approved', true)
            ->with('user')
            ->get()
            ->map(function ($seller) {
                return [
                    'id' => $seller->id,
                    'shop_name' => $seller->shop_name,
                    'full_name' => $seller->full_name,
                    'latitude' => (float) $seller->latitude,
                    'longitude' => (float) $seller->longitude,
                    'parts_category' => $seller->parts_category,
                    'phone_number' => $seller->phone_number,
                    'available_time' => $seller->available_time,
                    'photo' => $seller->photo ? asset('storage/' . $seller->photo) : null
                ];
            });

        return response()->json($sellers);
    }
}