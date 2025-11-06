<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function create()
    {
        return view('mechanic.setup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        // You can store these in a separate `mechanics` table later
        // For now just redirect with a success message
        return redirect()->route('home')->with('success', 'Mechanic profile completed!');
    }
}
