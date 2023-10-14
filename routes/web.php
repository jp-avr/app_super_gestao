<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sobre-nos', 'SobreNosController@index')->name('sobrenos');

Route::get('/registro', 'AuthController@index')->name('registro');
Route::post('/registro', 'AuthController@autenticar')->name('registro');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'AuthController@login')->name('post_login');


Route::prefix('/contatos')->group(function(){
    Route::get('index', 'ContatosController@index')->name('contatos.index');
    Route::get('store', 'ContatosController@store')->name('contatos.store');
    Route::post('store', 'ContatosController@store')->name('contatos.store');
});


// APLICANDO MIDDLEWARE
Route::group(['middleware' => ['auth']], function() {
    Route::prefix('/app')->group(function(){
        Route::get('/home', 'HomeController@index_logado')->name('app.home');
        Route::get('/sair', 'AuthController@logout')->name('app.sair');
        Route::get('/cliente', 'ClienteController@index')->name('app.cliente');
        Route::get('/fornecedor', 'FornecedoresController@index')->name('app.fornecedor');
        Route::get('/produto', 'ProdutoController@index')->name('app.produto');    
    });
});


Route::fallback(function(){
    echo "A página acessada não existe, <a href={{ route('home')}}> clique aqui </a> para voltar a página inicial.";
});
