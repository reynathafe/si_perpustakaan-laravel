@extends('projectUAS.index')

@section('title')
    Data Buku
@endsection

@section('konten')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Buku <small>Perpustakaan</small></h2>
                        <button type="button" class="btn btn-info btn-sm" style="float: right;"><a href="/Buku" style="color: white;">Kembali</a></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @foreach ($kirim as $ed)
                        <form action="/Buku/Update/{{ $ed->id_bk }}" method="POST" enctype="multipart/form-data"><br>
                            {{ csrf_field() }}
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="id" type="hidden" value="{{ $ed->id_bk }}" required='required'/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Judul<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="judul" type="text" value="{{ $ed->jd_bk }}" required='required'/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Penulis<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="tulis" type="text" value="{{ $ed->penulis_bk }}" required='required'/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Penerbit<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="terbit" value="{{ $ed->penerbit_bk }}" required='required'/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Tahun<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="number" class='number' name="thn" value="{{ $ed->thn_bk }}" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Buku<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="jns" value="{{ $ed->jenis_bk }}" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Buku<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="number" class='number' name="jml" value="{{ $ed->stok }}" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">No.Rak<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="no_rak" value="{{ $ed->no_rak }}" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Gambar</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" name="foto"><br>
                                    <input type="hidden" name="pathfoto" value="{{ $ed->gambar }}"><br><br>
                                    <img src="{{ url('/' . $ed -> gambar) }}" width="60px" height="auto"><br><br>
        
                                </div>
                            </div>

                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <input type='submit' value="Simpan" class="btn btn-success btn-sm">
                                        <button type='reset' class="btn btn-danger btn-sm">Reset</button>
                                    </div>
                                </div>
                        </form>
                        @endforeach
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