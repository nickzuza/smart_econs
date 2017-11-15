<?php

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
    return view('home');
});
Route::get('/aboutUs', function () {
    return view('aboutUs');
});
Route::get('/services1', function () {
    return view('services1');
});
Route::get('/services2', function () {
    return view('services2');
});
Route::get('/services2', function () {
    return view('services2');
});
Route::get('/projectPage', function () {
    return view('projectPage');
});
Route::get('/servicePage', function () {
    return view('servicePage');
});
Route::get('/projects2', function () {
    return view('projects2');
});
Route::get('/ourWorcs2', function () {
    return view('ourWorcs2');
});
Route::get('/workPage', function () {
    return view('workPage');
});