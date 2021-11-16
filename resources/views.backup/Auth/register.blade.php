@extends("layouts.app")

@section('content')

<div class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img class="my-2 mx-auto d-block" src={{ asset('images/logo.png') }} width="60">
        <div class="font-weight-light fs-4">REGISTER</div>
        <div class="h1"><b>E-DUPAK</b></div>
      </div>
      <div class="card-body">
        @if (session()->has('registerError'))
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
          {{ session('registerError') }}
          <button type="button" class="btn-close m-n1" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/register" method="POST">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('nama')is-invalid @enderror" name="nama" value="{{old('nama')}}" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('nip')is-invalid @enderror" name="nip" value="{{old('nip')}}" placeholder="NIP">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-id-card" style="width: 14px;"></span>
              </div>
            </div>
            @error('nip')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password_confirmation')is-invalid @enderror" name="password_confirmation" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password_confirmation')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-full mb-2">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
        <div class="mb-4">
          Sudah punya akun ?&nbsp;<a href="/login" class="text-center">masuk di sini.</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()


@section('js')

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

@endsection()
