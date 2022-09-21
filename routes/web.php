<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/empresa', function() {
    return view('empresa');
});


Route::get('/produtos', function() {
    return view('produtos');
});

Route::get('/grupo-de-produtos', function() {
    return view('grupo-de-produtos');
});

Route::get('/produtos/detalhes', function() {
    return view('produtos-detalhes');
});