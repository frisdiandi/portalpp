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
                          <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
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
               <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Data Info Grafis</div>
                      <div class="card-tools">
                        <a href="/admin/grafis/tambah" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
                      </div>                      
                    </div>
                  </div>
                             <div class="card-body">
                    <div class="table-responsive">
                      <table id="basic-datatables" class="customers" >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th width="40%">Descripsi</th>
                            <th>Gambar</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php $no=0; ?>
                            @foreach($grafis as $data)
                                <?php $no++; ?>
                            <tr>
                                <td> {{ $no }} </td>
                                <td> {!! $data->desc !!} </td>
                                <td class="text-center"> <img src="{{url('public/grafis')}}/{{ $data->gambar}}" type=""
                            style="height:200px;width:300px;margin-top:10px;margin-bottom: 10px;"> </td>
                                <td class="text-center">
                                    <div class="form-button-action">
                              
                              <a href="/admin/grafis/edit/{{ $data->id }}"
                                data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit"><i class="fa fa-edit"></i>
                              </a>
                              <a href="/admin/grafis/delete/{{ $data->id }}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
                              
                              </a>
                            </div>
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
@endsection  