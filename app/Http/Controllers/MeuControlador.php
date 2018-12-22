<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome(){
        return "Jose da Silva";
    }

    public function getIdade(){
        return "21 anos";
    }

    public function getNomeById($id){
        $v = ["Mario","Roberto","Caio"];
        if($id >= 0 && $id < count($v)){
            return $v[$id];
        }
        return "Usuario não encontrado";
        
    }
}
