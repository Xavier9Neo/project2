<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckOngkirController;


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
 
 Route::get('provinces', [CheckOngkirController::class, 'province'])->name('provinces');
 Route::get('cities', [CheckOngkirController::class, 'city'])->name('cities');
 Route::post('check-ongkir', [CheckOngkirController::class, 'checkOngkir'])->name('check-ongkir');
 
// Route::get('/', function () {
//      // return view('welcome'); ganti dengan yang baru      
//      return view('home'); 
// });

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/get-cities/{province_id}', [CityController::class, 'getCities']);

// Route::post('/store', [HomeController::class, 'store']) -> name('store');