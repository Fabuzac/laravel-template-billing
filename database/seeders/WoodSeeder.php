<?php

namespace Database\Seeders;

use App\Models\Wood;
use Faker\Factory;
use Illuminate\Database\Seeder;

class WoodSeeder extends Seeder
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
            Wood::create([
                'name' => $faker->word(),
                'quantity' => $faker->randomFloat($nbMaxDecimals = 2, $min=10, $max = 100),
                'supplier' => $faker->word(),    
                'category' => 'wood',
            ]);
        }
    }
}
