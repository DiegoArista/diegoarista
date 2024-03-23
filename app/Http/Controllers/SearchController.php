<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
class SearchController extends Controller
{
   public function show(Request $request )  {
       $query= $request->input('query');
       $posts = Post::where('name', 'like', "%$query%")
       ->orderBy('id', 'DESC')
       ->paginate(9);
       $categories = Category::all();
       $tagsall = Tag::all();
       return view('search.show')->with(compact('posts', 'query', 'categories', 'tagsall'));
   }
}
