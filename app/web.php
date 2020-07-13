<?php

use Illuminate\Support\Facades\Route;

//Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});
// Ruta index
Route::get('/index', 'PlayerController@index')->name('index');
//Rutas para añadir jugador
Route::post('/insert', 'PlayerController@store')->name('store');
//Ruta para editar jugadores
Route::get('/edit/{id}', 'PlayerController@edit')->name('edit');
//Rutas para actualizar jugadores luego de la edicion
Route::put('/update/{id}', 'PlayerController@update')->name('update');
//Ruta para eliminar juegador
Route::delete('/destroy/{id}', 'PlayerController@destroy')->name('destroy');
//Ruta para la operacion de la apuestas
Route::get('/bet/{id}', 'PlayerController@bet')->name('bet');
//Ruta para informacion del juego
Route::get('/info', 'PlayerController@info')->name('info');