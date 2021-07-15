<?php

use App\Models\Flora;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FloraMController;


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

Route::get('/', [FloraMController::class, 'index']);

Route::get('/flora', function () {
    return view('flora.index',  [
        "judul" => "Flora",
        "data" => Flora::all(),
    ]);
});

Route::get('/flora/{slug}', function ($slug) {
    return view('flora.detail',  [
        "judul" => $slug,
        "data" => Flora::cari($slug)
    ]);
});

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
