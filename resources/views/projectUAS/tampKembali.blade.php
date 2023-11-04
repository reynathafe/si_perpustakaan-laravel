@extends('projectUAS.index')

@section('title')
    Data Buku Kembali
@endsection

@section('konten')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Buku Kembali</h2>
                            <button type="button" class="btn btn-success btn-sm" style="float: right;"><a href="/Kembali/Tambah" style="color: white;">Tambah Buku Kembali</a></button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>ID</th>
                                                    <th>TGL KEMBALI</th>
                                                    <th>TERLAMBAT (Hari)</th>
                                                    <th>DENDA (Rp)</th>
                                                    <th>ID PINJAMAN</th>
                                                    <th>ID BUKU</th>
                                                    <th>ID PEGAWAI</th>
                                                    <th>TINDAKAN</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($kembali as $item)
                                                <tr style="text-align: center">
                                                    <td>{{ $item -> id_kmb }}</td>
                                                    <td>{{ $item -> tgl_kmb }}</td>
                                                    <td>{{ $item -> jml_telat }}</td>
                                                    <td>{{ $item -> jml_denda }}</td>
                                                    <td>{{ $item -> id_pj }}</td>
                                                    <td>{{ $item -> id_bk }}</td>
                                                    <td>{{ $item -> id_pg }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <a href="/Kembali/Edit/{{ $item -> id_kmb }}" style="color: white"><i class="fa fa-edit"></i></a></button>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <a href="/Kembali/Hapus/{{ $item -> id_kmb }}" style="color: white"><i class="fa fa-trash"></i></a></button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
