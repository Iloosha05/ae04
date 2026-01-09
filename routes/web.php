<?php
 
use Illuminate\Support\Facades\Route;
Route::get('/saludoescrito', function () {
    return view('Esto es un saludo escrito directamente en la ruta');
});
Route::get('/saludoescritohtml', function () {
   return "<h1>Esto es un saludo </h1>
   <p>escrito directamenre en la ruta</p>";
});
   Route::get('/saludopersonalizado01/{nombre}', function ($nombre) {
    return "<h1>Esto es un saludo para $nombre</h1>";
   
});
   
Route::get('/', function () {
    return view('welcome');
});
 
