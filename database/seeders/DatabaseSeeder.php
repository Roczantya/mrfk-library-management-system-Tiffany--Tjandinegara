<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin01',
            'username' => 'admin_02',
            'password' => bcrypt('password123'),
            'petugas' => 'Admin',
            'last_update' => now(),
        ]);
        User::factory()->create([
            'name' => 'Lily',
            'username' => 'Librarian_02',
            'password' => bcrypt('password123'),
            'petugas' => 'Librarian',
            'last_update' => now(),
        ]);

        $this->call([
            Bookseeder::class,
            JournalSeeder::class,
            CDSeeder::class,
            NewspaperSeeder::class,
            SkripsiSeeder::class,
        ]);
    }
}
