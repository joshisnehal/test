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
    return view('welcome');
});

Route::get('sign_up',['as' => 'user.sign_up_form','uses' => 'SignupController@index']);
        
Route::post('register',['as' => 'user.sign_up','uses' => 'SignupController@register']); 
