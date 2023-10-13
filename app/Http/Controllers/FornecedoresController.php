<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {   
        $motivos = MotivoContato::all();
        return view('app.fornecedores.index', compact('motivos'));
    }
}
