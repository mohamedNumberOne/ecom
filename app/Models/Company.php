<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = [


        "nom_entreprise",
        "email",
        "tlf",
        "text_about_us",
        "phone_number",
        "img",
        "lien_fb",
        "lien_insta",
        "localisation",
        "logo",

    ];
}
