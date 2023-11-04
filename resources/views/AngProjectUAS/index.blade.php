!doctype html>
<html lang="en">

<head>
<title>Library</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">


<link rel="stylesheet" href="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">

<link rel="icon" href="{{ asset('TempAnggota/html/assets/images/logoLibrary.png') }}" type="image/icon">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/assets/vendor/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/h-menu/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/h-menu/assets/css/color_skins.css') }}">
<link rel="stylesheet" href="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
</head>
<body class="theme-orange">

<!-- Loading -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('TempAnggota/html/assets/images/logoPerpus.png') }}" width="120" height="auto" alt="Lucid"></div>
        <p>Mohon tunggu sebentar..</p>        
    </div>
</div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                              
            </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="/Library/Beranda" class="icon-menu d-none d-sm-block"><i class="icon-home"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="main-content">
        <div class="container">
            @section('content') @show
        </div>
    </div>
</div>


<script src="{{ asset('TempAnggota/html/h-menu/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('TempAnggota/html/h-menu/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('TempAnggota/html/assets/vendor/toastr/toastr.js') }}"></script>
<script src="{{ asset('TempAnggota/html/h-menu/assets/bundles/chartist.bundle.js') }}"></script>
<script src="{{ asset('TempAnggota/html/h-menu/assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('TempAnggota/html/h-menu/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('TempAnggota/html/h-menu/assets/js/index.js') }}"></script>


<script src="{{ asset('TempAnggota/html/h-menu/assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('TempAnggota/html/assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('TempAnggota/html/h-menu/assets/js/pages/tables/jquery-datatable.js') }}"></script>

<script src="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('TempAnggota/html/assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

</body>
</html>