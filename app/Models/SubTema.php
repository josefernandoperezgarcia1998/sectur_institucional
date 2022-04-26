<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'subcategory_id',
    ];

    /* Many subtemas belongs to a one subcategory */
    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory');
    }
}
