@extends('projectUAS.adm_Index')

@section('title')
    Data Pegawai
@endsection

@section('konten')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Pegawai</h2>
                        <button type="button" class="btn btn-info btn-sm" style="float: right;"><a href="/Perpustakaan/Pegawai" style="color: white;">Kembali</a></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @foreach ($kirim as $ed)
                        <form action="/Pegawai/Update/{{ $ed->id_pg }}" method="POST"><br>
                            {{ csrf_field() }}
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="id" type="hidden" value="{{ $ed->id_pg }}" required='required'/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="nama" type="text" value="{{ $ed->nama_peg }}" required='required'/></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="email" name="email" value="{{ $ed->email_pg }}" required='required'></div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="text" name="alamat" value="{{ $ed->alamat }}" required='required'></div>
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
  function hideshow(){
    var password = document.getElementById("password1");
    var slash = document.getElementById("slash");
    var eye = document.getElementById("eye");
    
    if(password.type === 'password'){
      password.type = "text";
      slash.style.display = "block";
      eye.style.display = "none";
    }
    else{
      password.type = "password";
      slash.style.display = "none";
      eye.style.display = "block";
    }

  }
</script>

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