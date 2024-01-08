<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InquiryReply;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\UpdatesController;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', [PostsController::class, 'index'])->name('welcome');
Route::resource('/', \App\Http\Controllers\PostsController::class);
Route::get('/aboutpage', [AboutController::class, 'index'])->name('aboutpage');
Route::get('/viewproperties', [PostsController::class, 'viewproperties'])->name('posts.viewproperties');
Route::get('/buyproperties', [PostsController::class, 'showbuy'])->name('posts.showbuy');
Route::get('/rentproperties', [PostsController::class, 'showrent'])->name('posts.showrent');
Route::get('showproperty/{id}', [PostsController::class, 'showproperty'])->name('posts.showproperty');
// Route::put('showproperty/{id}', [PostsController::class, 'store'])->name('posts.store');
Route::get('/authorization', [Controller::class, 'authorization'])->name('modal.authorization-modal');
Route::get('showupdate/{id}', [PostsController::class, 'showupdate']) ->name('posts.showupdate');
Route::get('/newsupdates', [UpdatesController::class, 'newsupdates'])->name('updates.newsupdates');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');



Route::middleware(['auth','verified'])->group(function () {
    Route::resource('accounts', \App\Http\Controllers\UserController::class);
    Route::resource('properties', \App\Http\Controllers\PropertiesController::class);
    Route::resource('inquiry', \App\Http\Controllers\InquiryController::class);
    Route::resource('updates', \App\Http\Controllers\UpdatesController::class);
    Route::get('/dashboard', [UserAccountController::class, 'index'])->name('dashboard');
    Route::get('/profile/{id}', [UserAccountController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [UserAccountController::class, 'update'])->name('profile.update');
    Route::get('/userinquiries', [UserAccountController::class, 'showinquiries'])->name('profile.inquiries');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
