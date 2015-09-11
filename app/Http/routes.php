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
Route::get('/account/register', 
	array('as' => 'login', 'uses' => 'Auth\AuthController@getRegister')
);
Route::post('account/register', 
	array('as' => 'register', 'uses' => 'Auth\AuthController@postRegister')
);
Route::get('/account/login',
	array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin')
);
Route::post('/account/login', 
	array('as' => 'login', 'uses' => 'Auth\AuthController@postLogin')
);
Route::get('/account/logout', 
	array('as' => 'logout', 'uses' => 'Auth\AuthController@getLogout')
);
Route::get('/account/userinfo', [
    'as'            => 'account',
    'uses'          => 'UserController@getUserInfo',
    'middleware'    => ['auth']
]);
