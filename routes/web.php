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

//Model A
Route::get('/models/a', function () {
   return view('models.a');
})->name('a');
Route::get('/models/choose/a', function () {
    session()->put('design', '1');;
    return redirect(route('block'));
});
//Model B
Route::get('/models/b', function () {
   return view('models.b');
})->name('b');
Route::get('/models/choose/b', function () {
    session()->put('design', '2');
    return redirect(route('block'));
});
//Model C
Route::get('/models/c', function () {
    return view('models.c');
})->name('c');
Route::get('/models/choose/c', function () {
    session()->put('design', '3');
    return redirect(route('block'));
});
//Model D
Route::get('/models/d', function () {
    return view('models.d');
})->name('d');
Route::get('/models/choose/d', function () {
    session()->put('design', '4');
    return redirect(route('block'));
});
//Model E
Route::get('/models/e', function () {
    return view('models.e');
})->name('e');
Route::get('/models/choose/e', function () {
    session()->put('design', '5');
    return redirect(route('block'));
});
//Model F
Route::get('/models/f', function () {
    return view('models.f');
})->name('f');
Route::get('/models/choose/f', function () {
    session()->put('design', '6');
    return redirect(route('block'));
});
//Model G
Route::get('/models/g', function () {
    return view('models.g');
})->name('g');
Route::get('/models/choose/g', function () {
    session()->put('design', '7');
    return redirect(route('block'));
});
//Model H
Route::get('/models/h', function () {
    return view('models.h');
})->name('h');
Route::get('/models/choose/h', function () {
    session()->put('design', '8');
    return redirect(route('block'));
});
//Model I
Route::get('/models/i', function () {
    return view('models.i');
})->name('i');
Route::get('/models/choose/i', function () {
    session()->put('design', '9');
    return redirect(route('block'));
});
//Model J
Route::get('/models/j', function () {
    return view('models.j');
})->name('j');
Route::get('/models/choose/j', function () {
    session()->put('design', '10');
    return redirect(route('block'));
});
//Model K
Route::get('/models/k', function () {
    return view('models.k');
})->name('k');
Route::get('/models/choose/k', function () {
    session()->put('design', '11');
    return redirect(route('block'));
});




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
    session()->put('block', '1');
    return redirect(route('floor'));
})->name('block_a');

//Block b
Route::get('/block/b', function () {
    session()->put('block', '2');
    return redirect(route('floor'));
})->name('block_b');

//Block c
Route::get('/block/c', function () {
    session()->put('block', '3');;
    return redirect(route('floor'));
})->name('block_c');








//------FLOORS------
Route::get('/floor', function () {
    if (empty(session('design')) && empty(session('block'))) {
        return redirect(route('welcome'));
    } else {
        $design = \App\Design::find(session('design'));
        $block = session('block');
        $relations = \App\Relation::all()->where('design', $design->id)->where('block', $block);
        return view('floor', compact('design', 'block', 'relations'));
    }

})->name('floor');

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