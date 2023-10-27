<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeBistrol2Controller;

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


Route::get('/ola', function () {
    echo 'Olá. mundo';
});

Route::get('/cafes', [CafeBistrol2Controller::class, 'index']);
//Route::get('/cafes', [CafeBistroController::class, 'listarCafes']);

Route::get('/cafes/criar', [CafeBistrol2Controller::class, 'create']);