@extends('projectUAS.index')

@section('title')
    Data Anggota
@endsection

@section('konten')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Anggota <small>Perpustakaan</small></h2>
                        <button type="button" class="btn btn-info btn-sm" style="float: right;"><a href="/Anggota" style="color: white;">Kembali</a></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="/Anggota/Simpan" method="POST"><br>
                            {{ csrf_field() }}
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">NIM<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="nim" type="number" required='required'/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="nama" type="text" required='required'/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Program Studi<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="prodi" class="form-control" required='required'>
                                        <option>Choose..</option>
                                        <option>Teknik Informatika</option>
                                        <option>Teknik Elektronik</option>
                                        <option>Teknik Sipil</option>
                                        <option>Sistem Informasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Angkatan<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="angk" class="form-control" required>
                                        <option value="">Choose..</option>
                                        @for ($i = 2013; $i <= 2021; $i++)
                                            <option value={{ $i }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <input type='submit' value="Simpan" class="btn btn-success btn-sm">
                                        <button type='reset' class="btn btn-danger btn-sm">Reset</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('TempAdmin/vendors/validator/multifield.js') }}"></script>
    <script src="{{ asset('TempAdmin/vendors/validator/validator.js') }}"></script>

    <!-- Javascript functions	-->
    <script>
      // initialize a validator instance from the "FormValidator" constructor.
      // A "<form>" element is optionally passed as an argument, but is not a must
      var validator = new FormValidator({
          "events": ['blur', 'input', 'change']
      }, document.forms[0]);
      // on form "submit" event
      document.forms[0].onsubmit = function(e) {
          var submit = true,
              validatorResult = validator.checkAll(this);
          console.log(validatorResult);
          return !!validatorResult.valid;
      };
      // on form "reset" event
      document.forms[0].onreset = function(e) {
          validator.reset();
      };
      // stuff related ONLY for this demo page:
      $('.toggleValidationTooltips').change(function() {
          validator.settings.alerts = !this.checked;
          if (this.checked)
              $('form .alert').remove();
      }).prop('checked', false);

  </script>
@endsection
