<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{

  public function run()
  {
    foreach (subcategories() as $key=>$subcategory) {
      foreach ($subcategory as $item) {
        DB::table('subcategories')->insert([
          'name' => $item,
          'category_id'=> $key+1,
        ]);
      }
    }
  }
}
