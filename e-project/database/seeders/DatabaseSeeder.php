<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Database\Factories\StudentFactory;
use Database\Factories\UserFactory;
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
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     UserSeeder::class
        // ]);
        Student::factory(10)->create();

    }
}
