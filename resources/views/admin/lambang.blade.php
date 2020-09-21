
@extends('admin.app',[
  'activePage' => 'lambang', 
])
@section('content')
     <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                          <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                          <h5 class="text-white op-7 mb-2"> Portal Resmi Pemerintahan Kota Padang Panjang </h5>
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
                                <div class="card-title">Lambang dan Arti </div>
                            </div>
                                  <form role="form" action="/admin/lambang/updatelambang/{{$lambang->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="card-body">
                                            <div class="form-group">
                                            <textarea id="lambang" name="lambang" class="form-control" cols="5">{!!$lambang->lambang!!}</textarea>
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
            var lambang = document.getElementById("lambang");
                CKEDITOR.replace(lambang,{
                language:'en-gb'
            });
            CKEDITOR.config.allowedContent = true;
    </script>
@endsection