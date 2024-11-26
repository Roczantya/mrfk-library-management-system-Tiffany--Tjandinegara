<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Add this line
use Faker\Factory as Faker;
use Carbon\Carbon; 

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *      * @return void

     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            $publishDate = $faker->dateTime();
            DB::table('newspapers')->insert([
                'name' => $faker->company,
                'publication_date' => $faker->date,
                'publisher' => $faker->randomElement(['Kompas', 'Tribun Timur', 'Fajar']),
                'created_at' => $publishDate,
                'updated_at' => $publishDate,
            ]);
        }
    }
}
