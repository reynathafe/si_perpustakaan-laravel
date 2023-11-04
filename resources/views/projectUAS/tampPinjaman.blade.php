@extends('projectUAS.index')

@section('title')
    Data Pinjaman Buku
@endsection

@section('konten')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Pinjaman Buku</h2>
                            <button type="button" class="btn btn-success btn-sm" style="float: right;"><a href="/Pinjaman/Tambah" style="color: white;">Tambah Pinjaman Buku</a></button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>ID</th>
                                                    <th>TGL PINJAMAN</th>
                                                    <th>TGL KEMBALI</th>
                                                    <th>NIM</th>
                                                    <th>ID PEGAWAI</th>
                                                    <th>ID BUKU</th>
                                                    <th>TINDAKAN</th>
                                                </tr>
                                            </thead>

                                            <tbody style="text-align: center">
                                                @foreach ($pinjaman as $item)
                                                <tr>
                                                    <td>{{ $item -> id_pj  }}</td>
                                                    <td>{{ $item -> tgl_pj }}</td>
                                                    <td>{{ $item -> tgl_kmb }}</td>
                                                    <td>{{ $item -> nim }}</td>
                                                    <td>{{ $item -> id_pg }}</td>
                                                    <td>{{ $item -> id_bk }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <a href="/Pinjaman/Edit/{{ $item -> id_pj }}" style="color: white"><i class="fa fa-edit"></i></a></button>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <a href="/Pinjaman/Hapus/{{ $item -> id_pj }}" style="color: white"><i class="fa fa-trash"></i></a></button>
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
