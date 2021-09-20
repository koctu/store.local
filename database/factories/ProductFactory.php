<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'gender' => $this->faker->randomElement($array = array('Для девочек', 'Для мальчиков')),
            'new' => $this->faker->boolean,
            'sale' => $this->faker->boolean,
            'hit' => $this->faker->boolean,
            'age' => $this->faker->numberBetween(0, 6),
            'title' => $this->faker->numerify('Product ' . '###'),
            'price' => $this->faker->numberBetween(1000, 30000),
            'interactive' => $this->faker->boolean,
            'amount'  => $this->faker->randomDigit,
            'size' => $this->faker->randomElement($array = array('Маленькая', 'Средняя', 'Большая')),
            'barcode' => $this->faker->ean8
        ];
    }
}
