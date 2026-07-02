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

    public function ContactInfoStore(Request $request){
        Contact::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'query'=> $request->input('query'),
        ]);
        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}

