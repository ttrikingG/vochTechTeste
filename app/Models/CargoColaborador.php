<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CargoColaborador extends Model
{
    protected $table = 'cargo_colaborador';

    protected $fillable = [
        'cargo_id',
        'colaborador_id',
        'nota_desempenho',
    ];

    public function cargo()
    {
        return $this->belongsTo(Cargos::class);
    }

    public function colaborador()
    {
        return $this->belongsTo(Colaboradores::class, 'colaborador_id');
    }
}
