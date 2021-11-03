@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column min-vh-100 justify-content-center overflow-hidden">
        <div class="row justify-content-center align-items-center mt-4">
            <div class="col-md-4 p-4">
                <main class="form-signin">
                    <form class="justify-content-center">
                        <img class="mb-3 mx-auto d-block" src={{ asset('images/logo.png') }} width="60">
                        <h1 class="h3 mb-3 fw-normal text-center fw-bold">E-DUPAK</h1>

                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingInput" placeholder="nip">
                            <label for="floatingInput">NIP</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <button class="mb-3 w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        <p class="fs-6">Belum punya akun ? daftar <a href="/register">disini</a></p>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
