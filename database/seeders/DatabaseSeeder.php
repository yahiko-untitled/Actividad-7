<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoboticsKitSeeder::class,
        ]);

        \App\Models\Course::factory(100)->create();
    }
}

