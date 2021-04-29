<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoSaude extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_planoSaude'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_plano_saude');
    }
}
