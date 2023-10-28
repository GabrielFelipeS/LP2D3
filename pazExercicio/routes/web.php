<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

Route::get('/produtos', function () {
    $arr = ['Livro', 'Notebook', 'Computador', 'Mouse', ];
    return view('products', ["produtos" => $arr]);
});

Route::get('/products', [ProductController::class, 'produtos']);

Route::get('/products/{id}', [ProductController::class, 'produto']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::post('/contact/processsar-dados', [ContactController::class, "processar"]);

Route::get('/paz', function () {
    $nome = "Gabriel";
    $data = date('d/m/Y');
    $array = [ "paz no Oriente Médio", "A paz é a única forma de nos sentirmos realmente humanos", "Não existe uma caminho para a paz. A paz é o caminho"];

    $isUserLoggedln = true;
    
    $mensagemRandom = $array[array_rand($array)];

    return view('paz', 
    [
        "nome" => $nome,
        "data" => $data,
        "mensagem" => $mensagemRandom,
        "UserLogado" => $isUserLoggedln
    ]);
});

