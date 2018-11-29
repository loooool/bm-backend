<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    public function index() {
        return view('blog');
    }
    public function show($id) {

    }
}
