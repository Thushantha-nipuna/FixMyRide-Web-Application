<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function create()
    {
        return view('seller.setup');
    }

    public function store(Request $request)
    {
        $request->validate([
            'shop_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        return redirect()->route('home')->with('success', 'Seller profile completed!');
    }
}
