<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'Inscripcion';
    protected $primaryKey = 'Inscripcion_ID';
    public $timestamps = false;

    protected $fillable = [
        'Total_Inscritos',
        'Nuevos_Inscritos',
        'Antiguos_Inscritos',
        'Matriculados_Inscritos',
        'Carrera_ID',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'Carrera_ID');
    }
}
