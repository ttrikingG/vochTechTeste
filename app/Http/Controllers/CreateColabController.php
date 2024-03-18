<?php

namespace App\Http\Controllers;

use App\Models\Unidades;
use App\Http\Requests\ColabRequest;
use App\Models\CargoColaborador;
use App\Models\Cargos;
use App\Models\Colaboradores;

class CreateColabController extends Controller
{
    public function index()
    {
        $units = Unidades::all();
        $cargos = Cargos::all();

        return view('createColab',[
            'title' => 'Colaboradores Cadastro',
            'units' => $units,
            'cargos' => $cargos
        ]);
    }

    public function store(ColabRequest $request)
    {
        $validated = $request->validated();
        $validated['unidade_id'] = $request->input('unidade_id');

        $saved = (new Colaboradores())->insert($validated);

        if($saved){
            $colaboradorId = Colaboradores::latest('id')->first()->id;
            $cargo = new CargoColaborador();
            $cargo->cargo_id = $validated['cargo_id'];
            $cargo->colaborador_id = $colaboradorId;
            $cargo->save();
        }

        if($saved){
            $request->session()->flash('success', 'Colaborador cadastrado com sucesso');
        }else{
            $request->session()->flash('error', 'Erro ao cadastrar');
        }
        
        return back();
    }
}