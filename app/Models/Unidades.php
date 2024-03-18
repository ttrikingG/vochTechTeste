<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_fantasia',
        'razao_social',
        'cnpj',
    ];

    public function colaboradores()
    {
        return $this->hasMany(Colaboradores::class, 'unidade_id');
    }

    public function insert(array $data)
    {
        $this->nome_fantasia = $data['nome_fantasia'];
        $this->razao_social = $data['razao_social'];
        $this->cnpj = $data['cnpj'];
        return $this->save();
    }
}
