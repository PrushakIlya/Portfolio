<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (category() as $code => $item_1) {
      foreach ($item_1 as $name => $item_2) {
        foreach ($item_2 as $img => $description) {
          DB::table('categories')->insert([
            'code' => $code,
            'name' => $name,
            'img' => $img,
            'description' => $description,
            'created_at'=>Carbon::now(),
          ]);
        }
      }
    }
  }
}
