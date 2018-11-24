<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Relation;
use App\User;
use Illuminate\Http\Request;

class AdminUserCheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
        $this->middleware('Administrator');
    }

    public function index($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        return view('admin.user_check',compact('user','rela'));
    }
    //geree yavuulsan tovchin controller
    public function action($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        $rela->update(['state' => '1']);
        Contract::create(['user_id'=> $user->id, 'sent_date' => Date('Y-m-d'),'completed_date'=> Date('Y-m-d'),'purchased_date'=> Date('Y-m-d')]);
        return view('admin.user_check',compact('user','rela'));
    }
    // geree hiisen tovchnii controller
    public function action1($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        $rela->update(['state' => '2']);
        Contract::find($user->contract->id)->update(['completed_date'=> Date('Y-m-d')]);
        return view('admin.user_check',compact('user','rela'));
    }
    public function code($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        return view('admin.passcode',compact('user','rela'));
    }
    public function verify($id,Request $request){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        if($request['passcode'] == '12345678'){
            $rela->update(['state' => '3']);
            Contract::find($user->contract->id)->update(['purchased_date'=> Date('Y-m-d')]);
            return view('admin.user_check',compact('user','rela'));}
        else {
            return view('admin.passcode',compact('user','rela'));
        }
    }
}
