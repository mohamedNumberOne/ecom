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
 
    ];

    public function categories()  
    {
        return $this->belongsTo(Category::class);
    }

}
