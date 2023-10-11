<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInserirRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ContatosController extends Controller
{
    public function index()
    {
        return view('contatos.index');
    }

    public function store(UserInserirRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'celular' => $request->celular,
            'motivo_contato' => $request->motivo_contato,
        ]);
        return redirect()->route('contatos.index');
    }
}
