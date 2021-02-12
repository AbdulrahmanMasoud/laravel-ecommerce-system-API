<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' =>  $this->faker->name,
            'client_phone' => $this->faker->e164PhoneNumber,
            'client_email' => $this->faker->unique()->safeEmail,
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->address,
            'city' => $this->faker->city,
            'postcode' => $this->faker->postcode,
        ];
    }
}
