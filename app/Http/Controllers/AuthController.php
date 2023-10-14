<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInserirRequest;
use Illuminate\Http\Request;
use App\Models\Ano;
use App\Models\Dia;
use App\Models\Mes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        $dias = Dia::all();
        $meses = Mes::all();
        $anos = Ano::all();
        return view('auth.registro', compact('dias','meses','anos')); 
    }

    public function encontrar_user(Request $request)
    {
        $user = User::where('email', '=', $request->email)
        ->where('users.usuario_ativo', '=', 1)
        ->first();

        if(!isset($user)){
            return ["email" => "Usuário não encontrado"];
        }

        if(Hash::check($request->password_usuario, $user->password)){
            return $user;
        }else{
            return ["password_usuario" => "Senha incorreta"];
        }
    }

    public function login(Request $request){

        $user = $this->encontrar_user($request);

        if(is_array($user)){
            throw ValidationException::withMessages($user);
        } else{
            Auth::login($user);
            return redirect()->route('app.fornecedor');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }

    // public function show_login(){

    //     if(Auth::authenticated()){
    //         return redirect()->route('app.clientes');
    //     }
    //     elseif(Auth::check()){
    //         return redirect()->route('app.clientes');
    //     }

    //     return view('app.clientes');
    // }

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

        $email = $request->get('email');
        $password = $request->get('password');

        echo "Usuario: $email | Senha: $password";

        return redirect()->route('login')->with('sucesso','Conta criada com sucesso!');
    }
}
