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
            @if(auth()->user()->role === "admin")
            <li class="nav-item">
              <a href="/daftar-pegawai" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Daftar Pegawai</p>
              </a>
            </li>
            @endif
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
