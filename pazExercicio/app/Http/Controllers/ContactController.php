<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact() {
        //$formulario = old('dadosFormulario');
        $formulario = Session::get('dadosFormulario');

        if($formulario) {
            Session::forget('dadosFormulario');
            return view('contact', [
                'formulario' => false,
                'nome' => $formulario['nome'],
                'mensagem' => $formulario['mensagem']
            ]);   
        }

        return view('contact', ['formulario' => true]);
    }

    public function processar(Request $request) {

        $dados = ['nome' => $request->input('nome'), 'mensagem' => $request->input('mensagem')];

        Session::put('dadosFormulario', $dados);

        return redirect('/contact');
    }
}
