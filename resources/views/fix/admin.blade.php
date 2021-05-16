<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('style/vendor/bootstrap/css/bootstrap.css') }}">
 
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
  

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <div >
    <a href="{{url('/logout')}}" align="right" class="nav-link">
      <i class="nav-icon fas fa-th">
      <p>Logout</p>        
      </i>
    </a>
    </div>
    {{auth()->user()->email}}

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/wisata" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/wisata" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Wisata
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="/kuliner" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kuliner
               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/cinderamata" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Toko Cinderamata
               
              
              </p>
            </a>
        
          </li>
          <li class="nav-item has-treeview">
            <a href="/akomodasi" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Akomodasi
               
              </p>
            </a>
           
          </li>
          <li class="nav-item has-treeview">
            <a href="/informasi" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Informasi
               
              </p>
            </a>
           
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
   <div class="col-md-12">
    <!-- Main content -->
   
      
       
          @yield('container')
        <!-- ./col -->
        
  </div>
  <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte/js/demo.js') }}"></script>
 <script type="text/javascript" src="{{ asset('style/vendor/bootstrap/js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('style/vendor/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
