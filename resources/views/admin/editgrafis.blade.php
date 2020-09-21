@extends('admin.app',[
  'activePage' => 'grafis', 
])
@section('content')
    <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                          <h2 class="text-white pb-2 fw-bold">Edit Data Info Grafis</h2>
                          <h5 class="text-white op-7 mb-2">Portal Resmi Pemerintahan Kota Padang Panjang</h5>
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
                                <div class="card-title">Table Info Grafis</div>
                            </div>
                                  <form role="form" action="/admin/grafis/update/{{$grafis->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="card-body">
                                        <div class="form-group">
                                                <label class="control-label mb-1">Descripsi</label>
                                                <textarea id="desc" name="desc" class="form-control" cols="5">{{$grafis->desc}}</textarea>
                                            </div>
                                             <style>
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
                                              <label class="control-label mb-1">Gambar</label>
                                              <input type="file"  name="gambar"  onchange="loadFile(event)" class="form-control-file"  placeholder="Masukkan gambar...." >
                                             <img src="{{url('public/grafis')}}/{{ $grafis->gambar}}" id="output" class="gambar" alt="" style="max-height:100px;max-width:150px;margin-top:10px" >

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
    </div>  
  <script src="{{url('assetadmin/ckeditor/ckeditor.js')}}"></script>
    <script>
            var desc = document.getElementById("desc");
                CKEDITOR.replace(desc,{
                language:'en-gb'
            });
            CKEDITOR.config.allowedContent = true;
    </script>
@endsection