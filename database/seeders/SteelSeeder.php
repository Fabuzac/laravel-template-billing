<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Steel;
use Illuminate\Database\Seeder;

class SteelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 10 ; $i++) { 
            Steel::create([
                'name' => $faker->word(),
                'quantity' => $faker->randomFloat($nbMaxDecimals = 2, $min=10, $max = 100),
                'supplier' => $faker->word(),       
                'category' => 'steel',    
            ]);
        }
    }
}
