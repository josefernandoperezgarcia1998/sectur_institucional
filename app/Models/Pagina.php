<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seccion;

class Pagina extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagen',
        'slug',
        'descripcion',
    ];

    /* Relación uno a muchos | Una página tiene muchas secciones */
    public function secciones()
    {
        return $this->hasMany(Seccion::class, 'id', 'pagina_id');
    }
}
