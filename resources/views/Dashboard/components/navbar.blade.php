    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <div class="dropdown">
          <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->nama }}
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
