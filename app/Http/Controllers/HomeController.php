<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();
        // $posts = Post::where("id",">=","6")->get();
        // $posts = Post::where([
        //     ["id",">=","6"],
        //     ["title","like","%lo%"]
        //     ])->get();

        // $posts = Post::whereIn('id', [1, 2, 3,4,5,6,7,8])
        // ->orderBy('id','desc')
        // ->limit(2)
        // ->get();

        $users = User::all();

        // dd($users);
        // dd($users->contains(30)); DEVUELVE UN BOOL
        // dd($users->except([1,2,8,5]));
        // dd($users->only(6));
        // dd($users->find(6)); JSON devulve

        // Mire el include de RAILS
        // dd($users->load('posts'));

        // Serializacion
        // dd($users->toArray());
        dd($users->toJson());
        
        return view('home',[
            'posts'=> $posts,
            'users'=> $users,

        ]);
    }
}
