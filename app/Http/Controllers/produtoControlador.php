<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtoControlador extends Controller
{
    public function listar(){
        $produtos = [
        'PC gamer',
        'Teclado',
        'Mouse',
        'Monitor',
        'Impressora',
        'TV',
        'Microondas',
        'Nootbok',
        'MAC',
        'Tablet'
        ];

        return view('produtos', compact('produtos'));
    }
}
