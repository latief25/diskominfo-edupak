@extends('layouts.app')

@section('content')
<div class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="/dashboard" role="button"><i class="fas fa-bars"></i></a>
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
              <form method="POST" action="/profile">
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
                    <label for="nomor_seri_karpeg">Nomor Seri KARPEG</label>
                    <input type="text" class="form-control @error('nomor_seri_karpeg')is-invalid @enderror" name="nomor_seri_karpeg" value="{{$data->nkarpeg}}">
                    @error('nomor_seri_karpeg')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="row">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="pangkat">Pangkat</label>
                        <select class="form-control" name="pangkat">
                          @if($data->pangkat_id == null)
                          <option selected>Pilih Pangakat</option>
                          @endif
                          @foreach ($pangkat as $p)
                          <option @if($data->pangkat_id === $p->id) selected @endif value="{{$p->id}}">{{ $p->nama_pangkat }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-group" name="tmt_golongan_ruang">
                        <label for="tmt_golongan_ruang">TMT Golongan Ruang</label>
                        <input type="date" class="form-control @error('tmt_golongan_ruang')is-invalid @enderror" name="tmt_golongan_ruang" value="{{$data->tmt_golongan_ruang}}">
                      </div>
                    </div>
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

                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('tanggal_lahir')is-invalid @enderror" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                  </div>

                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      @if($data->jenis_kelamin == null)
                      <option selected>Pilih Jenis Kelamin</option>
                      @endif
                      <option value="L" @if($data->jenis_kelamin === "L") selected @endif>Laki-Laki</option>
                      <option value="P" @if($data->jenis_kelamin === "P") selected @endif>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pendidikan_tertinggi">Pendidikan Tertinggi</label>
                    <select class="form-control" name="pendidikan_tertinggi">
                      @if($data->pendidikan_tertinggi == null)
                      <option selected>Pilih Pendidikan Tertinggi</option>
                      @endif
                      <option value="sma" @if($data->pendidikan_tertinggi === "sma") selected @endif>SMA</option>
                      <option value="s1" @if($data->pendidikan_tertinggi === "s1") selected @endif>S1</option>
                      <option value="s2" @if($data->pendidikan_tertinggi === "s2") selected @endif>S2</option>
                      <option value="s3" @if($data->pendidikan_tertinggi === "s3") selected @endif>S3</option>
                    </select>
                  </div>
                  <div class="row">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="jabatan_fungsional">Jabatan Fungsional</label>
                        <input type="text" class="form-control @error('jabatan_fungsional')is-invalid @enderror" name="jabatan_fungsional" value="{{$data->jabatan_fungsional}}">
                        @error('jabatan_fungsional')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                        <!--      <label for="jabatan_fungsional">Jabatan Fungsional</label>
                        <select class="form-control">
                          <option selected value="{{$data->nama_jabatan_fungsional}}">{{$data->jabatan_fungsional ?? 'Pilih Jabatan Fungsional'}}</option>
                          <option value="#">Data 1</option>
                          <option value="#">Data 2</option>
                          <option value="#">Data 3</option>
                        </select> -->
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-group">
                        <label for="tmt_fungsional">TMT Jabatan Fungsional</label>
                        <input type="date" class="form-control @error('tmt_fungsional')is-invalid @enderror" name="tmt_fungsional" value="{{$data->tmt_fungsional}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md">
                      <div class="form-group">
                        <label for="masa_kerja_golongan_lama">Masa Kerja Golongan Lama</label>
                        <input type="month" class="form-control @error('masa_kerja_golongan_lama')is-invalid @enderror" name="masa_kerja_golongan_lama" value="{{$data->masa_kerja_golongan_lama}}">
                        @error('masa_kerja_golongan_lama')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-group">
                        <label for="masa_kerja_golongan_baru">Masa Kerja Golongan Baru</label>
                        <input type="month" class="form-control @error('masa_kerja_golongan_baru')is-invalid @enderror" name="masa_kerja_golongan_baru" value="{{$data->masa_kerja_golongan_baru}}">
                        @error('masa_kerja_golongan_lama')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="unit_kerja">Unit Kerja</label>
                      <select class="form-control">
                        <option selected value="{{$data->unit_kerja}}">{{$data->unit_kerja ?? 'Pilih Unit Kerja'}}</option>
                        <option value="#">Data 1</option>
                        <option value="#">Data 2</option>
                        <option value="#">Data 3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-footer mt-n2 mb-3">
                  <button type="submit" class="btn btn-primary">Simpan</button>
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
