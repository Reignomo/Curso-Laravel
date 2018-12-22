<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bemvindo/{nome}', function ($nome){
   return "<h1>Bem vindo $nome</h1>";
});

Route::get('/bemvindo/indetifica/{nome?}/{n}', function($nome=null, $n){
    echo "<table>";
    if(isset($nome)){
        for($i = 0; $i < $n; $i++ ){
            echo "<tr>";
                echo "<th> $nome </th>";
                echo "<th> $i </th>";   
            echo "</tr>";
        }
    }
    else{
        echo "<h1>Você não passou o nome </h1>";
    }
    echo "</table>";
})->where('n','[0-9]+')->where('nome', '[A-Za-z]+');


Route::get('/bemvindo/identifica/semfiltro/{nome?}', function($nome=null){
    if(isset($nome)){
        echo "<h1>Bem vindo, $nome </h1>";
    }
    else{
        echo "Você não passou nenhum nome !";
    }
});

Route::view('/hello', 'hello');


// nomemando rotas 

Route::get('/rotanomeada', function(){
    echo 'rota nomeada';
})->name('routeOne');

Route::get('nome', 'meuControlador@getNome');

Route::get('nomeId/{id?}', 'meuControlador@getNomeById');

Route::get('idade', 'meuControlador@getIdade');

Route::resource('/cliente', 'ClienteControlador');

Route::get('primeiraview', function(){
    return view('minhaView');
});

Route::get('/produtos','produtoControlador@listar')->name('listarProdutos');

Route::get('/sessaoprodutos/{palavra?}','produtoControlador@sessaoProdutos')->name('sessaoProdutos');
