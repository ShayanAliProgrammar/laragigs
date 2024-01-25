<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Sitemap
Route::get('sitemap.xml', function () {
    return response()->view('sitemap', [
        'listings' => Listing::all()
    ])->header('Content-Type', 'text/xml');
})->name('sitemap')->middleware('cache.headers:private;max_age=3600');

// Login Existing User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])
    ->middleware('guest');

// Logout User
Route::post('/logout', [UserController::class, 'logout'])
    ->middleware('auth');


// Register New User
Route::post('/users/register', [UserController::class, 'store'])
    ->middleware('guest');

// Edit Listing in Database
Route::put('/listings/{listing}/update', [ListingController::class, 'update'])
    ->middleware('auth');

// Edit Listing in Database
Route::delete('/listings/{listing}/destroy', [ListingController::class, 'destroy'])
    ->middleware('auth');


// Store New Listing
Route::post('/listings/store', [ListingController::class, 'store'])
    ->middleware('auth');

Route::middleware(['htmlMinifier'])->group(static function () {
    // All Listings
    Route::get('/', [ListingController::class, 'index'])->name('home')->middleware('cache.headers:private;max_age=3600');

    // Create New Listing
    Route::get('/listings/create', [ListingController::class, 'create'])
        ->middleware('auth');

    // Edit Listing
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])
        ->middleware('auth');


    // Auth

    // Show Form So That User Can Register
    Route::get('/register', [UserController::class, 'create'])
        ->middleware('guest');

    // Show Form So That User Can Login
    Route::get('/login', [UserController::class, 'login'])->name('login')
        ->middleware('guest');

    // Manage Listings
    Route::get('/listings/manage', [ListingController::class, 'manage'])->name('manage_listings')->middleware('cache.headers:private;max_age=3600')->middleware('auth');

    // Single Listing
    Route::get('/listings/{listing}', [ListingController::class, 'show'])
        ->name('single_listing')->middleware('cache.headers:private;max_age=3600');
});
