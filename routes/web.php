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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('static.about');
});

Route::get('/contact', function () {
    return view('static.contact');
});

Route::get('/daftarkelas', function () {
    return view('kelas');
});

Route::get('/kelas-info', function () {
    return view('kelas-info');
});



Auth::routes();

Route::resource('/user', 'UserController');
Route::resource('/kelas', 'KelasController');
