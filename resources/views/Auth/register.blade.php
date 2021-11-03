@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center overflow-hidden">
        <div class="row justify-content-center align-items-center mt-4">
            <div class="col-md-4 p-4">
                <main class="form-signin">
                    <form class="justify-content-center" method="POST" action="/register">
                        @csrf
                        <img class="mb-3 mx-auto d-block" src={{ asset('images/logo.png') }} width="60">
                        <h1 class="h3 mb-3 fw-normal text-center fw-bold">E-DUPAK</h1>

                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control @error('nama')is-invalid @enderror" id="nama" name="nama"
                                value="{{ old('nama') }}" placeholder="nama">
                            <label for="nama">Nama</label>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control @error('nip')is-invalid @enderror" id="nip" name="nip"
                                value="{{ old('nip') }}" placeholder="nip">
                            <label for="nip">NIP</label>
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="password" class="form-control @error('password')is-invalid @enderror" id="password"
                                name="password" placeholder="Password">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="mb-3 w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                    </form>
                    <a href="/login">
                        <button class="mb-3 w-100 btn btn-lg btn-outline-primary">Masuk</button>
                    </a>

                </main>
            </div>
        </div>
    </div>
@endsection
