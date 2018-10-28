<?php

namespace App\Http\Controllers;

use Aloha\Twilio\Support\Laravel\Facade as Twilio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyController extends Controller
{
    public function index() {
        if (Auth::user()->verified == 0) {
            if (session('verification_code')) {
                return view('auth.verify');
            } else {
                $phone_number = Auth::user()->phone_number;
                $verification_code = str_random(4);
                session(['verification_code' => $verification_code]);
                Twilio::message($phone_number, 'Pyramid Apartment баталгаажуулах код: ' . $verification_code);
                return view('auth.verify');
            }
        } else {
            return redirect()->route('home');
        }


    }


    public function store(Request $request) {
        if (Auth::user()->verified == 0) {
            if (session('verification_code')) {
                if ($request->verification_code == session('verification_code')) {
                    User::find(Auth::user()->id)->update(['verified' => 1]);
                    session()->forget('verification_code');
                    return redirect('/home');
                } else {
                    session()->flash('error');
                    return redirect()->back();
                }
            }
        }
    }


}
