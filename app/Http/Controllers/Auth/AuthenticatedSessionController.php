<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
    $request->authenticate();
    $request->session()->regenerate();

    $user = Auth::user();
    \Log::info('User logged in: ' . $user->email . ' | Role: ' . $user->role);

    // Redirect based on role
    if ($user->role === 'mechanic') {
        $mechanic = \App\Models\Mechanic::where('user_id', $user->id)->first();
        
        if ($mechanic) {
            \Log::info('Redirecting mechanic to dashboard');
            return redirect()->route('mechanic.dashboard');
        } else {
            \Log::info('Redirecting mechanic to form');
            return redirect()->route('mechanic.form');
        }
    } elseif ($user->role === 'seller') {
        $seller = \App\Models\Seller::where('user_id', $user->id)->first();
        
        if ($seller) {
            return redirect()->route('seller.dashboard');
        } else {
            return redirect()->route('seller.form');
        }
    }

    return redirect()->route('home');
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}