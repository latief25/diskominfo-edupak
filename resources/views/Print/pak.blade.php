@extends('layouts.app')

@section('content')
<div class="mx-auto " style="font-family: Arial, Helvetica, sans-serif;">
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
    <div class="col-12">
      <div class="offset-7">
        <p class="mt-3 mb-n1">KEPUTUSAN BERSAMA</p>
        <p class="mt-n1 mb-n1">KEPALA BADAN PUSAT STATISKTIK DAN</p>
        <p class="mt-n1 mb-n1">KEPALA BADAN PENGAWASAN NEGARA</p>
        <p class="mt-n1 mb-n1">NOMOR : WD002/BPS-SKB/II/2004</p>
        <p class="mt-n1 mb-n1">NOMOR : 04 TAHUN 2004</p>
        <p class="mt-n1 mb-n1">TANGGAL : 17 Februari 2004</p>
      </div>
    </div>
    <div class="text-center mt-5">
      <p class="fw-bold fs-4">PENETAPAN ANGKA KREDIT</p>
      <p class="mt-n4">-------------------------------------------------------------------------------------------</p>
      <p class="mt-n3">Nomor : 831/XXXX XXXX - SETKOM/DINFOMINFO/2021</p>
      <p class="mt-n3">Masa Penilaian : XXXX s/d XXXX</p>
    </div>
    <p class="ms-4 mb-n1">Instansi : xxxxxx</p>

    <!--  TABEL KETERANGAN PERORANGAN -->
    <table class="w-100">
      <tr>
        <td class="px-2 text-center fw-bold col-width" rowspan="12">I</td>
        <td class="ps-1 fw-bold" colspan="12">KETERANGAN PERORANGAN</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold col-width">1.</td>
        <td class="ps-1" colspan="4">Nama</td>
        <td class="ps-1" colspan="6">Nama orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">2.</td>
        <td class="ps-1" colspan="4">NIP</td>
        <td class="ps-1" colspan="6">NIP orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">3.</td>
        <td class="ps-1" colspan="4">Nomor KARPEG</td>
        <td class="ps-1" colspan="6">Nomor orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">4.</td>
        <td class="ps-1" colspan="4">Pangkat / Golongan Ruang / TMT</td>
        <td class="ps-1" colspan="6">Pangkat / Golongan Ruang / TMT orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">5.</td>
        <td class="ps-1" colspan="4">Tempat dan Tanggal Lahir</td>
        <td class="ps-1" colspan="6">Tempat dan Tanggal Lahir orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">6.</td>
        <td class="ps-1" colspan="4">Jenis Kelamin</td>
        <td class="ps-1" colspan="6">Nama orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">7.</td>
        <td class="ps-1" colspan="4">Pendidikan Tertinggi</td>
        <td class="ps-1" colspan="6">Nama orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">8.</td>
        <td class="ps-1" colspan="4">Jabatan Fungsional / TMT</td>
        <td class="ps-1" colspan="6">Jabatan Fungsional / TMT orangnya</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold" rowspan="2">9.</td>
        <td class="ps-1" rowspan="2" colspan="3">Masa Keja Golongan</td>
        <td class="ps-1">Lama</td>
        <td class="ps-1">masa kerja golongan lama</td>
      </tr>
      <tr>
        <td class="ps-1">Baru</td>
        <td class="ps-1">Masa kerja golongan baru</td>
      </tr>
      <tr>
        <td class="ps-1 text-center fw-bold">10.</td>
        <td class="ps-1" colspan="4">Unit Kerja</td>
        <td class="ps-1" colspan="6">Nama orangnya</td>
      </tr>
    </table>

    <!--  TABEL PENETAPAN ANGKA KREDIT -->
    <table>
      <tr class="text-center fw-bold">
        <td colspan="12">PENERAPANG AGKA KREDIT</td>
      </tr>
      <tr class="text-center fw-bold">
        <td class="col-width">NO</td>
        <td colspan="5">URAIAN</td>
        <td colspan="2">LAMA</td>
        <td colspan="2">BARU</td>
        <td colspan="2">JUMLAH</td>
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
        <td colspan="5">UNSUR UTAMA</td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td class="text-center" rowspan="5">1</td>
        <td colspan="4">Tugas Jabatan</td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td class="text-center col-width">A.</td>
        <td colspan="3">Tata Kelola dan Tata Laksana</td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
      </tr>
    </table>
  </div>
</div>
@endsection()

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
    width: 40px;
  }
</style>
@endsection()
