@extends('Dashboard.layouts.main')

@section('dashboard-content')
<div class="mb-3 px-0">
  <button class="btn btn-primary me-2" onclick="edit()">Edit
    <span data-feather="edit-2" class="ms-2" style="width:18px"></span>
  </button>
  <button class="btn btn-warning" onclick="window.print()">Cetak
    <span data-feather="printer" class="ms-2" style="width:18px"></span>
  </button>
</div>
<div class="card card-primary px-0 mx-auto">
  @include('Dashboard.components.form_profile')
</div>
@endsection

@section('print-profile')
<!-- Ini bagian yang akan diprint -->
@include('Print.pak')
@endsection

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
