<?php

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

/*
// esto es una ruta:: que ejecuta un request de tipo get hay(post put patch)
//la diagonal indica localhost
// lo que nnos retorna es una vista que se llama welcome.
Route::get('/', function () {
    return view('welcome');  // este nombre lo encontramos en la carpeta resources, views, welcomw.blade.php
    // no es necesario ponerle .blade (es un motor de plantillas).
});
*/

// esta ruta de categorias la quiero conectar a un controlador que se llama CategoriesController
Route::get('/categorias', 'CategoriesController@index');

//Route::get('/categorias', [CategoriesController::class, 'index']);