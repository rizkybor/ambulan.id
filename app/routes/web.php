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
    return view('layouts.contents.home');
});

Route::get('/services', function () {
    return view('layouts.contents.service');
});

Route::get('/contact-us', function () {
    return view('layouts.contents.contact');
});

