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


Route::get('login','AuthController@login');

Route::post('userlogin','AuthController@loginUser');




    Route::get('tables','UserController@tables');

    Route::post('send','EmailController@sendmail');
    
    Route::get('admin','UserController@admin');
