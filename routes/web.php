<?php

use App\Http\Controllers\BazaarController;
use App\Http\Controllers\BazaarTenantController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;


use App\Models\BazaarTenant;


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

Route::get('/', [Controller::class, 'dashboard']);
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

Route::get('/join-bazaar/{id}', [BazaarTenantController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/join-bazaar', [BazaarTenantController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/create-bazaar', [BazaarController::class, 'create'])->middleware(['auth', 'isNotAdmin', 'host']);
Route::post('/create-bazaar', [BazaarController::class, 'store'])->middleware(['auth', 'isNotAdmin', 'host']);
Route::post('/update-bazaar', [BazaarController::class, 'edit'])->middleware(['auth', 'isNotAdmin', 'host']);
Route::patch('/update-bazaar', [BazaarController::class, 'update'])->middleware(['auth', 'isNotAdmin', 'host']);
Route::get('/bazaar-details/{id}', [Controller::class, 'bazaardetauls'])->name('bazaar-details');

Route::post('/updatetenants', [BazaarTenantController::class, 'update'])->middleware(['auth', 'verified']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/contact', function () {
    return view('support');
});

Route::get('/ownedtenant', function () {
    return view('');
});

Route::get('/ownedbazaar', function () {
    return view('');
});

Route::get('/createbazaar', function () {
    return view('createbazaar');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/bazaardetail', function () {
    return view('bazaardetail');
});

Route::get('/my-bazaar', [BazaarController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/joinbazaar', function () {
    return view('joinbazaar');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/logout', [ProfileController::class, 'logout']);
Route::post('/updateuser', [ProfileController::class, 'updateuser']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
