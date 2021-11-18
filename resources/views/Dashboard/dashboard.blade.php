@extends('Dashboard.layouts.main')

<!-- content dari dashboard -->
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
