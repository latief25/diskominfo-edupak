<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
    factory(User::class, 100)->make();
  }
}
