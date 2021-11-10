<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerja')->insert([
            [
                "nama_unit_kerja" => "unit kerja 1"
            ],
            [
                "nama_unit_kerja" => "unit kerja 2"
            ],
            [
                "nama_unit_kerja" => "unit kerja 3"
            ],
            [
                "nama_unit_kerja" => "unit kerja 4"
            ],
            [
                "nama_unit_kerja" => "unit kerja 5"
            ],
            [
                "nama_unit_kerja" => "unit kerja 6"
            ],
            [
                "nama_unit_kerja" => "unit kerja 7"
            ]
        ]);
    }
}
