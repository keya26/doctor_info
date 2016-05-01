<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', array('as' =>'home' ,'uses' => 'UserController@home'));

Route::get('/about_us', array('as' =>'about_us' ,'uses' => 'UserController@about_us'));

Route::get('/hospital', array('as' =>'hospital' ,'uses' => 'UserController@hospital'));

Route::get('/hospital_info', array('as' =>'hospital_info' ,'uses' => 'UserController@hospital_info'));

Route::get('/doctor', array('as' =>'doctor' ,'uses' => 'UserController@doctor'));

Route::get('/doctor_info', array('as' =>'doctor_info' ,'uses' => 'UserController@doctor_info'));

Route::get('/contact_us', array('as' =>'contact_us' ,'uses' => 'UserController@contact_us'));

Route::get('/sign_up', array('as' =>'sign_up' ,'uses' => 'UserController@sign_up'));

Route::get('/login', array('as' =>'login' ,'uses' => 'UserController@login'));



