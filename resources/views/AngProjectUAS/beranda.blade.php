@extends('AngProjectUAS.index')

@section('content')
    <!-- Keterangan lokasi Halaman -->
    <div class="block-header">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <h2><i class="fa fa-angle-left"></i> Beranda</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Library/Beranda"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Beranda</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <!-- Konten -->
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <img src="{{ asset('TempAnggota/html/assets/images/bg_perpus.jpg') }}" height="auto" width="100%"
                        class="img-responsive">
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="body project_report">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>JUDUL BUKU</th>
                                                <th>JUMLAH BUKU</th>
                                                <th>PENERBIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($buku1 as $item)
                                            <tr>
                                                <td class="project-title">
                                                    <h6>{{ $item -> jd_bk }}</h6>
                                                    <small>{{ $item -> penulis_bk }}, {{ $item -> thn_bk }}</small>
                                                </td>
                                                <td>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="48"
                                                            aria-valuemin="0" aria-valuemax="100" style="width: {{ $item -> stok }}%;"></div>
                                                    </div>
                                                    <small>Ketersediaan buku sebanyak {{ $item -> stok }}</small>
                                                </td>
                                                <td style="text-align: center">{{ $item -> penerbit_bk }}</td>
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
@endsection
