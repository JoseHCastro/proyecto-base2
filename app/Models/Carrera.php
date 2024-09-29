<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'Carrera';
    protected $primaryKey = 'Carrera_ID';
    public $timestamps = false;

    protected $fillable = [
        'Sigla',
        'Nombre_Carrera',
        'Modalidad',
        'Localidad',
        'Facultad_ID',
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'Facultad_ID');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'Carrera_ID');
    }

    public function estadisticas()
    {
        return $this->hasMany(Estadisticas::class, 'Carrera_ID');
    }

    public function rendimientos()
    {
        return $this->hasMany(Rendimiento::class, 'Carrera_ID');
    }

    public function graduaciones()
    {
        return $this->hasMany(Graduacion::class, 'Carrera_ID');
    }
}
