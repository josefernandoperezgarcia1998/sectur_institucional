<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionInicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'slug',
    ];

    /* SeccionInicio has many DetallesSeccionInicio */
    public function detallesSeccionesInicio()
    {
        return $this->hasMany('App\Models\DetalleSeccionInicio','id','seccion_id');
    }
    
}
