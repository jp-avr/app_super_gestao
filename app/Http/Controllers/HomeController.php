<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $motivos = MotivoContato::all();
        return view('site.index', compact('motivos'));
    }

}
