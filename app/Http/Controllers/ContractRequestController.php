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
        $this->middleware('Administrator');
    }
    public function index(){
        $relas = Relation::all()->where('state',0);
        $relas1 = Relation::all()->where('state',1);
        $relas2 = Relation::all()->where('state',2);
        $relas3 = Relation::all()->where('state',3);

        return view('admin.contract_request',compact('relas','relas1','relas2','relas3'));
    }
}
