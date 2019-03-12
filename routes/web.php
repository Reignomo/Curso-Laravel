<?php
use App\Categoria;
use Illuminate\Support\Facades\DB;
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

Route::get('/categorias', function(){
    $registros = DB::table('categorias')->get();
    echo '<table>';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>Nome</th>';  
    foreach($registros as $item){
        echo '<tr>';
        echo '<td>'.$item->id.'</td>';
        echo '<td>'.$item->nome.'</td>'; 
        echo '</tr>';
    }
    echo '</table>';
});

Route::get('/adcionar-produtos', function(){
    
    try {
           $id[] =  DB::table('produtos')->insertGetId(
                ['nome' => 'Bife', 'preço' => 15.00 , 'estoque' => 5, 'categoria_id' => 1]
            );
            $id[] =  DB::table('produtos')->insertGetId(
                ['nome' => 'Fafinha', 'preço' => 15.00 , 'estoque' => 5, 'categoria_id' => 1]
            );
            $id[] =  DB::table('produtos')->insertGetId(
                ['nome' => 'Fafinha2', 'preço' => 15.00 , 'estoque' => 5, 'categoria_id' => 1]
            );
            echo 'Produtos adicionados com sucesso';
            for($i = 0; $i < count($id); $i++){
                echo $id[$i].'<br>';
            }
        }
        catch(Exception $e){
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
});

Route::get('/lista-produtos', function(){
    try{
        $produtos = DB::table('produtos')->get();
        foreach($produtos as $produto){
            echo 'Nome: '.$produto->Nome.' - Preço: '.$produto->preço.'<br>';
        }
    }
    catch(Exception $e){
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
});
//
Route::get('/update-produto/{id}/{nome}', function($id, $nome){
    try{
        $produto = DB::table('produtos')->where('id',$id)->first();
        echo 'Nome antigo do produto :'.$produto->Nome.'<br>';
        DB::table('produtos')->where('id',$id)->update(['Nome' => $nome]);
        $produtoNovo = DB::table('produtos')->where('id',$id)->first();
        echo 'Novo nome do produto: '.$produtoNovo->Nome;

    }
    catch(Exception $e){
        echo 'Exceção capturada: '.$e->getMessage(),"\n";
    }
});
Route::get('delete-produtos/{id}', function($id){
    try{
        $produtos = DB::table('produtos')->get();
        foreach($produtos as $produto){
            echo 'Nome: '.$produto->Nome.' - Preço: '.$produto->preço.'<br>';
        }
        echo '<hr>';
        DB::table('produtos')->delete();
        echo 'Produto apagado com sucesso';
        $produtos = DB::table('produtos')->get();
        foreach($produtos as $produto){
            echo 'Nome: '.$produto->Nome.' - Preço: '.$produto->preço.'<br>';
        }
    } 
    catch(Exception $e){
        echo 'Exceção capturada: '.$e->getMessage(),"\n";
    }
});
/// utilizando model
Route::get('/inserir-categoria-model/{nome}', function($nome){
   try{
        $cat = new Categoria();
        $cat->nome = $nome;
        $cat->save();
        echo 'Categoria adicionada com sucesso';
     }
        catch(Exception $e){
            echo 'Exceção capturada: '.$e->getMessage(),"\n";
        }
});

Route::get('lista-categorias', function(){
    $categorias = Categoria::all();
    foreach($categorias as $cat){
        echo $cat->nome.'<br>';
    }
});
Route::get('atualiza-categoria/{id}/{nome}', function($id, $nome){
    $cat = Categoria::findOrFail($id);
    $cat->nome = $nome;
    $cat->save();
    return redirect('/lista-categorias');
    if(isset($cat)){
        echo 'Nome antigo:'.$cat->nome.'<br>';
        
    }
    else{
        echo 'Categoria não encontrada';
    }
});
Route::get('remover-categoria/{id}', function($id){
    $cat = Categoria::findOrFail($id);
    if(isset($cat)){
        $cat->delete(); // ou forceDelete() para excluir permanentemente 
        return redirect('/lista-categorias');
    }
    echo 'Categoria inexistente';
});

Route::get('restauraCategoria/{id}', function($id){

    $cat = Categoria::withTrashed()->find($id);
    if(isset($cat)){
        $cat->restore();
        echo 'Categoria restaurada com sucesso - '.$cat->nome;
    }
});

 
