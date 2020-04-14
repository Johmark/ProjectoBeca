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

/*App routes*/
Route::get('/veca', function () {
    return view('veca.index');
});
Route::get('/veca/add', function () {
    return view('veca.add');
});
Route::get('/veca/rules', function () {
    return view('veca.rules');
});
Route::get('/veca/comments', function () {
    return view('veca.comments');
});
Route::get('/veca/aboutUs', function () {
    return view('veca.aboutUs');
});