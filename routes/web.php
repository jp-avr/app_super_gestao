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




//APLICANDO MIDDLEWARE
Route::group(['middleware' => ['log_acesso']], function() {
    Route::prefix('/contatos')->group(function(){
        Route::get('index', 'ContatosController@index')->name('contatos.index');
        Route::get('store', 'ContatosController@store')->name('contatos.store');
        Route::post('store', 'ContatosController@store')->name('contatos.store');
    });
});


Route::get('/login', function(){
    return 'Login';
})->name('login');

// Route::prefix('/app')->group(function(){
//     Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
//     Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
//     Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');    
// });

Route::fallback(function(){
    echo "A página acessada não existe, <a href={{ route('home')}}> clique aqui </a> para voltar a página inicial.";
});
