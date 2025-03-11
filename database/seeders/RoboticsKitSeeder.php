<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run()
    {
        RoboticsKit::insert([
            ['name' => 'StarterKit', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Educational Robotics Kit', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kit5', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
