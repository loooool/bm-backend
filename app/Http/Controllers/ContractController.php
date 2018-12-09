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
        if (Auth::user()->verified == 1) {
            $design = \App\Design::find($design);
            return view('contract', compact('block', 'floor', 'design'));
        } else {
            return redirect('/models/'.$design.'/block/'.$block.'/floor/'.$floor.'/verification');
        }
    }

    public function store(Request $request) {
        if (Auth::user()->verified == 1) {
            if (Auth::user()->order) {
                session()->flash('onlyone');
                return redirect('final');
            }
            $location = $request->location;
            if(Relation::all()->where('block_id', $request['block'])->where('floor_id', $request['floor'])->where('model_id', $request['design'])) {
                session()->flash('already');
                return redirect('models');
            } else {
                Relation::create(['user_id'=>Auth::user()->id, 'block_id'=>$request['block'], 'floor_id'=>$request['floor'], 'model_id'=>$request['design'], 'state'=>0]);
                $user = Auth::user();
                $user->location = $location;
                $user->save();
                return redirect('final');
            }

        } else {
            return redirect('/models/'.$request['design'].'/block/'.$request['block'].'/floor/'.$request['floor'].'/verification');
        }
    }

    public function final() {
        if($relation = Auth::user()->order) {
            $block = $relation->block_id;
            $floor = $relation->floor_id;
            $design = Design::find($relation->model_id);
            return view('final', compact('block', 'floor', 'design'));
        } else {
            session()->flash('order');
            return redirect('models');
        }

    }
}
