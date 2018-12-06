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

Route::get('test', function () {
    $n = 10;
    $s = 1000;
    for ($i = 0; $i<=$n; $i++) {
        $s = $s * 2653;
        $s = $s / 2633;
    }
    return $s;
});

Route::get('/', function () {
    $d = strtotime("-2 weeks");
    $relations = \App\Relation::where('state', 1)->whereDate('updated_at', '<', date('Y-m-d', $d));
    foreach ($relations->get() as $relation) {
        $relation->contract->delete();
        $relation->delete();
    }
    if (session('welcome')){
    } else {
        session()->put('welcome', 'd');
        $counter = Counter::find(1);
        $counter->views = $counter->views + 1;
        $counter->save();
    }

    return view('welcome');

})->name('welcome');

Route::get('blog', 'BlogController@index');
Route::get('blog/{id}', 'BlogController@show');


//-----ADMIN SECTION
Route::get('god', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('god', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);

Route::get('home/user_check/{id}','AdminUserCheckController@index')->name('god_users_id');

Route::get('home/user_check/{id}/action','AdminUserCheckController@action')->name('action');
Route::get('home/user_check/{id}/action1','AdminUserCheckController@action1')->name('action1');

Route::get('home/user_check/{id}/code','AdminUserCheckController@code')->name('code');

Route::get('home/user_check/{id}/verify','AdminUserCheckController@verify')->name('verify');
Route::post('home/user_check/{id}/verify','AdminUserCheckController@verify')->name('verify');

Route::get('home/user_check/{id}/cancel','AdminUserCheckController@cancel')->name('cancel');



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
Route::get('/home/user_check', 'AdminUserCheckController@index')->name('user_check');
Route::get('/home/contract_request', 'ContractRequestController@index')->name('contract_request');


Route::get('verify', 'VerifyController@index')->name('verify');
Route::post('verify', 'VerifyController@store')->name('verify');

Route::get('/home/manual', 'ManualEnter@index')->name('manual');
Route::post('/home/manual', 'ManualEnter@store')->name('manual');

Route::get('/home/blog', 'BlogController@view')->name('blog');
Route::post('/home/blog', 'BlogController@store')->name('blog');
Route::get('/home/blog/{id}','BlogController@remove')->name('remove');


//------MODELS------
Route::get('/models', function () {
    return view('models');
})->name('models');

Route::get('models/{design}', function($design) {
    if ($design == 1) {
        $model = 'a';
    } elseif ($design == 2) {
        $model = 'b';
    } elseif ($design == 3) {
        $model = 'c';
    } elseif ($design == 4) {
        $model = 'd';
    } elseif ($design == 5) {
        $model = 'e';
    } elseif ($design == 6) {
        $model = 'f';
    } elseif ($design == 7) {
        $model = 'g';
    } elseif ($design == 8) {
        $model = 'h';
    } elseif ($design == 9) {
        $model = 'i';
    } elseif ($design == 10) {
        $model = 'j';
    } else {
        $model = 'k';
    }
    //Counter
    if (session($model)){
    } else {
        session()->put($model, 'd');
        $counter = Counter::find(1);
        $counter->$model = $counter->$model + 1;
        $counter->save();
    }
    return view('models.'.$model);
});
//------BLOCKS------
Route::get('models/{design}/block', function($design) {
    $design = \App\Design::find($design);
    return view('block', compact('design'));
});


//------FLOOR------
Route::get('models/{design}/block/{block}', function ($design, $block) {
    $design = \App\Design::find($design);
    $relations = \App\Relation::where('model_id', $design->id)->where('block_id', $block)->orderBy('floor_id', 'desc')->get();
    return view('floor', compact('design', 'block', 'relations'));
//    return $relations->where('floor_id', 11)->first();
})->name('block.choose');
//-------FLOOR END


//--------Register------------
Route::get('/models/{design}/block/{block}/floor/{floor}', 'UserRegisterController@index')->name('reg');
Route::post('/reg', 'UserRegisterController@store')->name('reg');
Route::post('/log', 'UserRegisterController@authenticate')->name('log');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/models/{design}/block/{block}/floor/{floor}/verification', 'UserRegisterController@verification');

Route::get('/models/{design}/block/{block}/floor/{floor}/contract', 'ContractController@index');
Route::post('/verification', 'UserRegisterController@verify')->name('verification');


//---------CONTRACT--------
Route::get('/contract', 'ContractController@index')->name('contract');
Route::post('/contract', 'ContractController@store')->name('contract');

//---------FINAL-----------
Route::get('final', 'ContractController@final')->name('final');

Route::get('user', function(){
    if (Auth::check()) {
        return redirect('final');
    }
    return view('login');
});
Route::post('user', 'UserRegisterController@authentication');