<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How to create real data in seeder

        $data = ['php', 'laravel', 'javaScript', 'mySQL', 'vue.js', 'nuxt.js', 'wordPress'];
        foreach ($data as $d) {
            Tag::create(
                [
                    'name' => $d
                ]
            );
        }
    }
}
