<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Subscription;
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
        $posts = Post::where('user_id', auth()->user()->id);

        $posts_p = Post::where('status', 'PUBLISHED')->get()->count();

        $posts_d = Post::where('status', 'DRAFT')->get()->count();
        $subscriptors = Subscription::get()->count();
        $categories = Category::get()->count();
        $tags = Tag::get()->count();

        return view('home', compact('posts_p', 'posts_d', 'subscriptors', 'categories', 'tags'));

    }


}
