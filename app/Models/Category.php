<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'imagen',
        'title_subcategory',
        'links_subcategory',
    ];

    /* One category has many subcategories */
    public function subcategory()
    {
        return $this->hasMany('App\Models\SubCategory','id','category_id');
    }

}
