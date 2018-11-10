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

use App\Counter;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $user = Auth::user();
    $counter = Counter::find(1);
    $counter->views = $counter->views + 1;
    $counter->save();
    return view('welcome');
})->name('welcome');

Route::get('god', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('god', [
    'as' => 'login',
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
Route::get('/home/users', 'AdminUserController@index')->name('usr');


Route::get('verify', 'VerifyController@index')->name('verify');
Route::post('verify', 'VerifyController@store')->name('verify');


//------MODELS------
Route::get('/models', function () {
    return view('models');
})->name('models');

//Model a
Route::get('/models/a', function () {
   return view('models.a');
})->name('a');
Route::get('/models/choose/a', function () {
    session()->put('design', '1');;
    return redirect(route('block'));
});
//Model b
Route::get('/models/b', function () {
   return view('models.b');
})->name('b');
Route::get('/models/choose/b', function () {
    session()->put('design', '2');
    return redirect(route('block'));
});


Route::get('/reg', function () {
    return view('register');
})->name('reg');


//------BLOCKS------
Route::get('/block', function () {
    if (session('design')) {
        $design = \App\Design::find(session('design'));
        return view('block', compact('design'));
    } else {
        return redirect('models');
    }
})->name('block');

//Block a
Route::get('/block/a', function () {
    session()->put('block', 'a');
})->name('block_a');

//Block b
Route::get('/block/b', function () {
    session()->put('block', 'b');
})->name('block_b');

//Block c
Route::get('/block/c', function () {
    session()->put('block', 'c');;
})->name('block_c');


//------FLOORS------
Route::get('/floor', function () {
    return view('floor');
})->name('floor');

