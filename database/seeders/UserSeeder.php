<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat 10 user secara acak
        User::factory(5)->create();

        // Membuat user admin dengan email dan password tertentu
        User::factory()->create([
            'name' => 'Krisna22',
            'email' => 'admin@gamil.com',
            'password' => bcrypt('admin123'), // Password yang dikustomisasi
        ]);
    }
}
