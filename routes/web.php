<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NoticiaController;
use App\Models\Contacto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/contacto/{tipo_persona?}', [ContactoController::class, 'formulario']);

Route::post('/contacto-recibe', [ContactoController::class, 'newContact']);

Route::get('lista', [ContactoController::class, 'lista']);

Route::resource('noticias', NoticiaController::class)->parameters(([
    'noticia' => 'noticia'
]));