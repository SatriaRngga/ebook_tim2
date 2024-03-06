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
    return view('welcome');
});


Route::get('/belibuku', function () {
    return view('belibuku');
});


Route::get('/deskripsibuku', function () {
    return view('Deskripsi Buku');
 
Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/beli', function () {
    return view('beli');
});

Route::get('/login', function () {
    return view('login');
});

