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
    $counter = Counter::find(1);
    $counter->views = $counter->views + 1;
    $counter->save();
    return view('welcome');

})->name('welcome');


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





//------MODELS------
Route::get('/models', function () {
    return view('models');
})->name('models');


//------BLOCKS------
Route::get('models/{design}/block/', function($design) {
    $design = \App\Design::find($design);
    return view('block', compact('design'));
})->name('design.choose');


//------FLOOR------
Route::get('models/{design}/block/{block}', function ($design, $block) {
    $design = \App\Design::find($design);
    $relations = \App\Relation::where('model_id', $design->id)->where('block_id', $block)->orderBy('floor_id', 'desc')->get();
    return view('floor', compact('design', 'block', 'relations'));
//    return $relations->where('floor_id', 11)->first();
})->name('block.choose');

//------FLOOR------
Route::get('models/{design}/block/{block}/floor/{floor}', function ($design, $block) {
    $design = \App\Design::find($design);
    $relations = \App\Relation::where('model_id', $design->id)->where('block_id', $block)->orderBy('floor_id', 'desc')->get();
    return view('floor', compact('design', 'block', 'relations'));
//    return $relations->where('floor_id', 11)->first();
})->name('block.choose');


Route::get('models/{design}/block/{block}/floor/{floor}/contract', 'ContractController@index');






Route::get('/floor/{id}', function($id) {
    if (!empty(session('block') && !empty(session('design')))) {
        if (empty(\App\Relation::all()->where('block_id', session('block'))->
        where('model_id', session('design'))->where('floor_id', $id)->
        whereIn('state', [1, 2, 3])->first())) {
            if (session('design') == 1 or session('design') == 2 or session('design') == 9) {
                if ($id < 4) {
                    session()->put('floor', $id);
                    return redirect(route('reg'));
                } else {
                    //uuuuuuuuuuuuuuuuuuuuuuuuuu
                }

            } elseif(session('design') == 11 or session('design') == 10) {
                if ($id > 3) {
                    session()->put('floor', $id);
                    return redirect(route('reg'));
                } else {
                    //uuuuuuuuuuuuuuuuuuuuuuuuuu
                }
            } else {
                session()->put('floor', $id);
                return redirect(route('reg'));
            }

        } else {
            session()->flash('not_empty', 'Уучлаарай захиалцан байна');
            return redirect(route('floor'));
        }

    } else {
        return redirect()->route('welcome');
    }
});
//-------FLOOR END



//--------Register------------
Route::get('/reg', 'UserRegisterController@index')->middleware('AuthCheck')->name('reg');
Route::post('/reg', 'UserRegisterController@store')->middleware('AuthCheck')->name('reg');
Route::post('/log', 'UserRegisterController@authenticate')->middleware('AuthCheck')->name('log');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/verification', 'UserRegisterController@verification');
Route::post('/verification', 'UserRegisterController@verify')->name('verification');


//---------CONTRACT--------
Route::get('/contract', 'ContractController@index')->name('contract');
Route::post('/contract', 'ContractController@store')->name('contract');

//---------FINAL-----------
Route::get('final', 'ContractController@final')->name('final');