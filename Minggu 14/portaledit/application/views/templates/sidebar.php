<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-pen-square"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PORTALEDIT</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('customer/dashboard_customer') ?>">
          <i class="fas fa-user"></i>
          <span>Info User</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
     
      <!-- Heading -->
      <div class="sidebar-heading">
        Category
      </div>

      <!-- Edit Gambar -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/gambar') ?>">
            <i class="fas fa-image"></i>
          <span>Gambar/Grafis</span></a>
      </li>

      <!-- Edit Video -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/video') ?>">
          <i class="fas fa-film"></i>
          <span>Video</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post" action="<?php echo base_url('welcome/search') ?>">
            <div class="input-group">
            <?php echo form_open('welcome/search') ?>
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name="keyword" aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            <?php echo form_close() ?>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>
            
            <ul class="na navbar-nav navbar-right mt-1">
              <?php if($this->session->userdata('username')) { ?>
                <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                <li class="ml-2"><?php echo anchor('auth/logout','Logout') ?></li>
              <?php } else { ?>
                  <li><?php echo anchor('auth/login','Login') ?></li>
              <?php } ?>
            </ul>

          </ul>

        </nav>
        <!-- End of Topbar -->