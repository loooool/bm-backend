<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
  //niitlel bichih controller
    public function index() {
        $blogs = Blog::all()->sortByDesc('created_at');
        return view('blog', compact('blogs'));
    }
    public function show($id) {
        $blog = Blog::find($id);
        return view('post', compact('blog'));
    }
    public function view(){
        if(Auth::check()) {
        if(Auth::user()->email == 'khatnaa3139@gmail.com') {
            $blog = Blog::all();
            return view('admin.blog',compact('blog'));
        } else {
            return redirect()->back();
        }
        }


    }
    public function store(Request $request) {
        if(Auth::check()) {
            if(Auth::user()->email == 'khatnaa3139@gmail.com') {
                $blog = Blog::create(['title'=>$request['title'],'content'=>$request['content'],'video'=>$request['video']]);
                if ($photo = $request->file(['photo'])) {
                    $photo_name = time() . $photo->getClientOriginalName();
                    $photo->move('assets/images/uploads', $photo_name);
                    $blog->photos()->create(['path'=>$photo_name]);
                }
                return redirect('/home/blog');
            } else {
                return redirect()->back();
            }
        }


    }
    public function remove($id){
        if(Auth::check()) {
            if (Auth::user()->email == 'khatnaa3139@gmail.com') {
                $remove = Blog::find($id);
                $remove->delete();
                return redirect('/home/blog');
            } else {
                return redirect()->back();
            }
        }

    }

}
