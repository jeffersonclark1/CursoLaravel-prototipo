<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $user = User::find($id);

        echo "<h1>Dados do usuario</h1><br>";
        echo "Nome do usuario {$user->name} <br>";
        echo "Nome do email {$user->email}<br>";

        $userAddress = $user->addressDelivery()->get()->first();

        if($userAddress){
            echo "<h1>Endereco de entrega</h1><br>";
            echo "Endereco : {$userAddress->address} , {$userAddress->number}<br>";
            echo "Complemento:  {$userAddress->complement} , {$userAddress->zipcode}<br>";
            echo "Cidade : {$userAddress->city} , {$userAddress->state} <br>";
        }

//        $addressTeste = new Address([
//            'address' => 'Rua California',
//            'number' => '1002',
//            'complement' => '123',
//            'zipcode' => '9999-33',
//            'city' => 'Caracas',
//            'state' => 'SP'
//        ]);

//        $address = new Address();
//        $address->address = 'Rua Kansas';
//        $address->number = '22';
//        $address->complement = 'Pq. Florida';
//        $address->zipcode = '00000-222';
//        $address->city = 'Bayeux';
//        $address->state = 'PB';
//
//        $user->addressDelivery()->save($address);
//        $user->addressDelivery()->saveMany([$addressTeste, $address]);

//        $users = User::with('addressDelivery')->get();
//        dd($users);

        $posts = $user->posts()->get();
        if($posts){
            foreach ($posts as $post){
                echo "<h1>Artigos</h1><br>";
                echo "Titulo : {$post->title} <br>";
                echo "Subtitle:  {$post->subtitle}<br>";
                echo "Description : {$post->description} <br><hr>";
            }

        }

//        $comments = $user->commentsOnMyPost()->get();
//        if($comments){
//            echo "<h1>Comentarios</h1><br>";
//            foreach ($comments as $comment){
//                echo "Post : {$comment->post}<br>";
//                echo "Conteudo : {$comment->content}<br>";
//                echo "Usuario:  {$comment->user}<br><hr>";
//            }
//        }

//        $user->comments()->create([
//            'content' => 'Teste de comentario 123999'
//        ]);

        $comments = $user->comments()->get();
        if($comments){
            echo "<h1>Comentarios</h1><br>";
            foreach ($comments as $comment){
                echo "Post : {$comment->id}<br>";
                echo "Conteudo : {$comment->content}<br>";
            }
        }

        $students = User::students()->get();

        if($students){
            echo "<h1>Alunos</h1><br>";
            foreach ($students as $student){
                echo "# {$student->id} Nome do usuario {$student->name} <br>";
                echo "Nome do email {$student->email}<br><hr>";
            }
        }

        $admins = User::admins()->get();

        if($admins){
            echo "<h1>Administradores</h1><br>";
            foreach ($admins as $admin){
                echo "# {$admin->id} Nome do usuario {$admin->name} <br>";
                echo "Nome do email {$admin->email}<br><hr>";
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
