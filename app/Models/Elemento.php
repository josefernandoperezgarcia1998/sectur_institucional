<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seccion;

class Elemento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagen',
        'documento',
        'descripcion',
        'size_document',
        'type_document',
        'size_image',
        'type_image',
        'enlace',
        'seccion_id',
    ];

    /* Relacion uno a muchos inversa | Varios elementos pertenecen a una sección */
    public function seccion()
    {
        return $this->belongsTo('App\Models\Seccion');
    }

    

}
