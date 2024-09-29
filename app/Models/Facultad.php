<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'Facultad';

    // Clave primaria personalizada
    protected $primaryKey = 'Facultad_ID';

    // Desactivar las marcas de tiempo (si la tabla no tiene created_at y updated_at)
    public $timestamps = false;

    // Campos rellenables
    protected $fillable = [
        'Nombre',
    ];
}
