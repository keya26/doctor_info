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

Route::get('/', array('as' =>'home' ,'uses' => 'UserController@index'));

Route::get('/about_us', array('as' =>'about_us' ,'uses' => 'UserController@about_us'));

Route::get('/district/{id}', array('as' =>'district' ,'uses' => 'UserController@district'));

Route::get('/district/hospital/{id}', array('as' =>'hospital' ,'uses' => 'UserController@hospital'));

Route::get('/hospital_info', array('as' =>'hospital_info' ,'uses' => 'UserController@hospital_info'));

Route::get('/districts/{id}', array('as' =>'districts' ,'uses' => 'UserController@districts'));

Route::get('/districts/doctor/{id}', array('as' =>'doctor' ,'uses' => 'UserController@doctor'));

Route::get('/doctor_info', array('as' =>'doctor_info' ,'uses' => 'UserController@doctor_info'));

Route::get('/contact', array('as' =>'contact' ,'uses' => 'ContactController@getContactIndex'));

Route::post('/contact', array('as' =>'contact.send' ,'uses' => 'ContactController@postSendMessage'));
// Authentication routes...
Route::get('auth/login', array('as' =>'login' ,'uses' =>'Auth\AuthController@getLogin'));
Route::post('auth/login', array('as' =>'login' ,'uses' => 'Auth\AuthController@postLogin'));
Route::get('auth/logout', array('as' =>'logout' ,'uses' =>'Auth\AuthController@getLogout'));

// Registration routes...
Route::get('auth/register',array('as' =>'register' ,'uses' => 'Auth\AuthController@getRegister'));
Route::post('auth/register', array('as' =>'register' ,'uses' =>'Auth\AuthController@postRegister'));

// Password reset link request routes...
Route::get('password/email', array('as' =>'email' ,'uses' => 'Auth\PasswordController@getEmail'));
Route::post('password/email', array('as' =>'email' ,'uses' => 'Auth\PasswordController@postEmail'));

// Password reset routes...

Route::get('password/reset/{token}', [
        'as' => 'reset',
        'uses' => 'Auth\PasswordController@getReset'
    ]);

    Route::post('password/reset/{token}', [
        'as' => 'resetPost',
        'uses' => 'Auth\PasswordController@postReset'
    ]);

// Route::get('password/reset/{token}', ['as' => 'reset', function ($token) {
//     return view('auth.reset')->with($token);
// }]);
// //Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
// Route::post('password/reset',array('as' =>'reset' ,'uses' => 'Auth\PasswordController@postReset'));



// Route::get('admin', ['middleware' => 'admin', 'uses' => 'AdminController@index']);

Route::get('/home', ['middleware' => 'auth',
        'as' => 'admin',
        'uses' => 'AdminController@index'
    ]);

// Route::get('/home', [
//         'as' => 'admin',
//         'uses' => 'AdminController@index'
//     ]);


