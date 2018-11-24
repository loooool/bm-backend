<?php

namespace App\Http\Controllers;

use App\Relation;
use App\User;
use Illuminate\Http\Request;

class ContractRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
        $this->middleware('Administrator');
    }
    public function index(){
        $relas = Relation::all()->where('state',0);

        return view('admin.contract_request',compact('relas'));
    }
}
