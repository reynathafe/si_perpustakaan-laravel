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
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="/UbahSandi" method="POST">
              {{ csrf_field() }}
              <h1>Ubah Kata Sandi</h1>
              <div>
                <input type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}"/>
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Kata Sandi Lama"/>
              </div>
              <div>
                <input type="password" class="form-control" name="password1" placeholder="Kata Sandi Baru"/>
              </div>
              <div>
                <input type="submit" value="Simpan" class="btn btn-default submit" style="font-size: 12px; margin-left:140px">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br/>

                <div>
                  <img src="{{ asset('TempAdmin/docs/images/logoPerpus.png') }}" height="40px" width="auto"><br><br>
                  &copy; Library 2021 <a href="https://pei.ac.id/" style="text-decoration: none">Politeknik Enjinering Indorama</a>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
