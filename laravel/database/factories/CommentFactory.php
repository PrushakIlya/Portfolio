<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'text' => $this->faker->text,
      'product_id' => $this->faker->numberBetween(1,20),
      'user_id' => $this->faker->numberBetween(1,10),
    ];
  }
}
