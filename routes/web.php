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
    return view('welcome');
});

Route::resource('Diseño' , 'DisenoController');
Route::resource('Programador' , 'ProgramaController');
Route::resource('Project' , 'ProjectoController');
Route::resource('auxiliar' , 'AuxiController');