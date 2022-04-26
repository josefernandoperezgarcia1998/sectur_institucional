<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'imagen',
        'category_id',
    ];

    /* Many Subcategories belongs to a one category */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /* One subcategory has many subtemas */
    public function subtema()
    {
        return $this->hasMany('App\Models\SubTema','id','subcategory_id');
    }
}
