<?php

use App\Http\Controllers\ProfileController;
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

//============================[本番]=====================================


Route::get('/',function (){
    return view("kikukawa");
});
Route::get('/', [\App\Http\Controllers\kikukawaController::class,"giveInfo"])->name('giveInfo');

Route::get('/dashboard-main', [\App\Http\Controllers\kikukawaController::class,"dashboardMain"])->name('dashboardMain');

Route::get('/dashboard-user', [\App\Http\Controllers\kikukawaController::class,"dashboardUser"])->name('dashboardUser');

Route::post("add-event",[\App\Http\Controllers\kikukawaController::class,"addEvent"])->name("add-event");

Route::post("add-category",[\App\Http\Controllers\kikukawaController::class,"addCategory"])->name("add-category");

Route::get("add-category",[\App\Http\Controllers\kikukawaController::class,"test"])->name("test");


//=====================================================================================================

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
