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


Route::get('login','AuthController@login')->name('login');

Route::get('logout','AuthController@logout')->name('logout');


Route::post('userlogin','AuthController@loginUser');

Route::post('send','EmailController@sendmail');

Route::post('contactUs','MessageController@createMessage');



Route::group(['middleware'=>['admin']], function () {

    Route::get('search','SearchController@search_user');

    
    Route::post('createUser','UserController@createUser');

    Route::get('tables','MessageController@tables');

    Route::get('users_tables','UserController@users_tables');

    Route::get('admin','UserController@admin');

    Route::delete('/delete/{id}','MessageController@deleteMessage');

    });
  