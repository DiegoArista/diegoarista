<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SubsStoreRequest;
use App\Subscription;
class SubscriptorController extends Controller
{
     // guardamos y redirige a editar
     public function store(SubsStoreRequest $request)
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
        // dd($request->all());

        $subscriptor = new Subscription();
        $subscriptor->email = $request->input('email');

         $subscriptor->save(); //ejecuta un insert
        return redirect('/#contacto')
        ->with('info', '¡Te has subscrito con éxito!');

    }
}
