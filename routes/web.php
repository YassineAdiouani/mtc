<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ForController;
use App\Http\Controllers\PlaylistController;
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

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/',[FormationController::class, 'index']);
Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/mesformations',[HomeController::class, 'form'])->middleware('auth')->name('mesformations');

Route::get('/for/{form}', [FormationController::class, 'for'])->middleware('auth')->name('formation.for');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::put('/formation/{id}', [ForController::class, 'update'])->name('formation.update');
    Route::delete('/formation/{id}', [ForController::class, 'destroy'])->name('formation.destroy');
    Route::resource('/formation', ForController::class)->except('update', 'show', 'destroy');
    // user side
    Route::delete('/user/{user}', [ForController::class, 'user_destroy'])->name('user.destroy');
    Route::get('/user', [ForController::class, 'user_index'])->name('user.index');
    Route::get('/user/create', [ForController::class, 'user_create'])->name('user.create');
    Route::post('/user/store', [ForController::class, 'user_store'])->name('user.store');
    Route::get('/user/{user}/edit', [ForController::class, 'user_edit'])->name('user.edit');
    Route::put('/user/{user}', [ForController::class, 'user_update'])->name('user.update');

    Route::resource('/playlist', PlaylistController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';