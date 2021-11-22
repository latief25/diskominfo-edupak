<div class="d-none d-print-block" style="font-family: Arial, Helvetica, sans-serif;">
  <div class="d-flex flex-column">
    <div class="d-flex flex-row justify-content-around">
      <img src="{{asset('images/logo.png')}}" height="150px" />
      <div class="d-flex align-items-center flex-column mx-auto" style="font-family: 'Times New Roman', Times, serif;">
        <p class="fs-2 mb-n1 " style="font-family: Arial, Helvetica, sans-serif;">PEMERINTAH PROVINSI KALIMANTAN SELATAN</p>
        <p class="fs-1 fw-bold mt-n3 mb-n2">DINAS KOMUNIKASI DAN INFORMATIKA</p>
        <p class="mt-n2 mb-n2">Jl. Dhama Praja II Kawasan Perkantoran Sekretariat Daerah Prov Kal Sel KodePost 70700</p>
        <p class="fst-italic">Website : <span class="text-primary">http://www.kalselprov.go.id </span>Email : <span class="text-primary">pde@kalselprov.go.id</span></p>
        <p class="mt-n4">Telp/Fax.(0511) 6749844; Telp.(0511) 6749842</p>
        <p class="mt-n4 letter-spacing">BANJARBARU</p>
      </div>
    </div>
    <div class="w-full bg-black mt-1" style="height: 4px;"></div>
    <div class="w-full bg-black mt-1" style="height: 8px;"></div>
    <div class="text-center mt-5">
      <p class="fw-bold fs-4">PENETAPAN ANGKA KREDIT</p>
      <p class="mt-n4">-------------------------------------------------------------------------------------------</p>
      <p class="mt-n3">Nomor : 831/XXXX XXXX - SETKOM/DISKOMINFO/2021</p>
      <p class="mt-n3">Masa Penilaian : XXXX s/d XXXX</p>
    </div>
    <p class="ms-4 mb-n1">Instansi : Instansi ini</p>

    <!--  TABEL KETERANGAN PERORANGAN -->
    <table class="w-100">
      <tr>
        <td class="px-2 text-center fw-bold col-width" rowspan="12">I</td>
        <td class="ps-1 fw-bold" colspan="12">KETERANGAN PERORANGAN</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold col-width">1.</td>
        <td class="ps-1" colspan="4" style="width: 42%;">Nama</td>
        <td class="ps-1 w-50" colspan="6">{{$data->nama}}</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">2.</td>
        <td class="ps-1" colspan="4">NIP</td>
        <td class="ps-1" colspan="6">{{$data->nip }}</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">3.</td>
        <td class="ps-1" colspan="4">Nomor KARPEG</td>
        <td class="ps-1" colspan="6">{{$data->nkarpeg}}</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">4.</td>
        <td class="ps-1" colspan="4">Pangkat / Golongan Ruang / TMT</td>
        <!-- TODO : TAMBAHKAN GOLONGAN RUANG DAN TMT -->
        <td class="ps-1" colspan="6">
          @isset($data->pangkat_id)
          @foreach ($pangkat as $p => $value)
          @if($data->pangkat_id == $value->id)
          {{$value->nama_pangkat}} {{$value->kode_pangkat}}
          @endif
          @endforeach
          @endisset
        </td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">5.</td>
        <td class="ps-1" colspan="4">Tempat dan Tanggal Lahir</td>
        <td class="ps-1" colspan="6">
          @if(isset($data->tempat_lahir) && isset($data->tanggal_lahir))
          {{$data->tempat_lahir}}, {{ date('d F Y', strtotime($data->tanggal_lahir)); }}
          @endif
        </td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">6.</td>
        <td class="ps-1" colspan="4">Jenis Kelamin</td>
        <td class="ps-1" colspan="6">
          @if ($data->jenis_kelamin === "L")
          Laki-Laki
          @elseif ($data->jenis_kelamin === "P")
          Perempuan
          @else

          @endif
        </td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">7.</td>
        <td class="ps-1" colspan="4">Pendidikan Tertinggi</td>
        <td class="ps-1" colspan="6">{{$data->pendidikan_tertinggi}}</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">8.</td>
        <td class="ps-1" colspan="4">Jabatan Fungsional / TMT</td>
        <td class="ps-1" colspan="6">
          @if(isset($data->jabatan_fungsional_id) && isset($data->tmt_jabatan_fungsional))
          {{$jabatan_fungsional[$data->jabatan_fungsional_id]->nama_jabatan_fungsional}}, {{ date('d F Y', strtotime($data->tmt_jabatan_fungsional)); }}
          @endif
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold" rowspan="2">9.</td>
        <td class="ps-1" rowspan="2" colspan="3">Masa Keja Golongan</td>
        <td class="ps-1">Lama</td>
        <td class="ps-1">
          @isset($data->masa_kerja_golongan_lama)
          {{ date('F Y', strtotime($data->masa_kerja_golongan_lama)); }}
          @endisset
        </td>
      </tr>
      <tr>
        <td class="ps-1">Baru</td>
        <td class="ps-1">
          @isset($data->masa_kerja_golongan_baru)
          {{ date('F Y', strtotime($data->masa_kerja_golongan_baru)); }}
          @endisset
        </td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">10.</td>
        <td class="ps-1" colspan="4">Unit Kerja</td>
        <td class="ps-1" colspan="6">
          Ini contoh data yang panjang sekali Ini contoh data yang panjang sekali Ini contoh data yang panjang sekali Ini contoh data yang panjang sekali
          @isset($data->unit_kerja_id)
          {{$unit_kerja[$data->unit_kerja_id]->nama_unit_kerja}}
          @endisset
        </td>
      </tr>
    </table>

    <!--  TABEL PENETAPAN ANGKA KREDIT -->
    <table>
      <tr class="text-center fw-bold">
        <td colspan="12">PENERAPANG AGKA KREDIT</td>
      </tr>

      <tr class="text-center fw-bold">
        <td class="col-width">NO</td>
        <td colspan="5" style="width: 46%;">URAIAN</td>
        <td colspan="2" style="width: 16.66666%;">LAMA</td>
        <td colspan="2" style="width: 16.66666%;">BARU</td>
        <td colspan="2" style="width: 16.66666%;">JUMLAH</td>
      </tr>

      <tr class="text-center fw-bold">
        <td class="col-width">(1)</td>
        <td colspan="5">(2)</td>
        <td colspan="2">(3)</td>
        <td colspan="2">(4)</td>
        <td colspan="2">(5)</td>
      </tr>

      <tr class="fw-bold">
        <td class="text-center" rowspan="7">A</td>
        <td class="px-1" colspan="5">UNSUR UTAMA</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr>
        <td class="text-center col-width" rowspan="4">1</td>
        <td class="px-1" colspan="4">Tugas Jabatan</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr>
        <td class="text-center col-width">A.</td>
        <td class="px-1" colspan="3">Tata Kelola dan Tata Laksana Teknologi Informasi</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr>
        <td class="text-center col-width">B.</td>
        <td class="px-1" colspan="3">Infrastruktur Teknologi Informasi</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr>
        <td class="text-center col-width">C.</td>
        <td class="px-1" colspan="3">Sistem Informasi dan Multimedia</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr>
        <td class="text-center col-width">2</td>
        <td class="px-1" colspan="4">Pengembangan Profesi</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr>
        <td class="text-center col-width"></td>
        <td class="px-1" class="fw-bold text-center" colspan="4">Jumlah Unsur Utama</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr class="fw-bold">
        <td class="text-center" rowspan="2">B</td>
        <td class="px-1" colspan="5">UNSUR PENUNJANG</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr class="fw-bold">
        <td class="px-1" colspan="5">Jumlah Unsur Utama dan Unsur Penunjang</td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
        <td class="px-1" colspan="2"></td>
      </tr>

      <tr class="fw-bold text-center">
        <td colspan="12">REKOMENDASI</td>
      </tr>

      <tr>
        <td class="text-center fw-bold" rowspan="7">III</td>
        <td class="px-1" colspan="11">Dapat dipertimbangkan untuk dinaikkan dalam Jabatan Pranata Komputer xxxxx dan Pangakat/ Golongan Ruang xxxx/xxx dengan angka kredit sebesar 100, dengan melampirkan sertifikat lulus uji kompetensi. Untuk PAK berikutnya, angka kredit dimulai dari 0.</td>
      </tr>
    </table>
    <div class="container-fluid">

      <div class="row mt-4">
        <div class="col-6">
          <p class="mb-n1">ASLI disampaikan dengan hormat kepada :</p>
          <p class="">Kepala BKN/Kepla Kantor Regional BKN yang bersangkutan</p>
          <p class="mb-n1">TEMBUSAN : disampaikan kepada :</p>
          <p class="mb-n1">1. Pranata Kimputer yang bersangkutan;</p>
          <p class="mb-n1">2. Sekretariat Tim Penilai yang bersangkutan</p>
          <p class="mb-n1">3. Kepala Badan Kepegawaian Daerah Prov. Kal Sel</p>
          <p class="mb-n1">4. Kepala Biro Keuangan Prov. Kalsel</p>
          <p class="mb-n1">5. Pimpinan unit kerja Prenata Komputer yang bersangkutan;</p>
          <p class="mb-n1">6. Arsip</p>
        </div>
        <div class="col-4 offset-2">
          <p class="mb-n1">Ditetapkan di : Banjarbaru</p>
          <p class="mb-n1">Pada tanggal : {{ date('d F Y'); }}
          </p>
          <div class="text-center">
            <p class="mb-n1 fw-bold">Kepala Dinas</p>
            <p class="fw-bold">Komunikasi & Informatika</p>
            <p class="mb-n1 mt-5 fw-bold under"><u>Drs. GT. YANUAR NOOR RIFAI M.Si</u></p>
            <p class="mb-n1">Pembina Utama muda</p>
            <p class="mb-n1">NIP. 19669131 198903 1 004</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


@section('head')
<style>
  .letter-spacing {
    letter-spacing: 4px;
  }

  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  td[rowspan] {
    vertical-align: top;
    text-align: left;
  }

  .col-width {
    width: 4%;
  }

  * {
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
  }
</style>
@endsection()
