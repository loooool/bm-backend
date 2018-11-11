<?php

namespace App\Http\Controllers;

use App\Counter;
use App\Relation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
        $this->middleware('Administrator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $counter = Counter::find(1);
        $superuser = Relation::all();
        $user1 = $superuser->where('state', '1');
        $user2 = $superuser->where('state','2');
        $user3 = $superuser->where('state','3');
        return view('home', compact('user','counter','superuser','user1','user2','user3'));
    }
}
