<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    use HasFactory;

    protected $table = 'Rendimiento';
    protected $primaryKey = 'Rendimiento_ID';
    public $timestamps = false;

    protected $fillable = [
        'PPA',
        'PPS',
        'PPA1',
        'PPAC',
        'Carrera_ID',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'Carrera_ID');
    }
}
