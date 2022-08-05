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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/hal1', function () {
    return view('hal1');
});
Route::get('/hal2', function () {
    return view('hal2');
});
Route::get('/hal3', function () {
    return view('hal3');
});
Route::get('/hal4', function () {
    return view('hal4');
});