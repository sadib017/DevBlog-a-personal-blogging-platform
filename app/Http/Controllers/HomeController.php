<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

    $posts = post::all();
    return view('guest_view.home', compact('posts'));
    }

    public function contact(){
        return view('guest_view.contact', );
    }

    public function contactInfoStore(Request $request){
        contact::create([
            'name'=> $request->name,    //column=>value
            'email'=> $request->email,
            'query'=> $request->input('query'),
        ]);
        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}

