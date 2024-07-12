<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/herramienta', function () {
    return view('shopherramientas');
});

Route::get('/herramienta/detailcodigo1', function () {
    return view('DetallesHerramientas.detailcodigo1');
});

Route::get('/herramienta/detailcodigo2', function () {
    return view('DetallesHerramientas.detailcodigo2');
});

Route::get('/herramienta/detailcodigo3', function () {
    return view('DetallesHerramientas.detailcodigo3');
});

Route::get('/herramienta/detailcodigo4', function () {
    return view('DetallesHerramientas.detailcodigo4');
});

Route::get('/herramienta/detailcodigo5', function () {
    return view('DetallesHerramientas.detailcodigo5');
});

Route::get('/herramienta/detailcodigo6', function () {
    return view('DetallesHerramientas.detailcodigo6');
});

Route::get('/herramienta/detailcodigo7', function () {
    return view('DetallesHerramientas.detailcodigo7');
});

Route::get('/herramienta/detailcodigo8', function () {
    return view('DetallesHerramientas.detailcodigo8');
});

