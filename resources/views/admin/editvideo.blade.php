
@extends('admin.app',[
  'activePage' => 'video', 
])
@section('content')
    <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                          <h5 class="text-white op-7 mb-2"> Portal Resmi Pemerintahan Kota Padang Panjang</h5>
                        <ul class="breadcrumbs">
                        </ul>
                    </div>
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                  <form role="form" action="/admin/video/update/{{$video->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="card-body">
                                        
                                             <div class="form-group">
                                                <label class="control-label mb-1">Video</label>
                                                <input name="video" id="video" type="text" class="form-control"  value="{{$video->video}}" placeholder="Masukkan Posting By...." >
                                            </div> <br><div>
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