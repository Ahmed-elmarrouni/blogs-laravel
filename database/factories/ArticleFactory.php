<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US'); 

        return [
            'titre' => fake()->sentence(),
            'contenu' => fake()->paragraph(),
            'url_image' => fake()->imageUrl(768, 1152),
            'user_id' => User::factory(),

        ];
    }
}
