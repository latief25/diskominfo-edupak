<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanFungsionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan_fungsional')->insert(
            [
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 1"
                ],
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 2"
                ],
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 3"
                ],
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 4"
                ],
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 5"
                ],
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 6"
                ],
                [
                    "nama_jabatan_fungsional" => "jabatan fungsional 7"
                ],
            ]
        );
    }
}
