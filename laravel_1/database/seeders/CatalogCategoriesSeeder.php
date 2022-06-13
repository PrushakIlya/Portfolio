<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (catalogs() as $key => $catalog) {
        foreach (categories() as $key_c => $category) {
          DB::table('catalog_categories')->insert([
            'catalog_id' => $key+1,
            'category_id' => $key_c+1,
          ]);
        }
      }
    }
}
