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
        [ 'nom_couleur' =>  "blanc" , 'code_couleur' => "rgb(255,255,255)" ] , 
        [ 'nom_couleur' =>  "noir" , 'code_couleur' => "rgb(0,0,0)" ] , 
        [ 'nom_couleur' =>  "gris" , 'code_couleur' => "rgb(109, 109, 109)" ] , 
        [ 'nom_couleur' =>  "bleu" , 'code_couleur' => "rgb(3, 41, 163)" ] , 
        [ 'nom_couleur' =>  "marron" , 'code_couleur' => "rgb(128, 84, 4)" ] 
    ]);
    }
}
	