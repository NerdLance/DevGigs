<?php

use App\Models\Listing;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Gig Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Show User Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Store Listing Data in New Gig
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Gig
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete a Gig
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show Single Listing via ID
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
