<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;

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

Route::get('/', [barangController::class, 'home']) -> name('home');

Route::get('/review/{id_barang}', [barangController::class, 'review']) -> name('review');

Route::get('/addreview', function () {
    return view('addreview');
});
