<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayCarController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ShowVoitureController;
use App\Http\Controllers\DeletecarController;
use App\Http\Controllers\AddcarController;
use App\Http\Controllers\LouerController;
use App\Http\Controllers\UpdateController;
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
Route::get('/',[DisplayCarController::class,'DisplayCar'])->name('dashboard');
Route::get('/userIsAuth',[DisplayCarController::class,'DisplayCarUserAuth'])->name('dashboard');

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/details/{id}',[DetailsController::class,'show']);
Route::get('/louer/{id}',[DetailsController::class,'islouer']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[ShowVoitureController::class,'show'])->name('dashboards');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboardcommades',[ShowVoitureController::class,'showcommades'])->name('dashboards');


//Route::middleware(['auth:sanctum', 'verified'])->get('/userAuth', function () {
    //return view('dashboard');
//})->name('dashboardUser');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/delete/{id}',[DeletecarController::class,'delete']);
Route::post('/addcar',[AddcarController::class,'store'])->name('addcar');
Route::get('/edit/{id}',[UpdateController::class,'editView'])->name('editview');
Route::post('/louer',[LouerController::class,'louer'])->name('louer');
Route::post('/edit/{id}',[UpdateController::class,'edit'])->name('edit');
