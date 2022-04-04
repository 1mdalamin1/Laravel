<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'Default',
            // 'email' => 'Default@gmail.com',
            // 'password' => bcrypt('12345'),
            'vote' => 123,
            'is_admin' => false,
            'city' => 'Saver, Dhaka-1340.',
        ]);
    }
}
