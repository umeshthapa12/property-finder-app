<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => User::factory(),
            'title' => $this->faker->realText(70),
            'apartment_type_id' => $this->faker->numberBetween(0, 6),
            'price' => $this->faker->randomFloat(2, 100000, 800000) ,
            'bedrooms' => $this->faker->numberBetween(0, 15),
            'bathrooms' => $this->faker->numberBetween(0, 5),   
            'area' => $this->faker->numberBetween(100, 1000),
            'level' => $this->faker->numberBetween(0, 31),
            'is_furnished' => $this->faker->boolean(),
            'payment_option_id' => $this->faker->numberBetween(0, 4),
            'for_sale' => $this->faker->boolean(),
            'description' => $this->faker->realText(4096),
            'city_id' => $this->faker->numberBetween(0, 251),
            'address' => $this->faker->address(),
        ];
    }
}
