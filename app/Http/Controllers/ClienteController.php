<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'Nome_Pessoa' => 'required|max:50',
            'Numero_Celular' => 'required|max:50',
        ]);

        // Criar um novo cliente
        Cliente::create($request->all());

        return redirect()->route('cliente.create')->with('success', 'Cliente cadastrado com sucesso');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }
}