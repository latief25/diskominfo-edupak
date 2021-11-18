<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('instansi')->insert(
      [
        [
          'kwil' => "6300000000",
          "kinsduk" => "6800",
          'nwil' => "KALIMANTAN SELATAN",
          'ibu_kota' => "BANJARMASIN",
          'twil' => 1,
          'kd_lokker' => 0,
          "bkd" => "Badan Kepegawaian Daerah",
        ],
        [
          'kwil' => "6303000000",
          "kinsduk" => "6801",
          'nwil' => "BANJAR",
          'ibu_kota' => "MARTAPURA",
          'twil' => 2,
          'kd_lokker' => 1,
          "bkd" => null
        ],
        [
          'kwil' => "6301000000",
          "kinsduk" => "6802",
          'nwil' => "TANAH LAUT",
          'ibu_kota' => "PELAIHARI",
          'twil' => 2,
          'kd_lokker' => 2,
          "bkd" => null

        ],
        [
          'kwil' => "6305000000",
          "kinsduk" => "6803",
          'nwil' => "TAPIN",
          'ibu_kota' => "RANTAU",
          'twil' => 2,
          'kd_lokker' => 3,
          "bkd" => "Badan Kepegawaian Pengembangan Sumber Daya Manusia",
        ],
        [
          'kwil' => "6306000000",
          "kinsduk" => "6804",
          'nwil' => "HULU SUNGAI SELATAN",
          'ibu_kota' => "KANDANGAN",
          'twil' => 2,
          'kd_lokker' => 4,
          "bkd" => "Badan Kepegawaian Pendidikan dan Pelatihan",
        ],
        [
          'kwil' => "6307000000",
          "kinsduk" => "6805",
          'nwil' => "HULU SUNGAI TENGAH",
          'ibu_kota' => "BARABAI",
          'twil' => 2,
          'kd_lokker' => 5,
          "bkd" => "Badan Kepegawaian Pendidikan dan Pelatihan SDMD",
        ],
        [
          'kwil' => "6304000000",
          "kinsduk" => "6806",
          'nwil' => "BARITO KUALA",
          'ibu_kota' => "MARABAHAN",
          'twil' => 2,
          'kd_lokker' => 6,
          "bkd" => "Badan Kepegawaian Pendidikan dan Pelatihan",
        ],
        [
          'kwil' => "6309000000",
          "kinsduk" => "6807",
          'nwil' => "TABALONG",
          'ibu_kota' => "TABALONG",
          'twil' => 2,
          'kd_lokker' => 7,
          "bkd" => "Badan Kepegawaian Pendidikan dan Pelatihan",
        ],
        [
          'kwil' => "6302000000",
          "kinsduk" => "6808",
          'nwil' => "KOTABARU",
          'twil' => 2,
          'ibu_kota' => null,
          'kd_lokker' => 8,
          "bkd" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia",
        ],
        [
          'kwil' => "6308000000",
          "kinsduk" => "6809",
          'nwil' => "HULU SUNGAI UTARA",
          'ibu_kota' => "AMUNTAI",
          'twil' => 2,
          'kd_lokker' => 9,
          "bkd" => "Badan Kepegawaian Pendidikan dan Pelatihan",
        ],
        [
          'kwil' => "6310000000",
          "kinsduk" => "6810",
          'nwil' => "TANAH BUMBU",
          'ibu_kota' => "BATULICIN",
          'twil' => 2,
          'kd_lokker' => 10,
          "bkd" => "Badan Kepegawaian Daerah",
        ],
        [
          'kwil' => "6311000000",
          "kinsduk" => "6811",
          'nwil' => "BALANGAN",
          'ibu_kota' => "BALANGAN",
          'twil' => 2,
          'kd_lokker' => 11,
          "bkd" => "Badan Kepegawaian Pendidikan dan Pelatihan Daerah",
        ],
        [
          'kwil' => "6351000000",
          "kinsduk" => "6812",
          'nwil' => "BANJARBARU",
          'ibu_kota' => "BANJARBARU",
          'twil' => 2,
          'kd_lokker' => 12,
          "bkd" => "Badan Kepegawaian Daerah Pendidikan dan Pelatihan",
        ],
        [
          'kwil' => "6350000000",
          "kinsduk" => "6813",
          'nwil' => "BANJARMASIN",
          'ibu_kota' => "BANJARMASIN",
          'twil' => 2,
          'kd_lokker' => 13,
          "bkd" => "Badan Kepegawaian Daerah Pendidikan dan Pelatihan",
        ],
        [
          'kwil' => "6200000000",
          "kinsduk" => "6700",
          'nwil' => "KALIMANTAN TENGAH",
          'ibu_kota' => "PALANGKARAYA",
          'twil' => 1,
          'kd_lokker' => 0,
          "bkd" => "Badan Kepegawaian Daerah",
        ],
        [
          'kwil' => "6203000000",
          "kinsduk" => "6701",
          'nwil' => "KAPUAS",
          'ibu_kota' => null,
          'twil' => 2,
          'kd_lokker' => 1,
          "bkd" => "Badan Kepegawaian dan Pengembangan Sumber Daya Manusia",
        ],
        [
          'kwil' => '6205000000',
          'kinsduk' => '6702',
          'nwil' => 'BARITO UTARA',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6204000000',
          'kinsduk' => '6703',
          'nwil' => 'BARITO SELATAN',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6202000000',
          'kinsduk' => '6704',
          'nwil' => 'KOTAWARINGIN TIMUR',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6201000000',
          'kinsduk' => '6705',
          'nwil' => 'KOTAWARINGIN BARAT',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6206000000',
          'kinsduk' => '6706',
          'nwil' => 'KATINGAN',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6207000000',
          'kinsduk' => '6707',
          'nwil' => 'SERUYAN	',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6208000000',
          'kinsduk' => '6708',
          'nwil' => 'SUKAMARA',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6209000000',
          'kinsduk' => '6709',
          'nwil' => 'LAMANDAU',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6210000000',
          'kinsduk' => '6710',
          'nwil' => 'GUNUNG MAS',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6211000000',
          'kinsduk' => '6711',
          'nwil' => 'PULANG PISAU',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6212000000',
          'kinsduk' => '6712',
          'nwil' => 'MURUNG RAYA	',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6213000000',
          'kinsduk' => '6713',
          'nwil' => 'BARITO TIMUR',
          'ibu_kota' => null,
        ],
        [
          'kwil' => '6250000000',
          'kinsduk' => '6771',
          'nwil' => 'PALANGKARAYA',
          'ibu_kota' => null,
        ],






















      
    

  
