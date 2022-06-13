<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogSeeder extends Seeder
{
  public function run()
  {
    foreach (catalogs() as $catalog) {
      Catalog::create([
        'name' => $catalog,
      ]);
    }
  }
}
