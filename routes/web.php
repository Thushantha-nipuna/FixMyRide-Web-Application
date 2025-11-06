<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Mechanic;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\SellerController;

// ✅ Show real homepage for everyone (logged in or not)
Route::get('/', function () {
    $mechanics = \App\Models\Mechanic::all();
    return view('home', compact('mechanics'));
})->name('home');

// ✅ Optional redirect after login (to same home)
Route::get('/home', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');

// ✅ Profile routes for logged-in users
Route::middleware('auth')->group(function () {
    Route::get('/mechanic/setup', [MechanicController::class, 'create'])->name('mechanic.setup');
    Route::post('/mechanic/setup', [MechanicController::class, 'store'])->name('mechanic.store');

    Route::get('/seller/setup', [SellerController::class, 'create'])->name('seller.setup');
    Route::post('/seller/setup', [SellerController::class, 'store'])->name('seller.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Mechanic registration form page
Route::get('/mechanic/form', function () {
    return view('mechanic-form');
})->middleware('auth')->name('mechanic.form');

// ✅ Seller registration form page
Route::get('/seller/form', function () {
    return view('seller-form');
})->middleware('auth')->name('seller.form');

require __DIR__.'/auth.php';
