<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Add this line
use Faker\Factory as Faker;
use Carbon\Carbon; 
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *      * @return void

     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 15; $i++) {
            $isEbook = $faker->boolean();
            DB::table('books')->insert([
                'Judul' => $faker->sentence,
                'penerbit' => $faker->company,
                'penulis' => $faker->name,
                'tahun_terbit' => $faker->year,
                'ISBN' => $faker->isbn13,
                'isEbook' => $isEbook,
                'ebookLink' => $isEbook ? $faker->url() : null,
                'isBorrowed' => !$isEbook ? $faker->boolean() : false,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
