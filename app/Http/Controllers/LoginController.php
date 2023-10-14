<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInserirRequest;
use App\Models\Ano;
use App\Models\Dia;
use App\Models\Mes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $dias = Dia::all();
        $meses = Mes::all();
        $anos = Ano::all();
        return view('auth.registro', compact('dias','meses','anos'));
    }

    public function autenticar(UserInserirRequest $request)
    {   

        User::create([
            'nome' => $request['nome'],
            'sobrenome' => $request['sobrenome'],
            'dia_id' => $request['dia_id'],
            'mes_id' => $request['mes_id'],
            'ano_id' => $request['ano_id'],
            'sexo' => $request['sexo'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('home');
    }
}
