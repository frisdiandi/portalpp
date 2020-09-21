
@extends('admin.app',[
  'activePage' => 'rencana', 
])
@section('content')
     <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                          <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                          <h5 class="text-white op-7 mb-2">Portal Resmi  Pemerintahan Kota Padang Panjang</h5>
                        </div>
                        <div class="ml-md-auto py-2 py-md-0">
                          <a href="../../" target="_blank" class="btn btn-white btn-border btn-round mr-2">Visit Homepage</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Data rencana Pembangunan</div>
                            </div>
                                  <form role="form" action="/admin/rencana/update/{{$rencana->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="card-body">
                                        <div class="form-group">
                                                <label class="control-label mb-1">Judul</label>
                                                <input id="judul" name="judul" type="text" class="form-control" value="{{$rencana->judul}}"  placeholder="Masukkan Judul...." >
                                            </div>
                                        <div class="form-group">
                                                <label class="control-label mb-1">Tahun</label>
                                                <input name="tahun" id="tahun" type="text" class="form-control" value="{{$rencana->tahun}}" placeholder="Masukkan Tahun...." >
                                            </div>
                                         <div class="form-group">
                                                <label class="control-label mb-1">Kategori</label>
                                                <input name="kategori" id="kategori" type="text" class="form-control" value="{{$rencana->kategori}}" placeholder="Masukkan Kategori...." >
                                            </div>
                                          <style>
                        
                          }
                        .gambar {
                            width: 150px;
                            height: 200px;
                        }
                    </style>
                    <script>
                        var loadFile = function (event) {
                            var reader = new FileReader();
                            reader.onload = function () {
                                var output = document.getElementById('output');
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(event.target.files[0]);
                        };

                    </script>

                                     <div class="form-group">
                                         <label for="exampleInputFile">File</label>
                                        <input type="file" name="file" onchange="loadFile(event)" class="form-control-file"
                                        id="exampleFormControlFile1">
                                        <embed src="{{url('public/rencana')}}/{{ $rencana->file}}" id="output" style="max-height:200px;max-width:200px;margin-top:10px;">
                                    </div>
                                              <br><div>
                                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                                    <i class="fa fa-plus"></i>&nbsp;
                                                    <span>Simpan</span>
                                                </button>
                                            </div>
                                           </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>              <!-- .card -->

@endsection 