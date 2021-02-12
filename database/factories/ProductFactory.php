<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
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
        $product_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($product_name);
        return [
            'title' => $product_name,
            'description' => $this->faker->text(500),
            'price' => $this->faker->numberBetween(10,500),
            'discount' => $this->faker->numberBetween(1,100),
            'slug' => $slug,
            'stock' => 'instock',
            'user_id' => $this->faker->numberBetween(1,10),
            'category_id' => $this->faker->numberBetween(1,4),

        ];
    }
}
