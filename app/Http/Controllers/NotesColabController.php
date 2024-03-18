<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaboradores;

class NotesColabController
{
    public function index()
    {
        $users = Colaboradores::with(['unidade', 'cargo'])
        ->join('cargo_colaborador', 'colaboradores.id', '=', 'cargo_colaborador.colaborador_id')
        ->orderBy('cargo_colaborador.nota_desempenho', 'desc')
        ->select('colaboradores.*', 'cargo_colaborador.nota_desempenho')
        ->paginate(25);

        return view('notesColab', [
            'title' => 'Notas Colaboradores',
            'users' => $users
        ]);
    }

    public function edit(Colaboradores $user)
    {
        Colaboradores::with(['unidade', 'cargo'])
        ->join('cargo_colaborador', 'colaboradores.id', '=', 'cargo_colaborador.colaborador_id')
        ->select('colaboradores.*', 'cargo_colaborador.nota_desempenho');
        
        return view('notesColabEdit', [
            'title' => 'Editar Notas',
            'user' => $user
        ]);
    }

    public function update(Request $request, Colaboradores $user)
    {
        $validated = $request->validate([
            'nota_desempenho' => 'required|numeric'
        ]);

        $user->cargoColaborador()->update(['nota_desempenho' => $validated['nota_desempenho']]);

        if ($user->save()) {
            $request->session()->flash('success', 'Nota atualizada com sucesso!');
        } else {
            $request->session()->flash('error', 'Erro ao atualizar a nota');
        }
        
        return back();
    }
}