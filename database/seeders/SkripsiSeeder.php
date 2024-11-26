<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Add this line
use Faker\Factory as Faker;
use Carbon\Carbon; 

class SkripsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *      * @return void

     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('skripsis')->insert([
                'title' => $faker->sentence(5),
                'student_name' => $faker->name,
                'supervisor' => $faker->name,
                'submission_year' => $faker->year,
                'abstract' => $faker->paragraph(3),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
