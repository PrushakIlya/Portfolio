<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
  public function run()
  {
    foreach (catalogs() as $catalog) {
      DB::table('catalogs')->insert([
        'name' => $catalog,
      ]);
    }
  }
}
