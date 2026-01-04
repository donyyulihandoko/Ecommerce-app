<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Electronics', 'Fashion', 'Home & Living', 'Health', 'Beauty', 'Sports', 'Food'];
        $name = $this->faker->randomElement($categories);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => 'categories/' . $this->faker->word() . '.jpg',
        ];
    }
}
