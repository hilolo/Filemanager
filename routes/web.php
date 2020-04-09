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
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Files', 'HomeController@fileindex');

Route::get('/AddFiles', 'HomeController@fileadd');
Route::POST('/multifiles', 'HomeController@Fileinsert');
Route::get('/deletefile/{id}', 'HomeController@deletefile');
Route::get('/deletegroup/{id}', 'HomeController@deleteGroup');


//addmore

Route::get('/Addfiles/{id}', 'HomeController@addfileindex');
Route::POST('/Addfilegroup/{id}', 'HomeController@addmorefilein');