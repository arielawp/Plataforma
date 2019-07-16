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
    return view('home');
});

Route::resource('Diseño' , 'DisenoController');
Route::resource('disenos' , 'DisenoController');

Route::resource('Programador' , 'ProgramaController');
Route::resource('auxiliar' , 'AuxiController');
Route::resource('prueba' , 'TextController');
Route::resource('usuario', 'UsuarioController');
Auth::routes();
Route::resource('/','VistaController');
Route::resource('menu' , 'MenuController');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('books', 'BookController');

Route::resource('Project', 'ProgramaController', ['only' => [
    'index', 'show'
]]);

Route::resource('Project', 'ProgramaController', ['except' => [
    'create', 'store', 'update', 'destroy'
]]);

Route::resource('waters' , 'WaterController');
