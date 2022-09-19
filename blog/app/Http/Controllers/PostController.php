<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use GuzzleHttp\Psr7\Request;

class PostController extends Controller
{
    /*
        mostrar todos
    */
    public function index (Request $request)
    {
        return Post::all();
    }


    public function store(Request $request)
    {
        $post = new Post;

            $post->usuario = $request->usuario;
            $post->titulo = $request->titulo;
            $post->descricao = $request->descricao;
            $post->save();
    }

    /**
     * mostrar um item.
     */
    public function show(Request $request)
    {
        //
    }

    public function edit(Request $request)
    {
        //
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
