<?php

namespace App\Http\Controllers;

use App\Counter;
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
        return view('home', compact('user','counter'));
    }
    public function info(){
        $
    }
}
