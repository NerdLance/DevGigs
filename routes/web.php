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
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data in New Gig
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Gig
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete a Gig
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Show Single Listing via ID
Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/register', [UserController::class, 'create']);