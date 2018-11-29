<?php

namespace App\Http\Controllers;

use App\Design;
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
        $design = \App\Design::find($design);
        return view('contract', compact('block', 'floor', 'design'));
    }

    public function store(Request $request) {
        $location = $request->location;
        if(Relation::all()->where('block_id', $request['block'])->where('floor_id', $request['floor'])->where('model_id', $request['design'])) {
            Relation::create(['user_id'=>Auth::user()->id, 'block_id'=>$request['block'], 'floor_id'=>$request['floor'], 'model_id'=>$request['design'], 'state'=>1]);
            $user = Auth::user();
            $user->location = $location;
            $user->save();
            return redirect('final');
        }

        session()->flash('already');
        return redirect('models');

    }
    public function final() {
        $relation = Auth::user()->order;
        $block = $relation->block_id;
        $floor = $relation->floor_id;
        $design = Design::find($relation->model_id);
        return view('final', compact('block', 'floor', 'design'));
    }
}
