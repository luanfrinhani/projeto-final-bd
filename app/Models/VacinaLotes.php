<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacinaLotes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_vacina', 'lote_vacina', 'data_compra', 'data_fabricancacao', 'data_validade'
    ];

    public function vacinas()
    {
        return $this->belongsTo(Vacina::class,'id_vacina');
    }

}
