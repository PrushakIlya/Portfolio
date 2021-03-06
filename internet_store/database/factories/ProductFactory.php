<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->text(15),
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(100,2000),
            'category_id' => $this->faker->numberBetween(1,3),
            'created_at' => Carbon::now(),
        ];
    }
}
