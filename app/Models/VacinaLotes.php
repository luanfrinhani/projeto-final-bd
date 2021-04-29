<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacinaLotes extends Model
{
    use HasFactory;
    protected $fillable = [
        'lote_vacina', 'id_vacina', 'data_compra', 'data_fabricante', 'data_validade'
    ];

    public function vacinas()
    {
        return $this->belongsTo(Vacina::class,'id_vacina');
    }

}
