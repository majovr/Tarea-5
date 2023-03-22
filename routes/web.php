<?php

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

Route::get('/Empleado', function () {
    return view('Empleado.index');
});

Route::get('/Empleado/create', function () {
    return view('Empleado.create');
});

Route::get('/Empleado/edit', function () {
    return view('Empleado.edit');
});
