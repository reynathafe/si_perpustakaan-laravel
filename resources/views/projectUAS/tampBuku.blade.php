@extends('projectUAS.index')

@section('title')
    Data Buku
@endsection

@section('konten')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Buku Perpustakaan</h2>
                            <button type="button" class="btn btn-success btn-sm" style="float: right;"><a href="/Buku/Tambah" style="color: white;">Tambah Buku</a></button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>ID</th>
                                                    <th>JUDUL</th>
                                                    <th>PENULIS</th>
                                                    <th>PENERBIT</th>
                                                    <th>TAHUN</th>
                                                    <th>JENIS</th>
                                                    <th>JUMLAH BUKU</th>
                                                    <th>NO. RAK</th>
                                                    <th>GAMBAR</th>
                                                    <th>TINDAKAN</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($buku as $item)
                                                <tr>
                                                    <td style="text-align: center">{{ $item -> id_bk }}</td>
                                                    <td>{{ $item -> jd_bk }}</td>
                                                    <td>{{ $item -> penulis_bk }}</td>
                                                    <td>{{ $item -> penerbit_bk }}</td>
                                                    <td style="text-align: center">{{ $item -> thn_bk }}</td>
                                                    <td>{{ $item -> jenis_bk }}</td>
                                                    <td style="text-align: center">{{ $item -> stok }}</td>
                                                    <td style="text-align: center">{{ $item -> no_rak }}</td>
                                                    <td><img src="{{ $item -> gambar }}" width="60px" height="auto"></td>
                                                    <td style="text-align: center">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <a href="/Buku/Edit/{{ $item -> id_bk }}" style="color: white"><i class="fa fa-edit"></i></a></button>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <a href="/Buku/Hapus/{{ $item -> id_bk }}" style="color: white"><i class="fa fa-trash"></i></a></button>
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
