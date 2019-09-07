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

/*Route::get('/', function () {
    return view('login');
});*/

 Auth::routes([
 	'register' => false,
 	'reset' => false
 ]);

 Route::get('/', function () {return view('auth.login');});
//Route::get('/', 'Auth\AuthController@showLoginForm');

 Route::resource('requests', 'Admin\RequestController');
 Route::resource('emails', 'Admin\EmailController');
 Route::resource('users', 'Admin\UserController');
 Route::resource('departments', 'Admin\DepartmentController');
 Route::resource('groups', 'Admin\GroupController');



 Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/users', 'Admin\UserController@users')->name('users');
Route::get('/users/addUser', 'Admin\UserController@addUser')->name('addUser');
Route::post('/users', 'Admin\UserController@addUserStore')->name('addUser');
*/

