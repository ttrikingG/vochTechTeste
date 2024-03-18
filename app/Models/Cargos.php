<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo',
    ];

    public function colaboradores()
    {
        return $this->hasMany(Colaboradores::class);
    }
}