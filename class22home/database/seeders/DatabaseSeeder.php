<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::factory(20)->create();
        User::factory(10)->create();
        $this->call([
            ProfileSeeder::class,
            TagSeeder::class
        ]);
    }
}
