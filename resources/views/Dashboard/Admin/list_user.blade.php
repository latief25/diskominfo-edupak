@extends('Dashboard.layouts.main')

@section('dashboard-content')
<div class="px-0">
  <h4>Daftar Pegawai</h4>
  <table id="tabel-pegawai" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="tabel-pegawai">
    <thead>
      <tr role="row">
        <th style="width: 5%;">NO.</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $index => $row)
      <tr class="odd">
        <td>{{$index+1}}</td>
        <td>{{$row->nip}}</td>
        <td>{{$row->nama}}</td>
        <td>
          ------,------,------
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection
