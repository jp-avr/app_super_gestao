<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function index()
    {
        $motivos = MotivoContato::all();
        return view('sobre.index', compact('motivos'));
    }
}
