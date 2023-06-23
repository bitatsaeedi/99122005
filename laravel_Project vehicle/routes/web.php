<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\motorcyclesController;
use App\Http\Controllers\carsController;
use App\Http\Controllers\airplanesController;
use App\Http\Controllers\busesController;
use App\Http\Controllers\bicyclesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/motorcycles',[motorcyclesController::class,'motorcycles']);
Route::get('/motorcycles/create5',[motorcyclesController::class,'create5']);
Route::get('/motorcycles/compare', [motorcyclesController::class, 'compare'])->name('motorcycles.compare');
Route::post('/motorcycles/addmotorcycles',[motorcyclesController::class,'addmotorcycles']);

Route::get('/cars',[carsController::class,'cars']);
Route::get('/cars/create1',[carsController::class,'create1']);
Route::get('/cars/compare', [carsController::class, 'compare'])->name('cars.compare');
Route::post('/cars/addcars',[carsController::class,'addcars']);

Route::get('/airplanes',[airplanesController::class,'airplanes']);
Route::get('/airplanes/create2',[airplanesController::class,'create2']);
Route::get('/airplanes/compare', [airplanesController::class, 'compare'])->name('airplanes.compare');
Route::post('/airplanes/addairplanes',[airplanesController::class,'addairplanes']);

Route::get('/buses',[busesController::class,'buses']);
Route::get('/buses/create3',[busesController::class,'create3']);
Route::get('/buses/compare', [busesController::class, 'compare'])->name('buses.compare');
Route::post('/buses/addbuses',[busesController::class,'addbuses']);

Route::get('/bicycles',[bicyclesController::class,'bicycles']);
Route::get('/bicycles/create4',[bicyclesController::class,'create4']);
Route::get('/bicycles/compare', [bicyclesController::class, 'compare'])->name('bicycles.compare');
Route::post('/bicycles/addbicycles',[bicyclesController::class,'addbicycles']);