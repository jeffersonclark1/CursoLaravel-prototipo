<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return "<h1>Listagem do usario com o codigo 1</h1>";
    }

    public function getData()
    {
        return "<h1>Disparou a acao de GET</h1>";
    }

    public function postData(Request $request)
    {
        return "<h1>Disparou a acao de POST</h1><br></br>";
    }

    public function testPut(Request $request)
    {

        echo "Usuario da edicao é o codigo 1";

        return "<h1>Disparou a acao de PUT</h1>";
    }
}
