<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Add this line
use Faker\Factory as Faker;
use Carbon\Carbon; 

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *      * @return void

     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('journals')->insert([
                'judul' => $faker->sentence,
                'penerbit' => $faker->company,
                'penulis' => $faker->name,
                'tahun_terbit' => $faker->year,
                'ISBN' => $faker->isbn13,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
