<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tugas Proyek</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('dist/img/AdminLTELogo.png')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">

            <!-- Untuk menyetting nama pada website nya terganti sesuai dengan username dan role yang di masukkan -->
            <?php 
              if($this->session->has_userdata('USERNAME')){
                echo $this->session->userdata('USERNAME');
                echo '-' . $this->session->userdata('ROLE');
              }
            ?>

          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('/index.php/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="fas fa-book-open"></i>
              <p>
                Kelola Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('/index.php/pesanan') ?>" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Daftar Pesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('/index.php/produk') ?>" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Daftar Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('/index.php/pembelian') ?>" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Daftar pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('/index.php/jenis_produk') ?>" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Daftar Jenis Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('/index.php/suplier') ?>" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Daftar Suplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('/index.php/users') ?>" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                  <p>Daftar Users</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('index.php/home')?>" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
