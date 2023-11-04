@extends('projectUAS.index')

@section('title')
    Laporan
@endsection

@section('konten')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Laporan <small>Perpustakaan</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead style="text-align: center">
                                                <tr>
                                                    <th>NO.</th>
                                                    <th>NIM</th>
                                                    <th>NAMA</th>
                                                    <th>PROGRAM STUDI</th>
                                                    <th>TANGGAL PINJAM</th>
                                                    <th>JUDUL BUKU</th>
                                                    <th>PEGAWAI</th>
                                                </tr>
                                            </thead>

                                            <tbody style="text-align: center">
                                                @foreach ($data as $k => $item)
                                                    <tr>
                                                        <td>{{ $k + 1 }}</td>
                                                        <td>{{ $item->nim }}</td>
                                                        <td style="text-align: left">{{ $item->nama_ang }}</td>
                                                        <td>{{ $item->prodi }}</td>
                                                        <td>{{ $item->tgl_pj }}</td>
                                                        <td>{{ $item->jd_bk }}</td>
                                                        <td style="text-align: left">{{ $item->nama_peg }}</td>
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
