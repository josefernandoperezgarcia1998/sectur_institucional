<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pagina;

class Seccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'slug',
        'pagina_id',
    ];

    /* Relación uno a muchos inversa | Una sección pertenece a una página */
    public function pagina()
    {
        return $this->belongsTo(Pagina::class);
    }

    /* Relación uno a muchos | Una sección tiene muchos elementos */
    public function elementos()
    {
        return $this->hasMany('App\Models\Elemento', 'seccion_id','id');
    }
}
