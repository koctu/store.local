<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'name' => $this->faker->unique(false, 120)->randomElement(['Мягкие игрушки', 'Интерактивные игрушки', 'Игрушки по размеру', 'Персонажи мультфильмов', 'Мягкие аксессуары']),
                'slug' => $this->faker->slug
            ];

    }
}
