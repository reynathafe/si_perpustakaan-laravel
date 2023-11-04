@extends('projectUAS.adm_Index')

@section('title')
    Data Anggota
@endsection

@section('konten')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Anggota Perpustakaan</h2>
                            <button type="button" class="btn btn-success btn-sm" style="float: right;"><a href="/Perpustakaan/Anggota/Tambah" style="color: white;">Tambah Anggota</a></button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>NIM</th>
                                                    <th>NAMA</th>
                                                    <th>PROGRAM STUDI</th>
                                                    <th>ANGKATAN</th>
                                                    <th>TINDAKAN</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($anggota as $item)
                                                <tr>
                                                    <td style="text-align: center">{{ $item -> nim }}</td>
                                                    <td>{{ $item -> nama_ang }}</td>
                                                    <td style="text-align: center">{{ $item -> prodi }}</td>
                                                    <td style="text-align: center">{{ $item -> angkatan }}</td>
                                                    <td style="text-align: center">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <a href="/Perpustakaan/Anggota/Edit/{{ $item -> nim }}" style="color: white"><i class="fa fa-edit"></i></a></button>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <a href="/Perpustakaan/Anggota/Hapus/{{ $item -> nim }}" style="color: white"><i class="fa fa-trash"></i></a></button>
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
