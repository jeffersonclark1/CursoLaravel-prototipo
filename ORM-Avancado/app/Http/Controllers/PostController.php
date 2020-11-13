<?php

namespace App\Http\Controllers;

use App\Post;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);

        echo "<h1>Artigos</h1><br>";
        echo "Titulo : {$posts->title} <br>";
        echo "Subtitle:  {$posts->subtitle}<br>";
        echo "Description : {$posts->description} <br><hr>";

        $usersPosts = $posts->author()->get()->first();

        if($usersPosts){
            echo "<h1>Dados do usuario</h1><br>";
            echo "Nome do usuario {$usersPosts->name} <br>";
            echo "Nome do email {$usersPosts->email}<br>";
        }

        $categories = $posts->categories()->get();

        if($categories){
            echo "<h1>Dados da categoria</h1><br>";
            foreach ($categories as $category) {
                echo "#{$category->id} Categoria {$category->name} <br>";
            }
        }

//        $posts->categories()->attach([3]);
//        $posts->categories()->detach([3]);
//        $posts->categories()->sync([5,10]);
//        $posts->categories()->syncWithoutDetaching([5,6,7]);

        $posts->comments()->create([
            'content' => 'Teste de comentario 123999'
        ]);

        $comments = $posts->comments()->get();

        if($comments){
            echo "<h1>Dados da comentarios</h1><br>";
            foreach ($comments as $comment) {
                echo "#{$comment->id} Categoria {$comment->content} <br>";
            }
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
