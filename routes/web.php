<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\CatogureController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CatogureController as FrontendCatogureController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categures',[FrontendCatogureController::class,'index'])->name('categures.index');
Route::get('/categures/{category}',[FrontendCatogureController::class,'show'])->name('categures.show');
Route::get('/reservation/step-one',[FrontendReservationController::class,'step_one'])->name('reservation.step.one');
Route::get('/reservation/step-tow',[FrontendReservationController::class,'step_tow'])->name('reservation.step.tow');
Route::get('/menus',[FrontendMenuController::class,'index'])->name('menus.index');
Route::post('/reservation/step-tow',[FrontendReservationController::class,'store'])->name('reservation.step.tow.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::resource('/menus',MenuController::class);
    Route::resource('/catogures',CatogureController::class);
    Route::resource('/tables',TableController::class);
    Route::resource('/reservations',ReservationController::class);
});

require __DIR__.'/auth.php';
