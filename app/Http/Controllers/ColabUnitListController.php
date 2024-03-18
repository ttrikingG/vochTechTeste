<?php

namespace App\Http\Controllers;

use App\Models\Unidades;

class ColabUnitListController extends Controller
{
    public function index(){

        $units = Unidades::withCount('colaboradores')->paginate(25);
        
        return view('colabUnitList', [
            'title' => 'Colaboradores por Unidade',
            'units' => $units
        ]);
    }
}