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

Route::post('userlogin','AuthController@loginUser');

Route::post('send','EmailController@sendmail');

Route::post('contactUs','MessageController@createMessage');



Route::group(['middleware'=>['auth','admin']], function () {

    Route::get('tables','UserController@tables');

    
    Route::get('admin','UserController@admin');

    });

   
    // MAIL_MAILER=smtp
    // MAIL_HOST=smtp.mailtrap.io
    // MAIL_PORT=2525
    // MAIL_USERNAME=44b32a43edfa96
    // MAIL_PASSWORD=37178dcfa8c0d3
    // MAIL_ENCRYPTION=tls
    // MAIL_FROM_ADDRESS=john12ayuk@gmail.com
    // MAIL_FROM_NAME="${APP_NAME}"