<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;

class RankingListController extends Controller
{
    public function index()
    {
        $users = Colaboradores::with(['unidade', 'cargo'])
            ->join('cargo_colaborador', 'colaboradores.id', '=', 'cargo_colaborador.colaborador_id')
            ->orderBy('cargo_colaborador.nota_desempenho', 'desc')
            ->select('colaboradores.*', 'cargo_colaborador.nota_desempenho')
            ->paginate(25);

        return view('rankingList', [
            'title' => 'Ranking de Notas',
            'users' => $users
        ]);
    }
}