<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController; // Adicione o ponto e vírgula

Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('clientes', [ClienteController::class, 'index'])->name('cliente.index');
Route::post('/formularios', [FormularioController::class, 'store'])->name('formularios.store');

Route::get('/', function () {
    return view('index');
});
