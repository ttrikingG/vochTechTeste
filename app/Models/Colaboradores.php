<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    protected $fillable = [
        'unidade_id',
        'nome',
        'cpf',
        'email',
    ];

    public function unidade()
    {
        return $this->belongsTo(Unidades::class);
    }

    public function cargoColaborador()
    {
        return $this->hasMany(CargoColaborador::class, 'colaborador_id');
    }

    public function cargo()
    {
        return $this->hasManyThrough(
            Cargos::class,
            CargoColaborador::class,
            'colaborador_id', // Foreign key on CargoColaborador table
            'id', // Foreign key on Cargos table
            'id', // Local key on Colaboradores table
            'cargo_id' // Local key on CargoColaborador table
        );
    }

    public function insert(array $data)
    {
        $this->unidade_id = $data['unidade_id'];
        $this->nome = $data['nome'];
        $this->cpf = $data['cpf'];
        $this->email = $data['email'];
        return $this->save();
    }
}

