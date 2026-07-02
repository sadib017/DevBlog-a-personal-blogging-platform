<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    $posts = Post::all();
    return view('guest_view.home', compact('posts'));
    }

    public function contact(){
        return view('guest_view.contact', );
    }

    public function membership(){
        return view('guest_view.membership');
    }

    public function help(){
        return view('guest_view.help');
    }

    public function status(){
        return view('guest_view.status');
    }

    public function about(){
        return view('guest_view.about');
    }

    public function careers(){
        return view('guest_view.careers');
    }

    public function press(){
        return view('guest_view.press');
    }

    public function blog(){
        return view('guest_view.blog');
    }

    public function store(){
        return view('guest_view.store');
    }

    public function privacy(){
        return view('guest_view.privacy');
    }

    public function ContactInfoStore(Request $request){
        Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'query'=> $request->input('query'),
        ]);
        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}

