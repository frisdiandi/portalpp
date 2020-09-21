@extends('app',[
  'activePage' => 'home', 
])
@section('content')
 

  <section class="ftco-section">
            <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">Portal Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Informasi Seputar CPNSD</h2>
          </div>
        </div>
			<div class="container">
				<div class="row">
					<div class="col-12">
							
							  				<div class="table-responsive">
                      <table id="basic-datatables1" class="customers" width="100%">
							<thead>
							<tr>
								<th>No</th>
                          <th class="text-center" >Tanggal</th>
                          <th class="text-center">Judul</th>
                          <th class="text-center">Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($cpnsd as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
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
                                            <td>{{$data->judul}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/cpnsd')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
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
		</section>

@endsection