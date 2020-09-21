@extends('admin.app',[
  'activePage' => 'cpnsd', 
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
                      <div class="card-title">Data Info CPNSD </div>
                      <div class="card-tools">
                      <a href="/admin/cpnsd/tambah" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i> Tambah Data</a>
                      </div>                      
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="basic-datatables" class="customers" >
											<thead>
												<tr>
													<th>No</th>
                          <th>Judul</th>
                          <th>Tanggal</th>
                          <th>File</th>
													<th  class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($cpnsd as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <?php
                                                  $tgl = $data->tanggal;
                                                  $hari = date("D", strtotime($tgl));
                                                  switch($hari){
                                                    case 'Sun':
                                                      $hari_ini = "Minggu";
                                                    break;
                                                 
                                                    case 'Mon':     
                                                      $hari_ini = "Senin";
                                                    break;
                                                 
                                                    case 'Tue':
                                                      $hari_ini = "Selasa";
                                                    break;
                                                 
                                                    case 'Wed':
                                                      $hari_ini = "Rabu";
                                                    break;
                                                 
                                                    case 'Thu':
                                                      $hari_ini = "Kamis";
                                                    break;
                                                 
                                                    case 'Fri':
                                                      $hari_ini = "Jumat";
                                                    break;
                                                 
                                                    case 'Sat':
                                                      $hari_ini = "Sabtu";
                                                    break;
                                                    
                                                    default:
                                                      $hari_ini = "Tidak di ketahui";   
                                                    break;
                                                  }
                                                  $newdate = date("d-m-Y", strtotime($tgl));
                                                  $hasil = $hari_ini . ", " . $newdate;

                                              ?>
                                              <td>{{$hasil}}</td>
                                            <td><a href="{{url('public/cpnsd')}}/{{ $data->file}}" target="_blank"> {{ $data->file}}</a></td> 
               								 <td  class="text-center">
               								 	        <div class="form-button-action">

														<a href="/admin/cpnsd/edit/{{ $data->id }}" style="margin-left: 10px; color: blue;" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-edit"></i></a>
                            <a href="/admin/cpnsd/delete/{{ $data->id }}" style="margin-left: 10px; color: red;" data-toggle="tooltip" data-original-title="Hapus"onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fas fa-trash-alt"></i></a>
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
		
