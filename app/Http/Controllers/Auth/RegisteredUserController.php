<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Log the request for debugging
        \Log::info('REGISTER PAYLOAD: ' . json_encode($request->all()));

        // Validate the request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:customer,mechanic,seller'], // Add role validation
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Save the role
        ]);

        // Fire the registered event
        event(new Registered($user));

        // Log in the user
        Auth::login($user);

        // Log the role for debugging
        \Log::info('USER ROLE: ' . $user->role);

        // Redirect based on role
        if ($user->role === 'mechanic') {
            \Log::info('REDIRECTING TO: mechanic.form');
            return redirect()->route('mechanic.form');
        } elseif ($user->role === 'seller') {
            \Log::info('REDIRECTING TO: seller.form');
            return redirect()->route('seller.form');
        }

        // Default redirect for customers
        \Log::info('REDIRECTING TO: home');
        return redirect()->route('home');
    }
}