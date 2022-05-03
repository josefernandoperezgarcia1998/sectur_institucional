<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleSeccionInicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagen',
        'descripcion',
        'activo',
        'enlace',
        'seccion_id',
    ];

        /* DetalleSeccionInicio belongs to a SeccionInicio */
        public function SeccionInicio()
        {
            return $this->belongsTo('App\Models\SeccionInicio');
        }
}
