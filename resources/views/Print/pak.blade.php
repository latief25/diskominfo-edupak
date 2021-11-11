@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-3" style="font-family: 'Times New Roman', Times, serif;">
  <div class="d-flex flex-column">
    <div class="d-flex flex-row justify-content-around">
      <img src="{{asset('images/logo.png')}}" height="150px" />
      <div class="d-flex align-items-center flex-column mx-auto">
        <p class="fs-2 mb-n1 " style="font-family: sans-serif">PEMERINTAH PROVINSI KALIMANTAN SELATAN</p>
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
      <div class="offset-7" style="font-family: Arial, Helvetica, sans-serif;font-size: 14px;">
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
      <p class="mt-n3">-------------------------------------------------------------------------------------------</p>
      <p class="mt-n3">Nomor : 831/XXXX XXXX - SETKOM/DINFOMINFO/2021</p>
      <p class="mt-n3">Masa Penilaian : XXXX s/d XXXX</p>
    </div>
  </div>
</div>
@endsection()

@section('head')
<style>
  .letter-spacing {
    letter-spacing: 4px;
  }
</style>
@endsection()
