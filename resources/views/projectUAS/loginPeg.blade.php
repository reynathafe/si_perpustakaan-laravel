<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="{{ asset('TempAdmin/docs/images/rb.png') }}" type="image/png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan | Masuk</title>

    <link href="{{ asset('TempAdmin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('TempAdmin/vendors/pnotify/dist/pnotify.css" rel="stylesheet') }}">
    <link href="{{ asset('TempAdmin/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet') }}">
    <link href="{{ asset('TempAdmin/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet') }}">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="/Cek" method="POST">
              {{ csrf_field() }}
              <h1>Login Perpustakaan</h1>
                @if (session()->has('loginError'))
                <div class="x_content bs-example-popovers">
                  <div class="alert alert-danger alert-dismissible " role="alert">
                    {{ session('loginError') }}
                  </div>
                </div>
                @endif
              <div>
                <input type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}"/>
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Kata Sandi"/>
              </div>
              <div>
                <input type="submit" value="Masuk" style="font-size: 12px" class="btn btn-default submit">
                <a class="reset_pass" href="/Perpustakaan/UbahSandi" style="text-decoration: none">Ubah kata sandi ?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  &copy; Library 2022 <a href="https://uty.ac.id/" style="text-decoration: none">Universitas Teknologi Yogyakarta</a>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
