<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
     DB::table('colors')->insert([
        [ 'nom_couleur' =>  "blanc" , 'code_couleur' => "#ffffff" ] , 
        [ 'nom_couleur' =>  "noir" , 'code_couleur' => "#000000" ] , 
        [ 'nom_couleur' =>  "gris" , 'code_couleur' => "#8f8f8f" ] , 
        [ 'nom_couleur' =>  "bleu" , 'code_couleur' => "#3442b2" ] , 
        [ 'nom_couleur' =>  "marron" , 'code_couleur' => "#c48517" ] 
    ]);
    }
}
	