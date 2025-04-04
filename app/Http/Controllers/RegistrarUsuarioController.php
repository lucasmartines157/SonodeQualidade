<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrarUsuario;

class RegistrarUsuarioController extends Controller
{
    public function store(Request $request)
    {
        RegistrarUsuario::create($request->all());
        return back()->with('sucesso', 'Usuário registrado com sucesso!');
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'sometimes|string|max:255',
            'idade' => 'sometimes|integer|min:0',
            'historico_sono' => 'sometimes|string',
            'qualidade_sono' => 'sometimes|string',
        ]);
    
        RegistrarUsuarioController::where('id', $id)->update($request->all());
        
        return redirect('/consultar');
    }
    
    


    public function destroy(Request $request)
    {
        $usuario = RegistrarUsuario::find($request->id);
        if ($usuario) {
            $usuario->delete();
            return back()->with('sucesso', 'Usuário excluído com sucesso!');
        }
        return back()->with('erro', 'Usuário não encontrado.');
    }
}
