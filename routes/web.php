<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

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
// Route::get('/posts/{id}', function ($id) {
//     ddd($id);
// });
// Route::get('/search', function (Request $request) {
//     return ($request)->name . ' ' . $request->city;
// });

Route::get('/', [ListingController::class, 'index']);

// GETTING A SINGLE LISTING
// Route::get('/listing/{id}', function ($id) {

//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'listing' => Listing::find($id)
//         ]);
//     } else {
//         abort(('404'));
//     }
// });

// OR

// Goes to creating view 
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listing/{listing}', [ListingController::class, 'show']);

//Show Edit Form route
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Edit Submit route
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');


// Delete Listing route
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


// Manage Listings Route Form 
Route::get('/listings/manage', [ListingController::class, 'manage']);

// Manage Listings Route Form 
// Route::get('/listings/manage', [UserController::class, 'manage']);


// ////////////////////////////////////////////
// User Routes

// User Form Route
Route::get('/register', [UserController::class, 'index'])->middleware('guest');

// Creating a user Route
Route::post('/users', [UserController::class, 'store']);

// Logout Route
Route::post('/logout', [UserController::class, 'logout']);

// Login Route form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login Route 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
