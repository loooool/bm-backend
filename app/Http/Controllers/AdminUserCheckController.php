<?php

namespace App\Http\Controllers;

use Aloha\Twilio\Support\Laravel\Facade as Twilio;
use App\Contract;
use App\Design;
use App\Relation;
use App\User;
use Illuminate\Http\Request;

class AdminUserCheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Administrator');
    }
    public function index($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        if($rela == ''){
            return view('admin.cancel',compact('rela'));
        }
        else {
            $total = $rela->design->square * 1950000;
            return view('admin.user_check', compact('user', 'rela', 'total'));
        }
        }
    //geree yavuulsan tovchin controller
    public function action($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        $rela->update(['state' => '1']);
        Contract::create(['user_id'=> $user->id, 'sent_date' => Date('Y-m-d'),'completed_date'=> Date('Y-m-d'),'purchased_date'=> Date('Y-m-d')]);
        if($rela == ''){
                  return view('admin.user_check');
        }
        else{
            $total = $rela->design->square*1950000;
            Twilio::message($user->phone_number, 'Pyramid Apartment. Таны гэрээ шудангаар илгээгдлээ. Гэрээгээ 14 хоногийн дотор гарын үсгээ зураад буцааж илгээхгүй бол таны захиалга цуцлагдах болохыг анхаарна уу!');
            return view('admin.user_check',compact('user','rela','total'));

        }
    }
    // geree hiisen tovchnii controller
    public function action1($id){
        $user= User::find($id);
        $rela = Relation::all()->where('user_id',$id)->whereIn('state',['0','1','2','3'])->last();
        $rela->update(['state' => '2']);
        $total = $rela->design->square*1950000;
        Contract::find($user->contract->id)->update(['completed_date'=> Date('Y-m-d')]);
        return view('admin.user_check',compact('user','rela','total'));
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
            Twilio::message($user->phone_number, 'Pyramid Apartment. Таны төлбөрийг хүлээн авч байр тань амжилттай захиалагдлаа.');
            return view('admin.user_check',compact('user','rela'));}
        else {
            return view('admin.passcode',compact('user','rela'));
        }
    }
    public function cancel($id){
        $rela=Relation::find($id);
        $rela->delete();
        return view('admin.cancel',compact('rela'));
    }
}
