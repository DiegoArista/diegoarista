<?php

namespace App\Http\Controllers\admin;
use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class CategoryController extends Controller
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
        $categories = Category::orderBy('id', 'DESC')->paginate();
        // dd($categorys);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  vemos formulario
    public function create()
    {
        return view('admin.categories.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // guardamos y redirige a editar
    public function store(CategoryStoreRequest $request)
    {
        //validamos aqui

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->body = $request->input('body');
        $category->save(); //ejecuta un insert
        return redirect()->route('categories.edit', $category->id)
        ->with('info', 'Categoria creada con exito');

        // $category = Category::create($request->all());
        // return redirect()->route('categorys.edit', $category->id)
        // ->width('info', 'Etiqueta creada con exito');
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
       $category = Category::find($id);
       return view('admin.categories.show', compact('category') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
       return view('admin.categories.edit', compact('category') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        //validamos
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->body = $request->input('body');
        $category->save(); //ejecuta un insert
        // $category->fill($request->all())->save();
    
        return redirect()->route('categories.edit', $category->id)
        ->with('info', 'Categoria actualizada con exito');
      
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
        $category =Category::where('id',$id);

        if ($category != null) {
            $category->delete();
            return redirect('categories')->with(['info' => 'Categoria eliminada!']);
            // $category->delete();
            // return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
        }
        // $category = Category::find($id)->delete();

        return redirect('categories')->with(['info' => 'Categoria eliminada!']);
        // return back()->with('info', 'Etiqueta eliminada');
    }
}