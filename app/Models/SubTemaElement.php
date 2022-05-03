<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTemaElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'document',
        'image',
        'size_document',
        'type_document',
        'size_image',
        'type_image',
        'link',
        'subtema_id',
    ];

    public function subtema()
    {
        return $this->belongsTo('App\Models\SubTema');
    }
}
