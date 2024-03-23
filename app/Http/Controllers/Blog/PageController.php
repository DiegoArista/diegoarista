<?php

namespace App\Http\Controllers\Blog;
use App\Post;
use App\Category;
use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   
    public function blog(){
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);
        $categories = Category::all();
        $tagsall = Tag::all();
        return view('blog.blog')->with(compact('posts', 'categories', 'tagsall'));   //listado de articulos
    }

    // public function search($query, $search){
    //     if($search) 
    //     return $query->where('name', 'LIKE', "%$search%", 'OR ', 'category', 'LIKE',  "%$search%",'OR ', 'tag', 'LIKE', "%$search%");
    // }
 


   
    public function post($slug){
        $categories = Category::all();
        $post = Post::where('slug', $slug)->first();

        $last_articles = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->take(6)->get();
      
           return view('blog.post')->with(compact('post', 'categories', 'last_articles'));   
    
    }
    
    public function category($slug){
        $categories = Category::all();
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')
        ->paginate(9);
        return view('blog.categorias')->with(compact('posts', 'categories'));   
    
    }
  
    public function tag($slug){
        $categories = Category::all();
        $tagsall = Tag::all();
        $posts = Post::whereHas('tags', function($query)  use($slug){
        $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')
        ->paginate(9);
           return view('blog.etiquetas')->with(compact('posts',  'categories', 'tagsall'));   
    
    }
      // metodo index devolveran una vista
     
}
