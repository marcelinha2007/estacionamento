<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario; // Importa o modelo correspondente ao banco de dados

class FormularioController extends Controller
{
    // Método para processar o formulário
    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'estacionamento' => 'required',
            'placa' => 'required',
            'data' => 'required|date',
            'hora' => 'required',
            'descricao' => 'required',
        ]);

        // Criação de um novo registro no banco de dados
        Formulario::create([
            'tipo' => $request->estacionamento,
            'placa' => $request->placa,
            'data' => $request->data,
            'hora_entrada' => $request->hora,
            'descricao' => $request->descricao,
        ]);

        // Redireciona de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Dados enviados com sucesso!');
    }
}
