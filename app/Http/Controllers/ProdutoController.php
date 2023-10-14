<?php

namespace App\Http\Controllers;


class ProdutoController extends Controller
{
    public function index()
    {   
        return view('app.produtos.index');
    }
}
