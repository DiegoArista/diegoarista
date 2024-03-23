<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->take(4)->get();
        return view('welcome')->with(compact('posts')); //listado de productos



     
        return view('welcome'); //listado de productos
    }
}
