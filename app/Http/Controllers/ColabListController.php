<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;

class ColabListController extends Controller
{
    public function index()
    {
        $users = Colaboradores::paginate(25);
       
        return view('colabList', [
            'title' => 'Colaboradores',
            'users' => $users
        ]);
    }
}