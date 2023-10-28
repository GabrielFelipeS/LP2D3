<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function produtos () {
        $arr = ['Livro', 'Notebook', 'Computador', 'Mouse', ];
        return view('products', ['produtos' => $arr]);
    }

    public function produto($id) {
        $arr = ['Livro', 'Notebook', 'Computador', 'Mouse', ];
        
        if($id > count($arr) - 1) {
            return view('produto', ['erro' => "Produto não encontrado"]);
        } 

        $produto = $arr[$id];

        return view('produto', ['produto' => $produto]);
    }
}
