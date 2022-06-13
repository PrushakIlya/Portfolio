<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Database\Factories\CommentFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();
    $this->call([
      CatalogSeeder::class,
      CategorySeeder::class,
      SubcategorySeeder::class,
      UserSeeder::class,
      CatalogCategoriesSeeder::class
    ]);
    User::factory(10)->create();
    Product::factory(20)->create();
    Comment::factory(20)->create();
  }
}
