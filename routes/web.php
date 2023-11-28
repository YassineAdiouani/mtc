<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ForController;
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
    return view('contact');});
Route::get('/',[FormationController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('/formation', ForController::class);
    Route::put('/formation/{id}', [ForController::class, 'update'])->name('formation.update');    
    Route::delete('/formation/{id}', [ForController::class, 'destroy'])->name('formation.destroy');

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
