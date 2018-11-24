<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
        $this->middleware('Administrator');
    }
    public function index(){
        $members = User::all();
        return view('admin.users',compact('members'));
    }
}
