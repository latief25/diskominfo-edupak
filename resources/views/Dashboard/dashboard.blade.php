@extends('layouts.app')

@section('content')
<div class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <div class="dropdown">
          <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$data->nama}}
          </button>
          <ul class="dropdown-menu">
            <li class="d-flex justify-content-center">
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="nav-link bg-white px-3 border-0 d-flex align-items-center">
                  Logout
                  <span data-feather="log-out" class="ms-2" style="width:18px"></span>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link d-flex align-items-center">
        <img src="{{asset('images/logo.png')}}" alt="logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-bold h2">E-Dupak</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content mt-4">
        <div class="container-fluid">
          <div class="row mx-1">
            <div class="card card-primary px-0 mx-auto">
              <div class="card-header">
                <h3 class="card-title">Data Profile</h3>
              </div>
              <!-- form start -->
              <form>
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control @error('nip')is-invalid @enderror" name="nip" value="{{$data->nip }}">
                    @error('nip')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" value="{{$data->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="nomer_seri_karpeg">Nomer Seri KARPEG</label>
                    <input type="text" class="form-control @error('nomer_seri_karpeg')is-invalid @enderror" name="nomer_seri_karpeg" value="{{$data->nomer_seri_karpeg}}">
                    @error('nomer_seri_karpeg')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="pangkat">Pangkat</label>
                    <select class="form-control">
                      <option selected value="{{$data->nama_pangkat}}">{{$data->nama_pangkat ?? 'Pilih pangkat'}}</option>
                      @foreach ($pangkat as $p)
                      <option value="{{ $p->kode_pangkat }}">{{ $p->nama_pangkat }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control @error('tempat_lahir')is-invalid @enderror" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                    @error('tempat_lahir')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>


                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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




@endsection()
@section('js')
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
@endsection()
