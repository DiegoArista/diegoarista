<?php

namespace App\Http\Controllers\admin;
use App\Tag;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class TagController extends Controller
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
        $tags = Tag::orderBy('id', 'DESC')->paginate();
        // dd($tags);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  vemos formulario
    public function create()
    {
        return view('admin.tags.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // guardamos y redirige a editar
    public function store(TagStoreRequest $request)
    {
        //validamos aqui

      
        $tag = Tag::create($request->all());
        return redirect()->route('tags.edit', $tag->id)
        ->with('info', 'Etiqueta creada con exito');
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
       $tag = Tag::find($id);
       return view('admin.tags.show', compact('tag') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
       return view('admin.tags.edit', compact('tag') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
          //dd($request->all());
        //validamos
         $tag = Tag::find($id);
         $tag->name = $request->input('name');
         $tag->slug = $request->input('slug');
         $tag->save();
     
    //    $tag->fill($request->all())->save();

    return redirect()->route('tags.edit', $tag->id)
    ->with('info', 'Etiqueta actualizada con exito');


        





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
        $tag =Tag::where('id',$id);

        if ($tag != null) {
            $tag->delete();
            return redirect('tags')->with(['info' => '¡Etiqueta eliminada!']);
            // $tag->delete();
            // return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
        }
        // $tag = Tag::find($id)->delete();

        return redirect('tags')->with(['info' => '¡Etiqueta eliminada!']);
        // return back()->with('info', 'Etiqueta eliminada');
    }
}