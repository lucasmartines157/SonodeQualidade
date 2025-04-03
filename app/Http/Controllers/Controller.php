<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrarUsuario;

class RegistrarUsuarioController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer',
            'historico_sono' => 'nullable|string',
            'qualidade_sono' => 'nullable|string',
        ]);

        // Criando o usuário no banco de dados
        $usuario = RegistrarUsuario::create($validatedData);

        return response()->json([
            'message' => 'Usuário registrado com sucesso!',
            'usuario' => $usuario
        ]);
    }
}
