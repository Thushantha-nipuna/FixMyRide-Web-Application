<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Mechanic;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\JobRequestController;
// Chatbot route
Route::post('/chatbot/message', [ChatbotController::class, 'sendMessage'])->name('chatbot.message');

// Public homepage (no auth required)
Route::get('/', function () {
    $mechanics = \App\Models\Mechanic::all();
    return view('home', compact('mechanics'));
})->name('home');

// Public API for map
Route::get('/api/mechanics', [MechanicController::class, 'getApprovedMechanics'])->name('api.mechanics');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Dashboard redirect
    Route::get('/home', function () {
        return redirect('/');
    })->name('dashboard');

    // Mechanic routes
    Route::get('/mechanic/form', [MechanicController::class, 'showForm'])->name('mechanic.form');
    Route::post('/mechanic/store', [MechanicController::class, 'storeForm'])->name('mechanic.store');
    Route::get('/mechanic/dashboard', [MechanicController::class, 'dashboard'])->name('mechanic.dashboard');

    // Seller routes
    Route::get('/seller/form', [SellerController::class, 'create'])->name('seller.form');
    Route::post('/seller/store', [SellerController::class, 'store'])->name('seller.store');
    Route::get('/seller/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin approval route
    Route::get('/admin/mechanics', function() {
    return view('admin.mechanics');
})->middleware('auth')->name('admin.mechanics');
Route::get('/admin/mechanics/approve/{id}', function($id) {
    $mechanic = \App\Models\Mechanic::findOrFail($id);
    $mechanic->update(['is_approved' => true]);
    return redirect()->route('admin.mechanics')->with('success', 'Mechanic approved!');
})->name('admin.mechanic.approve');

Route::middleware(['auth'])->group(function () {
    Route::get('/jobs/nearby-mechanics', [JobRequestController::class, 'getNearbyMechanics'])->name('jobs.nearby');
    Route::post('/jobs/request', [JobRequestController::class, 'store'])->name('jobs.store');
    Route::get('/mechanic/jobs', [JobRequestController::class, 'mechanicJobs'])->name('mechanic.jobs');
    Route::patch('/mechanic/jobs/{id}/status', [JobRequestController::class, 'updateStatus'])->name('mechanic.jobs.update');
});
});
Route::middleware(['auth'])->group(function () {
    // For customers
    Route::get('/my-requests', [JobRequestController::class, 'customerJobs'])->name('customer.jobs');
    
    // For mechanics
    Route::get('/jobs/nearby-mechanics', [JobRequestController::class, 'getNearbyMechanics'])->name('jobs.nearby');
    Route::post('/jobs/request', [JobRequestController::class, 'store'])->name('jobs.store');
    Route::get('/mechanic/jobs', [JobRequestController::class, 'mechanicJobs'])->name('mechanic.jobs');
    Route::patch('/mechanic/jobs/{id}/status', [JobRequestController::class, 'updateStatus'])->name('mechanic.jobs.update');
});

  // Admin approval route for sellers
    Route::get('/admin/sellers/approve/{id}', function($id) {
        $seller = \App\Models\Seller::findOrFail($id);
        $seller->update(['is_approved' => true]);
        return redirect()->back()->with('success', 'Seller approved!');
    })->name('admin.seller.approve');


// Public API for map
Route::get('/api/sellers', [SellerController::class, 'getApprovedSellers'])->name('api.sellers');

Route::get('/admin/sellers', function() {
    return view('admin.sellers');
})->middleware('auth')->name('admin.sellers');

require __DIR__.'/auth.php';