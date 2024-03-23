<?php

namespace App\Http\Controllers\admin;
use App\Post;
use App\Category;
use App\Tag;

use App\Subscription;
use App\Mail\NewPost;

use Mail;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  mostramos lista entera de etiquetas
    public function index()
    {
        //listados los posts segun el id de usuario que los creo
        $posts = Post::orderBy('id', 'DESC')
        ->where('user_id', auth()->user()->id)
        ->paginate();
        // dd($posts);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  vemos formulario
    public function create()
    {
        $categories = Category::orderby('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderby('name', 'ASC')->get();



        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     *
     * @return \Illuminate\Http\Response
     */
    // guardamos y redirige a editar
    public function store(PostStoreRequest $request)
    {
        //validamos aqui

        // $post = new Post();
        // $post->name = $request->input('user_id');
        // $post->name = $request->input('category_id');
        // $post->name = $request->input('name');
        // $post->slug = $request->input('slug');
        // $post->slug = $request->input('excerpt');
        // $post->body = $request->input('body');

        // $post->save(); //ejecuta un insert
        // return redirect('posts')->with('info', 'Entrada creada con exito');

        $post = Post::create($request->all());
        //IMAGEN
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));

            $post->fill(['file' => asset($path)])->save();
        }
        //tags
        $post->tags()->attach($request->get('tags'));

        if($request->status == 'PUBLISHED'){
            //mandamos un email a los subscriptores de un nuevo post
            $subscriptions = Subscription::all();
            Mail::to($subscriptions)->send(New NewPost($post));
            return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Entrada creada con exito');

        } else {
            return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Entrada creada con exito');

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // detalle etiqueta
    public function show($id)
    {
       $post = Post::find($id);
       $this->authorize('pass', $post);
       return view('admin.posts.show', compact('post') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        //comprobamos los accesos opermisos de politicas que creamos
        $this->authorize('pass', $post);

        $categories = Category::orderby('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderby('name', 'ASC')->get();



       return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {

        try {
        //validamos
        $post = Post::find($id);

        $this->authorize('pass', $post);

        $post->user_id = $request->input('user_id');
        $post->category_id = $request->input('category_id');

        $post->name = $request->input('name');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->excerpt = $request->input('excerpt');

        $post->status = $request->input('status');
        $post->save(); //ejecuta un insert
        // $post->fill($request->all())->save();

        //IMAGEN
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));


            $post->fill(['file' => asset($path)])->save();
        }
        //tags
        $post->tags()->sync($request->get('tags'));

        if($request->status == 'PUBLISHED'){
            //mandamos un email a los subscriptores de un nuevo post
            $subscriptions = Subscription::all();
            Mail::to($subscriptions)->send(New NewPost($post));
            return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Entrada actualizada con exito');


        } else {
            return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Entrada actualizada con exito');


        }




    } catch (\Exception $e) {
        dd($e);

        return false;
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  elimanar etiqueta
    public function destroy($id)
    {
        $post = Post::where('id',$id);
        $this->authorize('pass', $post);
        if ($post != null) {
            $post->delete();
            return redirect('posts')->with(['info' => 'Entrada eliminada!']);
            // $post->delete();
            // return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
        }
        // $post = Post::find($id)->delete();

        return redirect('posts')->with(['info' => 'Entrada eliminada!']);
        // return back()->with('info', 'Etiqueta eliminada');
    }
}
