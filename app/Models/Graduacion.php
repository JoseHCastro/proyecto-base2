<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduacion extends Model
{
    use HasFactory;

    protected $table = 'Graduacion';
    protected $primaryKey = 'Graduacion_ID';
    public $timestamps = false;

    protected $fillable = [
        'Egresados',
        'Titulados',
        'Carrera_ID',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'Carrera_ID');
    }
}
