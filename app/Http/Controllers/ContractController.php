<?php

namespace App\Http\Controllers;

use App\Relation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('user.verification');
    }

    public function index($design, $block, $floor) {
        $block = session('block');
        $floor = session('floor');
        $design = \App\Design::find(session('design'));
        return view('contract', compact('block', 'floor', 'design'));
    }

    public function store(Request $request) {
        $location = $request->location;
        Relation::create(['user_id'=>Auth::user()->id, 'block_id'=>session('block'), 'floor_id'=>session('floor'), 'model_id'=>session('design'), 'state'=>1]);
        $user = Auth::user();
        $user->location = $location;
        $user->save();

        return redirect('final');
    }
    public function final() {

    }
}
