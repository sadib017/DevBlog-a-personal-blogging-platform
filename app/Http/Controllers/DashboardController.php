<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $posts = Post::all();
        return view('private_pages.dashboard', compact('posts'));
    }

    public function createpost(){
        return view('private_pages.create-post', );
    }

    public function StorePostInfo(Request $request){
        $request->validate([
            'title'=> ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:100'],
            'category' => ['required'],
            'content'  => ['required'],
            'image_url'  => ['required'],
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'title'  => $request->title,
            'name'  => $request->name,
            'category'  => $request->category,
            'content'  => $request->content,
            'image_url'  => $request->image_url,
        ]);
        return redirect()->route('create-post')->with('success', 'Your post is created successfully!');
    }

    public function profile_show(){
        $user = Auth::user();
        return view('private_pages.profile', compact('user'));
    }

    public function profile_update(Request $request){
        $request->validate([
            'name'  => ['string', 'max:255'],
            'email' => ['email', 'unique:users,email,' . Auth::id()],    //Laravel checks: "Is sadib@gmail.com taken by anyone OTHER than ID 3?"
            'user_type' => ['in:student,teacher,developer,blogger,freelancer,other'],
        ]);

        Auth::user()->update([
            'name'  => $request->name,
            'email'  => $request->email,
            'user_type'  => $request->user_type,
        ]);


        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}
