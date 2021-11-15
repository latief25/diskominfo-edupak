@extends('layouts.app')

@section('content')
<div class="hold-transition sidebar-mini d-print-none">
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
            {{ $data->nama }}
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
        <img src="{{ asset('images/logo.png') }}" alt="logo" class="brand-image" style="opacity: .8">
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
              <form method="POST" action="/profile">
                @csrf
                <fieldset id="edit" disabled>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nip">NIP</label>
                      <input type="text" class="form-control @error('nip')is-invalid @enderror" name="nip" value="{{ $data->nip }}" required>
                      @error('nip')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" value="{{ $data->nama }}" required>
                      @error('nama')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="nomor_seri_karpeg">Nomor Seri KARPEG</label>
                      <input type="text" class="form-control @error('nomor_seri_karpeg')is-invalid @enderror" name="nomor_seri_karpeg" value="{{ $data->nkarpeg }}" required>
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
                            @if ($data->pangkat_id == null)
                            <option selected>Pilih Pangakat</option>
                            @endif
                            @foreach ($pangkat as $p)
                            <option @if ($data->pangkat_id === $p->id) selected @endif value="{{ $p->id }}">
                              {{ $p->nama_pangkat }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-group" name="tmt_golongan_ruang">
                          <label for="tmt_golongan_ruang">TMT Golongan Ruang</label>
                          <input type="date" class="form-control @error('tmt_golongan_ruang')is-invalid @enderror" name="tmt_golongan_ruang" value="{{ $data->tmt_golongan_ruang }}" required>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control @error('tempat_lahir')is-invalid @enderror" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required>
                      @error('tempat_lahir')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input type="date" class="form-control @error('tanggal_lahir')is-invalid @enderror" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required>
                    </div>

                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin">
                        @if ($data->jenis_kelamin == null)
                        <option selected>Pilih Jenis Kelamin</option>
                        @endif
                        <option value="L" @if ($data->jenis_kelamin === 'L') selected @endif>Laki-Laki</option>
                        <option value="P" @if ($data->jenis_kelamin === 'P') selected @endif>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="pendidikan_tertinggi">Pendidikan Tertinggi</label>
                      <select class="form-control" name="pendidikan_tertinggi">
                        @if ($data->pendidikan_tertinggi == null)
                        <option selected>Pilih Pendidikan Tertinggi</option>
                        @endif
                        <option value="SMA" @if ($data->pendidikan_tertinggi === 'SMA') selected @endif>SMA</option>
                        <option value="S1" @if ($data->pendidikan_tertinggi === 'S1') selected @endif>S1</option>
                        <option value="S2" @if ($data->pendidikan_tertinggi === 'S2') selected @endif>S2</option>
                        <option value="S3" @if ($data->pendidikan_tertinggi === 'S3') selected @endif>S3</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                          <label for="jabatan_fungsional">Jabatan Fungsional</label>
                          <select class="form-control" name="jabatan_fungsional">
                            @if ($data->jabatan_fungsional_id == null)
                            <option selected>Pilih Jabatan Fungsional</option>
                            @endif
                            @foreach ($jabatan_fungsional as $j)
                            <option @if ($data->jabatan_fungsional_id === $j->id) selected @endif value="{{ $j->id }}">
                              {{ $j->nama_jabatan_fungsional }}
                            </option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-group">
                          <label for="tmt_jabatan_fungsional">TMT Jabatan Fungsional</label>
                          <input type="date" class="form-control @error('tmt_jabatan_fungsional')is-invalid @enderror" name="tmt_jabatan_fungsional" value="{{ $data->tmt_jabatan_fungsional }}" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md">
                        <div class="form-group">
                          <label for="masa_kerja_golongan_lama">Masa Kerja Golongan Lama</label>
                          <input type="month" class="form-control @error('masa_kerja_golongan_lama')is-invalid @enderror" name="masa_kerja_golongan_lama" value="{{ $data->masa_kerja_golongan_lama }}" required>
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
                          <input type="month" class="form-control @error('masa_kerja_golongan_baru')is-invalid @enderror" name="masa_kerja_golongan_baru" value="{{ $data->masa_kerja_golongan_baru }}" required>
                          @error('masa_kerja_golongan_lama')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="unit_kerja">Unit Kerja</label>
                        <select class="form-control" name="unit_kerja">
                          @if ($data->unit_kerja_id == null)
                          <option selected>Pilih Unit Kerja</option>
                          @endif
                          @foreach ($unit_kerja as $u)
                          <option @if ($data->unit_kerja_id === $u->id) selected @endif value="{{ $u->id }}">
                            {{ $u->nama_unit_kerja }}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer mt-n2 mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </fieldset>
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

<!-- Ini bagian yang akan diprint -->
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
          {{$pangkat[$data->pangkat_id]->nama_pangkat}}
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
        <div class="col-3 offset-3">
          <p class="mb-n1">Ditetapkan di : Banjarbaru</p>
          <p class="mb-n1">Pada tanggal : xxxxxxxx</p>
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
