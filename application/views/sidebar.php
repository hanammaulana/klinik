<!-- <div class="sidenav sidebar-expand-lg navbar-dark bg-dark scrolling-sidebar">
  <ul class="navbar-nav">
    <li class="nav-item" style="margin-top:25px;">
      <a class="nav-link" href="<?php echo site_url('Welcome/pasienbaru'); ?>"><i data-feather="home" id="icon"></i>Pendafataran Pasien</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Welcome/datadokter'); ?>"><i data-feather="briefcase" id="icon"></i>Input Data Dokter</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Welcome/daftarperiksa'); ?>"><i data-feather="layers" id="icon"></i>Pendaftaran Pemeriksaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Welcome/hasilperiksa'); ?>"><i data-feather="dollar-sign" id="icon"></i>Input Hasil Pemeriksaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url(); ?>"><i data-feather="package" id="icon"></i>Looput</a>
    </li>
  </ul>

</div> -->

<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Klinik Konja !</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="<?php echo base_url(); ?>assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo $this->session->userdata('nama'); ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li>
            <a href="<?php echo site_url('Welcome'); ?>"><i class="fa fa-home"></i> Home </a>
          </li>
          <li>
            <a href="<?php echo site_url('Welcome/pasienbaru'); ?>"><i class="fa fa-edit"></i> Pendaftaran Pasien Baru </a>
          </li>
          <li>
            <a href="<?php echo site_url('Welcome/datadokter'); ?>"><i class="fa fa-desktop"></i> Input Data Dokter </a>
          </li>
          <li>
            <a href="<?php echo site_url('Welcome/daftarperiksa'); ?>"><i class="fa fa-table"></i> Pendaftaran Pemeriksaan </a>
          </li>
          <li>
            <a href="<?php echo site_url('Welcome/hasilperiksa'); ?>"><i class="fa fa-bar-chart-o"></i> Input Hasil Pemeriksaan </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">

      <a data-toggle="tooltip" data-placement="top" title="Logout" href=" <?php echo site_url('LoginController/Logout'); ?>">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>