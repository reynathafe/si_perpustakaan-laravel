@extends('projectUAS.index')

@section('title')
    Data Buku Kembali
@endsection

@section('konten')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Buku Kembali <small>Perpustakaan</small></h2>
                        <button type="button" class="btn btn-info btn-sm" style="float: right;"><a href="/Kembali" style="color: white;">Kembali</a></button>
                        <div class="clearfix"></div>
                        <p style="font-size: smaller">*Terlambat 1 hari denda sebesar Rp 5.000,-</p>
                    </div>
                    <div class="x_content">
                        <form action="/Kembali/Simpan" method="POST"><br>
                            {{ csrf_field() }}
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">ID<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="id_kmb" type="text" required='required'/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Kembali<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="kmb" type="date" required='required'/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Terlambat (Hari)</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="jml" type="number"/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Id Pinjaman<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="id_pj" class="form-control" required='required'>
                                        <option value="">Choose..</option>
                                        @foreach ($pinjam as $item1)
                                            <option value="{{ $item1 -> id_pj }}">{{ $item1 -> id_pj}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Judul Buku<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="id_bk" class="form-control" required='required'>
                                        <option value="">Choose..</option>
                                        @foreach ($buku as $item2)
                                            <option value="{{ $item2 -> id_bk }}">{{ $item2 -> jd_bk}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Pegawai<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="id_pg" class="form-control" required='required'>
                                        <option value="">Choose..</option>
                                        @foreach ($peg as $item2)
                                            <option value="{{ $item2 -> id_pg }}">{{ $item2 -> nama_peg}}</option>
                                        @endforeach
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