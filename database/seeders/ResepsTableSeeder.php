<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resep;

class ResepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resep::create([
            'name' => 'Chicken Salad',
            'calories' => 209,
            'ingredients' => 11,
            'servings' => 6,
            'prep_time' => '25 mins',
            'meal' => 'Breakfast',
            'health' => 'Vegan',
            'detail_resep' => 'This is a healthy vegan chicken salad perfect for breakfast.',
            'like' => 0,
        ]);
    }
}
