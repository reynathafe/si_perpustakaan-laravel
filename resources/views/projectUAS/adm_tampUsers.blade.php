@extends('projectUAS.adm_Index')

@section('title')
    Data Users
@endsection

@section('konten')
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Users</h2>
                            <button type="button" class="btn btn-success btn-sm" style="float: right;"><a href="/Users/Tambah" style="color: white;">Tambah Users</a></button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr style="text-align: center">
                                                    <th>ID</th>
                                                    <th>NAMA</th>
                                                    <th>EMAIL</th>
                                                    <th>KATA SANDI</th>
                                                    <th>TINDAKAN</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($pgw1 as $item)
                                                <tr>
                                                    <td style="text-align: center">{{ $item -> id }}</td>
                                                    <td>{{ $item -> name }}</td>
                                                    <td style="text-align: center">{{ $item -> email }}</td>
                                                    <td style="text-align: center"> <small>{{ $item -> password }}</small> </td>
                                                    <td style="text-align: center">
                                                        <button type="button" class="btn btn-primary btn-sm">
                                                            <a href="/Users/Edit/{{ $item -> id }}" style="color: white"><i class="fa fa-edit"></i></a></button>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                            <a href="/Users/Hapus/{{ $item -> id }}" style="color: white"><i class="fa fa-trash"></i></a></button>
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
