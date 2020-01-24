

<body>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
           
          </ul>
          <div class="search-element">
            
            <div class="search-backdrop"></div>
             
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
           
            <div class="d-sm-none d-lg-inline-block">Admin</div></a>
            
            </div>
          </li>
        </ul>
      </nav>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
         
        </form>
        <ul class="navbar-nav navbar-right">
          
            
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">APP RENTAL</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AR</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="<?= base_url('admin/index') ?>">
                  <i class="fas fa-fire"></i>
                <span>Dashboard</span>
                </a>
              </li>
              <li class="menu-header">Main Menu</li>
              <li><a class="nav-link" href="<?= base_url('admin/mobil') ?>">
                <i class="far fa-square"></i>
                 <span>Data Mobil </span>
                </a>
              </li>
             

              <li><a class="nav-link" href="<?= base_url('admin/penyewa') ?>">
                <i class="far fa-square"></i>
                 <span>Data Penyewa</span>
                </a>
              </li>
        
              <li><a class="nav-link" href="<?= base_url('admin/transaksi') ?>">
                <i class="fas fa-pencil-ruler"></i> 
                <span>Data Transaksi</span>
              </a>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?= base_url('admin/laporan_pdf_data_mobil') ?>">Data Mobil</a></li>
                  <li><a class="nav-link" href="<?= base_url('admin/laporan_pdf_data_penyewa') ?>">Data Penyewa</a></li>
                
                </ul>
              </li>

              <li><a class="nav-link" href="<?= base_url('admin/logout') ?>">
                <i class="fa fa-sign-out-alt"></i>
                 <span>Logout</span>
                </a>
              </li>
            </ul>

        </aside>
      </div>