<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/img/Logo_NJ_4.jpg" alt="NJ" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Data Mahrom</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nama Pengurus</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/" class="nav-link {{ ($data['title'] === 'Admin') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/santri" class="nav-link {{ ($data['title'] === 'Santri') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Santri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/waliSantri" class="nav-link {{ ($data['title'] === 'Wali Santri') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Wali Santri
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kunjungan" class="nav-link {{ ($data['title'] === 'Setting Kunjungan') ? 'active' : '' }}">
              <i class="nav-icon fas fa-luggage-cart"></i>
              <p>
                Setting Kunjungan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
