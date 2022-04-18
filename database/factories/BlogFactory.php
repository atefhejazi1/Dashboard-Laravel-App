<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'blogPhoto' => $this->faker->image('public/images/blogs', 640, 480, null, false),
            'id_dept' => $this->faker->randomElement(Department::pluck('id')),
        ];
    }
}
