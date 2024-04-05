<?php

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
    return view('home');
});

Route::get("/pagina-2", function () {

    $saluto = "Ciao a tutti!";

    return view("seconda", compact("saluto"));
})->name('seconda');

Route::get("/pagina-3", function () {

    $saluto = "Ciao a tutti!";

    return view("terza", compact("saluto"));
})->name('terza');
