<?php

namespace App\Http\Controllers;

use App\User;
use Aloha\Twilio\Support\Laravel\Facade as Twilio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */


    public function index($design, $block, $floor)
    {
        if (Auth::check()) {
            return redirect('/models/'.$design.'/block/'.$block.'/floor/'.$floor.'/contract');
        }
        return view('register', compact('design', 'block', 'floor'));
    }

    //-----------------REGISTER-----------

    public function store(Request $data)
    {
        //Validator messages
        $messages = [
            'email.required' => 'Та цахим хаягаа оруулна уу',
            'name.required' => 'Та нэрээ оруулна уу',
            'last_name.required' => 'Та овогоо оруулна уу',
            'password.required' => 'Та нууц үг оруулна уу',
            'phone_number.required' => 'Та утасны дугаараа оруулна уу',
            'register_number.required' => 'Та регистрийн дугаараа оруулна уу',
        ];

        //Validation
        $data->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|max:30',
            'register_number' => 'required|string|max:15',
        ], $messages);

        //Database creation
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'register_number' => $data['register_number'],
            'last_name' => $data['last_name'],
            'country' => $data['country'],
            'phone_number' => $data['code'] . $data['phone_number'],
            'password' => Hash::make($data['password']),
            'country' => $data['country']
        ]);



        //Login after register
        $credentials = $data->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/models/'.$data['design'].'/block/'.$data['block'].'/floor/'.$data['floor'].'/verification');
        }


    }




    //---------LOG IN----------------------
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if(Auth::user()->verified == 1) {
                return redirect()->intended('/models/'.$request['design'].'/block/'.$request['block'].'/floor/'.$request['floor'].'/contract');
            } else {
                return redirect()->intended('/models/'.$request['design'].'/block/'.$request['block'].'/floor/'.$request['floor'].'/verification');
            }

        } else {
            session()->flash('login');
            return redirect()->intended('/models/'.$request['design'].'/block/'.$request['block'].'/floor/'.$request['floor']);
        }
    }


    //SMS Verification
    public function verification($design, $block, $floor) {
        if(Auth::check()) {
            if (Auth::user()->verified == 0) {
                if (session('verification_code')) {
                    return view('verification', compact('design', 'block', 'floor'));
                } else {
                    $phone_number = Auth::user()->phone_number;
                    $verification_code = str_random(4);
                    Twilio::message($phone_number, 'Pyramid Apartment баталгаажуулах код: ' . $verification_code);
                        session(['verification_code' => $verification_code]);
                    return view('verification', compact('design', 'block', 'floor'));
                }
            } else {
                return redirect()->intended('/models/'.$design.'/block/'.$block.'/floor/'.$floor.'/contact');
            }
        } else {
            return redirect('welcome');
        }

    }


    //SMS Verifying
    public function verify(Request $request) {
        if (Auth::user()->verified == 0) {
            if (session('verification_code')) {
                if ($request->verification_code == session('verification_code')) {
                    User::find(Auth::user()->id)->update(['verified' => 1]);
                    session()->forget('verification_code');
                    return redirect('/models/'.$request['design'].'/block/'.$request['block'].'/floor/'.$request['floor'].'/contract');
                } else {
                    session()->flash('error');
                    return redirect()->back();
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
