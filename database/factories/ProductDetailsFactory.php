<?php

namespace Database\Factories;

use App\Models\ProductDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' =>  $this->faker->numberBetween(1,50),
            'color' => $this->faker->hexcolor,
            'size' => $this->faker->numberBetween(10,70),
            'quantity' => $this->faker->numberBetween(1,10),
        ];
    }
}
