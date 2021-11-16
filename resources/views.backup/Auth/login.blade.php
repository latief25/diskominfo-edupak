@extends("layouts.app")

@section('content')

<div class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img class="my-2 mx-auto d-block" src={{ asset('images/logo.png') }} width="60">
        <div class="font-weight-light fs-4">LOGIN</div>
        <div class="h1"><b>E-DUPAK</b></div>
      </div>
      <div class="card-body">
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close m-n1" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/login" method="POST">
          @csrf
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
          <div class="col-full mb-2">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </form>
        <div class="mt-4 mb-2">
          Belum punya akun ?&nbsp;<a href="/register" class="text-center">daftar di sini.</a>
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
