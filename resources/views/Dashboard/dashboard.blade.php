@extends('layouts.app')
@section('css')
    <link href="/css/dashboard.css" rel="stylesheet">
@endsection
@section('content')

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <button class="navbar-toggler  d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">E-Dupak</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0 d-flex align-items-center">
                        Logout
                        <span data-feather="log-out" class="ms-2"></span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Data profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">
                                <span data-feather="file"></span>
                                Menu 2
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Data Profile</h1>
                </div>
                <button class="btn btn-primary d-flex align-items-center" onclick="edit()">
                    Edit
                    <span class="ms-2" style="width: 20px; height: 20px;" data-feather="edit-2">
                    </span>
                </button>

                <div class="mt-4">
                    <form method="POST" action="/profile" class="justify-content-center">
                        @csrf
                        <fieldset id="edit" disabled>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control @error('nip')is-invalid @enderror" id="nip"
                                    name="nip" value="{{ $data->nip }}" placeholder="nip">
                                <label for="nip">NIP</label>
                                @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama"
                                    name="nama" value="{{ $data->nama }}">
                                <label for="nama">Nama</label>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control @error('nomor_seri_karpeg')is-invalid @enderror"
                                    id="nomor_seri_karpeg" name="nomor_seri_karpeg" value="{{ $data->nkarpeg }}">
                                <label for="nomor_seri_karpeg">Nomor Seri KARPEG</label>
                                @error('nomor_seri_karpeg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control @error('tempat_lahir')is-invalid @enderror"
                                    id="tempat_lahir" name="tempat_lahir" value="{{ $data->tempat_lahir }}">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="date" class="form-control @error('tanggal_lahir')is-invalid @enderror"
                                    id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4 form-floating">
                                <select name="jenis-kelamin" class="form-select" aria-label="Jenis Kelamin">
                                    <option selected>Pilih jenis kelamin</option>
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <label for="jenis-kelamin">Jenis Kelamin</label>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4 form-floating">
                                <select name="pendidikan_tertinggi" class="form-select"
                                    aria-label="Pendidikan Tertinggi">
                                    <option selected>Pilih pendidikan tertinggi</option>
                                    <option value="sma">SMA/K</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                    <option value="s3">S3</option>
                                </select>
                                <label for="pendidikan_tertinggi">Pendidikan Tertinggi</label>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-4 form-floating">
                                        <select class="form-select" id="floatingSelectGrid" aria-label="pangkat">
                                            <option selected>Pilih pangkat</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelectGrid">Pangkat</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-4 form-floating">
                                        <select class="form-select" id="floatingSelectGrid" aria-label="golongan ruang">
                                            <option selected>Pilih golongan ruang</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelectGrid">Golongan Ruang</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-4 form-floating">
                                        <select class="form-select" id="floatingSelectGrid" aria-label="tmt">
                                            <option selected>TMT</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floTatingSelectGrid">TMT</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-4 form-floating">
                                        <input type="text" class="form-control" id="mkLama" placeholder="" value="">
                                        <label for="mkLama">Masa Kerja Golongan Lama</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mkBaru" placeholder="" value="">
                                        <label for="mkBaru">Masa Kerja Golongan Baru</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="text" class="form-control @error('unit_kerja')is-invalid @enderror"
                                    id="unit-kerja" name="unit-kerja" value=" ">
                                <label for=" unit-kerja">Unit Kerja</label>
                                @error('unit-kerja')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="mb-3 w-100 btn btn-lg btn-success" type="submit">Simpan</button>
                        </fieldset>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()


        function edit() {
            let form = document.getElementById("edit");
            console.log(form)
            form.removeAttribute("disabled")
        }

        function save() {
            form.setAttribute("disabled");
        }
    </script>
@endsection
