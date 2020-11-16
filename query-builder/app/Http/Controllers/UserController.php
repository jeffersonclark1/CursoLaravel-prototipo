<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
//        $users = DB::table('users')
//            ->select()
//            ->where()
//            ->orderBy()
//            ->limit()
//            ->offset()
//            ->get();
//
//        foreach ($users as $user) {
//            echo "#{$user->id} Nome : {$user->name}<br>";
//        }

//        $users = DB::table('users')
//            ->selectRaw('users.id, users.name, CASE WHEN users.status = 1 THEN "ATIVO" ELSE "INATIVO" END status ')
//            ->whereRaw('(SELECT COUNT(1) from addresses a where a.user = users.id) > 2')
//            ->whereRaw('users.status = 1')
//            ->get();
//
//        foreach ($users as $user) {
//            echo "#{$user->id} Nome : {$user->name} Status : {$user->status} <br>";
//        }

//        DB::table('users')->where('id','<','500')->chunkById(10, function ($users){
//            foreach ($users as $user) {
//                echo "#{$user->id} Nome : {$user->name} Status : {$user->status} <br>";
//            }
//            echo "Encerrou um ciclo<br>";
//            sleep(1);
//        });

        $users = DB::table('users')
//            ->whereIn('users.status',[0,1])
            ->whereNotIn('users.status',[0,1])
            ->whereNotNull('users.name')
            ->get();

        foreach ($users as $user) {
            echo "#{$user->id} Nome : {$user->name} Status : {$user->status} <br>";
        }

    }
}
