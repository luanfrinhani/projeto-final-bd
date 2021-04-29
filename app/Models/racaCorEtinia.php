<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class racaCorEtinia extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao_racaCorEtinia'
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class,'id_raca_cor_etinia','id_raca_cor_etinia');
    }
}
