<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log',function(){
   Log::info('teste');
});

Route::get('/session',function(){

    session([
        'course'=> 'LaraDev'
    ]);

    session()->put('name', 'Jefferson Clark');

//    echo session('name','Valor Padrao');

//    echo session()->get('name');

//    session()->push('time','Hannah Clark');

//    $time = session()->pull('time');
//
//    echo $time;

//    session()->forget('name');

//    session()->flush();

    if(session()->has('course')){
        echo "o curso selecionado foi : " . session()->get('course') . "<br>";
    }

    var_dump(\session()->all());
});
