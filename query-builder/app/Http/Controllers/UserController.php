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

//        $users = DB::table('users')
//            ->whereIn('users.status',[0,1])
//            ->whereNotIn('users.status',[0,1])
//            ->whereNotNull('users.name')
//            ->get();
//
//        foreach ($users as $user) {
//            echo "#{$user->id} Nome : {$user->name} Status : {$user->status} <br>";
//        }

//        $users = DB::table('users')
//            ->select('users.id','users.name','users.status','addresses.address')
////            ->leftjoin('addresses','users.id','=','addresses.user')
//            ->join('addresses',function ($join){
//                    $join->on('users.id','=','addresses.user')
//                        ->where('addresses.status','=',1);
//            })
//            ->orderBy('users.id','asc')
//            ->get();
//
//        echo "Total de registros {$users->count()}<br>";
//
//        foreach ($users as $user) {
//            echo "#{$user->id} Nome : {$user->name} Status : {$user->status} {$user->address} <br>";
//        }

//        DB::table('users')->insert([
//           'name'=> 'JC',
//           'email'=> 'jc@gmail.com',
//           'password' => bcrypt('123456'),
//            'status' => 1
//        ]);

//        DB::table('users')->where('id','=','1001')->update([
//            'name'=>'Jefferson Clark'
//        ]);

//        DB::table('users')->where('id','=','1001')->delete();

        $users = DB::table('users')->paginate(20);
        foreach ($users as $user) {
            echo "#{$user->id} Nome : {$user->name} Status : {$user->status} <br>";
        }

        echo $users->links();

    }
}
