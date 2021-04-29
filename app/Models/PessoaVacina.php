<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaVacina extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_sus', 'lote_vacina', 'data_dose', 'dose'
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class,'numero_sus');
    }

    public function vacina_lotes()
    {
        return $this->belongsTo(VacinaLotes::class,'lote_vacina');

    }
}
