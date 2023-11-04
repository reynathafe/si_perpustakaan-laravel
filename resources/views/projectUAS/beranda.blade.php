@extends('projectUAS.index')

@section('title')
    Beranda
@endsection

@section('konten')

<div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title"><br>
              <h2>Perpustakaan</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <br>
              <div class="row">
                @foreach ($gmb as $item)
                <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <center>
                        <img style="width: 50%; display: block;" src="{{ $item -> gambar }}" alt="image">
                      </center>
                      <div class="mask">
                        <p>{{ $item -> jd_bk }}</p>
                        <div class="tools tools-bottom">
                          <a href="/Buku"><i class="fa fa-eye"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="pagination justify-content-center" style="font-size: 8px;">
                {{ $gmb -> links() }}
              </div>
              <br>
              <p style="text-align: center; font-size: 13px">
                Perpustakaan menyimpan energi yang mendorong imajinasi. <br>
                Mereka membuka jendela ke dunia dan menginspirasi kita 
                untuk <br> mengeksplorasi dan mencapai, dan berkontribusi <br>
                untuk meningkatkan kualitas hidup kita. <br><br>
                - Sidney Sheldon -
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection