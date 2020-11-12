<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function forceDelete($post)
    {
        $post = Post::onlyTrashed()->find($post);

        if($post->trashed()){
            $post->forceDelete();
        }

        return redirect()->route('posts.index');

    }

    public function restore($post)
    {
        $post = Post::onlyTrashed()->find($post);

        if($post->trashed()){
            $post->restore();
        }

        return redirect()->route('posts.trashed');

    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trashed', compact('posts'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Listagem";

//        $posts = Post::where('created_at','>=',date('Y-m-d H:i:s'))->orderBy('title','asc')->get();
//        foreach ($posts as $post){
//            echo "<h1>{$post->title}</h1>";
//            echo "<h2>{$post->subtitle}</h2>";
//            echo "<p>{$post->description}</p>";
//            echo "<hr></hr>";
//        }

//        $posts = Post::where('created_at','>=',date('Y-m-d H:i:s'))->first();
//        echo "<h1>{$posts->title}</h1>";
//        echo "<h2>{$posts->subtitle}</h2>";
//        echo "<p>{$posts->description}</p>";
//        echo "<hr></hr>";

//        $posts = Post::find(1);
//        echo "<h1>{$posts->title}</h1>";
//        echo "<h2>{$posts->subtitle}</h2>";
//        echo "<p>{$posts->description}</p>";
//        echo "<hr></hr>";

        $posts = Post::all();
        return view('posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $postRequest = [
//            'title'=>$request->title,
//            'subtitle'=>$request->subtitle,
//            'description'=>$request->description,
//        ];
//        var_dump($postRequest);

//        $post = new Post();
//        $post->title = $request->title;
//        $post->subtitle = $request->subtitle;
//        $post->description = $request->description;
//        $post->save();

        Post::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description
        ]);

        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        $post->update();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }


}
