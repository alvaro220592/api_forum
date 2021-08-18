<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->user_id;

        $result = $post->save();

        if($result){
            return ['result' => 'Dados salvos com sucesso'];
        }else{
            return ['result' => 'Erro ao cadastrar'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->user_id;

        $result = $post->save();

        if($result){
            return ['result' => 'Dados alterados com sucesso'];
        }else{
            return ['result' => 'Erro ao alterar'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $result = $post->delete();

        if($result){
            return ['result' => 'Dados excluídos com sucesso'];
        }else{
            return ['result' => 'Erro ao excluir'];
        }
    }
}
