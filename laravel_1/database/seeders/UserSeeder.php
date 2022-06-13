<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'admin',
      'lastname' => 'admin',
      'is_admin' => 1,
      'email' => 'admin@gmail.com',
      'email_verified_at' => now(),
      'password' => 'admin', // password
      'remember_token' => Str::random(10),
    ]);
  }
}
