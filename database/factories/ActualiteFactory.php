<?php

namespace Database\Factories;

use App\Models\CategoryNew;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actualite>
 */
class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'slug' => \fake()->slug(),
            'title' => \fake()->title(),
            'author' => \fake()->lastname(),
            'content' => \fake()->realText(15),
            'status_id' => 1,
            'categoryNew_id' =>CategoryNew::factory(),
            'cover_image' => \fake()->imageUrl()
        ];
    }
}
