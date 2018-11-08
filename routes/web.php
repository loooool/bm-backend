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
})->name('welcome');

Route::get('god', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('god', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('byegod', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verify', 'VerifyController@index')->name('verify');
Route::post('verify', 'VerifyController@store')->name('verify');

Route::get('/models/a', function () {
   return view('models.a');
})->name('a');
Route::get('/models/b', function () {
   return view('models.b');
})->name('b');
Route::get('/models', function () {
    return view('models');
})->name('models');
Route::get('/reg', function () {
    return view('register');
})->name('reg');
//Route::get('/contract', function (){
//
//});
