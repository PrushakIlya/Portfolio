<?php

namespace Database\Factories;

use App\Models\Cars;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'carsroom_id'=>$this->faker->numberBetween(1,5),
        ];
    }
}
