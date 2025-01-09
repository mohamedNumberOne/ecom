<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mesures = ['S', 'M', 'L', 'XL' ,'XXL','3XL', '4XL' , '35', '36', '37' , "38" , "39" , "40" , "41" , "42" , "43", "44", "45"   ];
 
 

        foreach ($mesures as $mesure) {
            Size::create(['nom_mesure' => $mesure]);
        }
    }
}
