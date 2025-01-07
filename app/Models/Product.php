<?php

namespace App\Models;
 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category ;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;


    protected $fillable = [

        "nom_pro",
        "photo_principale",
        "prix",
        "type_mesure",
        "details",
        "category_id",
 
    ];

    public function category()  
    {
        return $this->belongsTo(Category::class);
    }

}
