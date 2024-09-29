<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    use HasFactory;

    protected $table = 'Estadisticas';
    protected $primaryKey = 'Estadisticas_ID';
    public $timestamps = false;

    protected $fillable = [
        'Sin_Nota',
        'Porcentaje_Sin_Nota',
        'Aprobados',
        'Porcentaje_Aprobados',
        'Reprobados',
        'Porcentaje_Reprobados',
        'Retirados',
        'Carrera_ID',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'Carrera_ID');
    }
}
