<?php

namespace Database\Seeders;

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
    $this->call(InstansiSeeder::class);
    $this->call(PangkatSeeder::class);
    $this->call(UnitKerjaSeeder::class);
    $this->call(JabatanFungsionalSeeder::class);
  }
}
