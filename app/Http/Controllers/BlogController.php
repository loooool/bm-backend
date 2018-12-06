<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
        $this->middleware('Administrator');
    }
    public function index() {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
    public function show($id) {
        $blog = Blog::find($id);
        return view('post', compact('blog'));
    }
    public function view(){
        $blog = Blog::all();
        return view('admin.blog',compact('blog'));
    }
    public function store(Request $request) {
        $blog = Blog::create(['title'=>$request['title'],'content'=>$request['content'],'video'=>$request['video']]);
        if ($photo = $request->file(['photo'])) {
            $photo_name = time() . $photo->getClientOriginalName();
            $photo->move('assets/images', $photo_name);
            $blog->photos()->create(['path'=>$photo_name]);
        }
        return redirect('/home/blog');
    }
    public function remove($id){
        $remove=Blog::find($id);
        $remove->delete();
        return redirect('/home/blog');
    }

}
