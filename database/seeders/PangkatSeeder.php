<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pangkat')->insert([
            [
                "kode_pangkat" => "1a",
                "nama_pangkat" => "Juru Muda"
            ],
            [
                "kode_pangkat" => "1b",
                "nama_pangkat" => "Juru Muda Tingkat 1"
            ],
            [
                "kode_pangkat" => "1c",
                "nama_pangkat" => "Juru"
            ],
            [
                "kode_pangkat" => "1d",
                "nama_pangkat" => "Juru Tingkat 1"
            ],
            [
                "kode_pangkat" => "2a",
                "nama_pangkat" => "Pengatur Muda"
            ],
            [
                "kode_pangkat" => "2b",
                "nama_pangkat" => "Pengatur Muda Tingkat 1"
            ],
            [
                "kode_pangkat" => "2c",
                "nama_pangkat" => "Pengatur"
            ],
            [
                "kode_pangkat" => "2d",
                "nama_pangkat" => "Pengatur Tingkat 1"
            ],
            [
                "kode_pangkat" => "3a",
                "nama_pangkat" => "Penata Muda"
            ],
            [
                "kode_pangkat" => "3b",
                "nama_pangkat" => "Penata Muda Tingkat 1"
            ],
            [
                "kode_pangkat" => "3c",
                "nama_pangkat" => "Penata"
            ],
            [
                "kode_pangkat" => "3d",
                "nama_pangkat" => "Penata Tingkat 1"
            ],
            [
                "kode_pangkat" => "4a",
                "nama_pangkat" => "Pembina"
            ],
            [
                "kode_pangkat" => "4b",
                "nama_pangkat" => "Pembina Tingkat 1"
            ],
            [
                "kode_pangkat" => "4c",
                "nama_pangkat" => "Pembina Utama Muda"
            ],
            [
                "kode_pangkat" => "4d",
                "nama_pangkat" => "Pembina Utama Madya"
            ],
            [
                "kode_pangkat" => "4e",
                "nama_pangkat" => "Pembina Utama"
            ],
        ]);
    }
}
