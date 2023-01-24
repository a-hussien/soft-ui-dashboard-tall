<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Ahmed Hussein',
            'email' => 'test@test.com',
            'password' => bcrypt('12345678'),
            'about' => "Test Account",
        ]);
    }
}
