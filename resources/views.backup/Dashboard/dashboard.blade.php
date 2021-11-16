@extends('layouts.app')

@section('content')
<div class="hold-transition sidebar-mini d-print-none">
  <div class="wrapper">

    <!-- navbar -->
    @include('Dashboard.navbar')

    <!-- Sidebar -->
    @include('Dashboard.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content mt-4">
        <div class="container-fluid">
          <div class="mb-2 ms-1">
            <button class="btn btn-primary me-2" onclick="edit()">Edit
              <span data-feather="edit-2" class="ms-2" style="width:18px"></span>
            </button>
            <button class="btn btn-warning" onclick="window.print()">Cetak
              <span data-feather="printer" class="ms-2" style="width:18px"></span>
            </button>
          </div>
          <div class="row mx-1">
            @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show " role="alert">
              {{ session('berhasil') }}
              <button type="button" class="btn-close m-n1" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card card-primary px-0 mx-auto">
              <div class="card-header">
                <h3 class="card-title">Data Profile</h3>
              </div>
              <!-- form start -->
              @include('Dashboard.form_profile')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- Ini bagian yang akan diprint -->
@include('Print.pak')
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
    width: 4%;
  }

  * {
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
  }
</style>
@endsection()

@section('js')
<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()

  function edit() {
    let form = document.getElementById("edit");
    form.removeAttribute("disabled")
  }
</script>
@endsection()
