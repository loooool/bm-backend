<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Relation;
use App\User;
use Illuminate\Http\Request;

class ManualEnter extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
        $this->middleware('Administrator');
    }
    public function index(){
        $infos = Relation::all();
        return view('admin.manual',compact('infos'));
    }
    public function store(Request $request){
        if(Relation::all()->where('block_id', $request['block'])->where('floor_id', $request['floor'])->where('model_id', $request['model'])->first()) {
            session()->flash('error');
            return redirect('/home/manual');
        }
        else {
            $user = User::create(['name'=>$request['name'],'last_name'=>$request['last_name'],'register_number'=>$request['register_number'],'phone_number'=>$request['phone_number'],'email'=>$request['email'],'country'=>'mn','password'=>0]);
            Contract::create(['user_id'=>$user->id, 'sent_date'=>Date('Y-m-d'),'completed_date'=>Date('Y-m-d'),'purchased_date'=>Date('Y-m-d')]);
            Relation::create(['user_id'=>$user->id, 'block_id'=>$request['block'], 'floor_id'=>$request['floor'], 'model_id'=>$request['model'], 'state'=>3,'created_at'=>Date('Y-m-d')]);
            return redirect('/home/manual');
        }
    }

}
