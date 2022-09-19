<?php
use App\Http\Controllers\Models\PostController;
use App\Http\Controllers\Models\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('postagem', [PostController::class,'store']);
Route::get('postagem', [PostController::class, 'index']);
Route::delete('postagem/deletar/{id}', [PostController::class, 'deletarPostagem']);
Route::put('postagem/{id}', [PostController::class, 'editarPostagem']);
Route::get('postagem/{id}', [PostController::class, 'verPostagem']);
Route::post('postagem/{id}/comentario', [CommentController::class,'criarComentario']);
Route::get('postagem/{id}/comentario', [CommentController::class, 'listarComentarios']);
Route::delete('postagem/{id}/comentario/{id_comentario}', [CommentController::class, 'deletarComentario']);
Route::put('postagem/{id}/comentario/{id_comentario}', [CommentController::class, 'editarComentario']);
Route::get('postagem/{id}/comentario/{id_comentario}', [CommentController::class, 'verComentario']);
Route::post('criarSubReddit', [SubRedditController::class, 'criar']);
Route::post('linkar', [RedditController::class, 'linkar']);
 

Route::get("helloworld", function(){
    return "Olá";
});

Route::post('criarSubReddit', [SubRedditController::class, 'criar']);
