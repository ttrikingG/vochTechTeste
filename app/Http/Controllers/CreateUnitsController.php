<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitRequest;
use App\Models\Unidades;

class CreateUnitsController extends Controller
{
    public function index()
    {
        return view('createUnits', [
            'title' => 'Unidades Cadastro'
        ]);
    }

    public function store(UnitRequest $request)
    {
        $validated = $request->validated();

        $saved = (new Unidades())->insert($validated);

        if($saved){
            $request->session()->flash('success', 'Unidade cadastrada com sucesso');
        }else{
            $request->session()->flash('error', 'Erro ao cadastrar');
        }
        
        return back();
    }
}