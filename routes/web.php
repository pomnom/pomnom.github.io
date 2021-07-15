<?php

use App\Models\Flora;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FloraMController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/flora', [FloraMController::class, 'index']) ;

Route::get('/flora/tambah', function () {
    return view('flora.tambah',  [
        "judul" => "Flora"
    ]);
});

Route::get('/fauna', function () {
    return view('fauna.index',  [
        "judul" => "Fauna",
        "data" => Flora::all(),
    ]);
});

Route::get('/fauna/tambah', function () {
    return view('fauna.tambah',  [
        "judul" => "Fauna"
    ]);
});
