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
    echo "Welcome!";
});

Route::get('/about', function(){
    echo "My Name is Muhammad Alif Ananda, and My NIM is 1941720078";
});

Route::get('articles/{id}', function ($id) {
    echo "Article Pages with ID ${id}";
});



