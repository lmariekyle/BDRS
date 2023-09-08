<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertiesController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/useraccounts', [UserController::class, 'index'])->name('useraccounts');
    // Route::get('accounts/edit/{id}', [UserController::class, 'edit'])->name('accounts.edit');
    // Route::put('accounts/{id}', [UserController::class, 'update'])->name('accounts.update');
    Route::resource('accounts', \App\Http\Controllers\UserController::class);
    Route::resource('properties', \App\Http\Controllers\PropertiesController::class);
    // Route::get('/properties', [PropertiesController::class, 'index'])->name('profile.index');
    // Route::get('/properties/create', [PropertiesController::class, 'create'])->name('profile.create');
    // Route::post('/properties', [PropertiesController::class, 'store'])->name('profile.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
