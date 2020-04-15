<?php

use App\Http\Controllers\HourController;
use App\Http\Controllers\UsersController;
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

/*App routes, this routes will interact with the data base
*this routes also use the controlles to route pages.
*/

//User Routes
Route::get('/user', 'UsersController@index');
Route::get('/user/info', 'UsersController@show');
Route::get('/user/edit', 'UsersController@edit');
Route::get('/user/adduser', 'UsersController@store');

//Hours Routes
Route::get('/hours/add', 'HourController@create');

//external Views
Route::get('/general/rules', function () {
    return view('general.rules');
});
Route::get('/general/comments', function () {
    return view('general.comments');
});
Route::get('/general/aboutUs', function () {
    return view('general.aboutUs');
});