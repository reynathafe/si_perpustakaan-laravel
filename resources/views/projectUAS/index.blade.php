<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="{{ asset('TempAdmin/docs/images/rb.png') }}" type="image/png">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('TempAdmin/images/favicon.ico') }}" type="image/ico" />

    <title>Perpustakaan | @yield('title')</title>

    <link href="{{ asset('TempAdmin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('TempAdmin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/build/css/custom.min.css') }}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{ asset('TempAdmin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/Perpustakaan" class="site_title" style="text-align: center; font-family: Arial, Helvetica, sans-serif"><img src="{{ asset('TempAdmin/docs/images/logo.png') }}" height="43px" width="43px"><span>Library</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <hr style="background-color : white; width : 210px">
              </div>
            </div>

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="/Beranda"><i class="fa fa-home"></i> Beranda </a></li>
                  <li><a><i class="fa fa-book"></i> Data Buku <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Buku">Buku</a></li>
                      <li><a href="/Pinjaman">Peminjaman Buku</a></li>
                      <li><a href="/Kembali">Pengembalian Buku</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Data Anggota <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/Anggota">Anggota</a></li>
                    </ul>
                  </li>
                  <li><a href="/Laporan"><i class="fa fa-clone"></i> Laporan </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-cog"></i>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="/Perpustakaan/Logout"><i class="fa fa-sign-out pull-right"></i>
                        @auth
                            {{ auth() -> user() -> name }}
                        @endauth
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
          </div>
          
        </div>

        @section('konten') @show

        <footer>
          <div class="pull-right">
            &copy; Library 2022 <a href="https://uty.ac.id/">Universitas Teknologi Yogyakarta</a>
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>
    
    <script src="{{ asset('TempAdmin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/skycons/skycons.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/DateJS/build/date.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('TempAdmin/build/js/custom.min.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>
  </body>
</html>
