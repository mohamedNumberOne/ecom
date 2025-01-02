<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product ;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [


        "nom_category",
        "petit_desc",
        "grande_desc",
        "photo_1",
        "photo_2",

    ];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
