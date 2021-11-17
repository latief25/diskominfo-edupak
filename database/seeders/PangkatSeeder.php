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
        "kode_pangkat" => "I / a",
        "nama_pangkat" => "Juru Muda"
      ],
      [
        "kode_pangkat" => "I / b",
        "nama_pangkat" => "Juru Muda Tingkat 1"
      ],
      [
        "kode_pangkat" => "I / c",
        "nama_pangkat" => "Juru"
      ],
      [
        "kode_pangkat" => "I / d",
        "nama_pangkat" => "Juru Tingkat 1"
      ],
      [
        "kode_pangkat" => "II / a",
        "nama_pangkat" => "Pengatur Muda"
      ],
      [
        "kode_pangkat" => "II / b",
        "nama_pangkat" => "Pengatur Muda Tingkat 1"
      ],
      [
        "kode_pangkat" => "II / c",
        "nama_pangkat" => "Pengatur"
      ],
      [
        "kode_pangkat" => "II / d",
        "nama_pangkat" => "Pengatur Tingkat 1"
      ],
      [
        "kode_pangkat" => "III / a",
        "nama_pangkat" => "Penata Muda"
      ],
      [
        "kode_pangkat" => "III / b",
        "nama_pangkat" => "Penata Muda Tingkat 1"
      ],
      [
        "kode_pangkat" => "III / c",
        "nama_pangkat" => "Penata"
      ],
      [
        "kode_pangkat" => "III / d",
        "nama_pangkat" => "Penata Tingkat 1"
      ],
      [
        "kode_pangkat" => "IV / a",
        "nama_pangkat" => "Pembina"
      ],
      [
        "kode_pangkat" => "IV / b",
        "nama_pangkat" => "Pembina Tingkat 1"
      ],
      [
        "kode_pangkat" => "IV / c",
        "nama_pangkat" => "Pembina Utama Muda"
      ],
      [
        "kode_pangkat" => "IV / d",
        "nama_pangkat" => "Pembina Utama Madya"
      ],
      [
        "kode_pangkat" => "IV / e",
        "nama_pangkat" => "Pembina Utama"
      ],
    ]);
  }
}
