<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    public function index() {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function show($id) {
        $blog = Blog::find($id);
        return view('post', compact('blog'));
    }
    public function store(Request $request) {
        $blog = Blog::create();

        if ($photo = $request->file(['photo'])) {
            $photo_name = time() . $photo->getClientOriginalName();
            $photo->move('assets/images', $photo_name);
            $blog->photos()->create(['path'=>$photo_name]);
        }
    }
}
