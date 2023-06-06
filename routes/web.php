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

Route::get('/components', function () {
    return view('components');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/typography', function () {
    return view('typography');
});
Route::get('/icons', function () {
    return view('icons');
});
