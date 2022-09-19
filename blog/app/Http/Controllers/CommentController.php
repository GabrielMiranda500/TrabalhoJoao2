<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use GuzzleHttp\Psr7\Request;

class CommentController extends Controller
{
    /*
        mostrar todos
    */
    public function index (Request $request)
    {
        //
    }


    public function store(Request $request)
    {
        $post = new comment();

        $post->descricao = $request->descricao;
        $post->usuario = $request->usuario;
        $post->fk_postagem_id = $request->k_postagem_id;
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
