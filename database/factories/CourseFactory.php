<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoboticsKit;

class CourseFactory extends Factory
{
    public function definition()
    {
        return [
            'course_key' => 'ROB' . $this->faker->unique()->numerify('###'),
            'name' => $this->faker->sentence(3),
            'cover_image' => $this->faker->imageUrl(640, 480, 'education'),
            'content' => $this->faker->paragraph(5),
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

