<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
  public function definition(): array
  {
    return [
      'catalog_id' => $this->faker->numberBetween(1, count(catalogs())),
      'category_id' => $this->faker->numberBetween(1, count(categories())),
      'subcategory_id' => $this->faker->numberBetween(1, count_subcategories()),
      'name' => 'knife'.$this->faker->unique()->text(5),
      'vendor_code' => $this->faker->uuid,
      'product_mark' => $this->faker->country,
      'series' => $this->faker->text(10),
      'bonus' => $this->faker->numberBetween(10, 100),
      'price' => $this->faker->numberBetween(50, 1000),
      'is_stock' => $this->faker->numberBetween(0, 1),
      'description' => $this->faker->text,
      'characteristic' => $this->faker->text(100),
      'delivery' => $this->faker->text(100),
      'icon' => 'icon.png',
      'count' => $this->faker->numberBetween(1,10),
      'factory' => array_rand(get_factory()),
      'steel' => array_rand(get_steel()),
      'handle' => array_rand(get_handle()),
    ];
  }
}
