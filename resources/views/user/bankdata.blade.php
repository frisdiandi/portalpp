@extends('app',[
  'activePage' => 'home', 
])
@section('content')
 


  <section class="ftco-section">
            <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">Portal Resmi Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Informasi Publik</h2>
          </div>
        </div>
			<div class="container">
				<div class="row">
					<div class="col-8">
						<div class="row">
							<div class="tabulation-2 mt-4"  style="width: 100%">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-book mr-2"></span>GAB</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-analytics mr-2"></span>Gender</a>
							  </li>
							</ul>
							<div class="tab-content bg-light rounded mt-2"  style="width: 10[0%"> 
							  <div class="tab-pane container p-0 active" id="home1">
							  						<div class="table-responsive">
                      <table id="basic-datatables1" class="customers" width="100%">
							<thead>
							<tr>
								<th>No</th>
                          <th class="text-center">Judul</th>
                          <th class="text-center">Tahun</th>
                          <th class="text-center">Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($gap as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td class="text-center">{{$data->judul}}</td>
                                            <td class="text-center">{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/gap')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  						<div class="table-responsive">
                      <table id="basic-datatables2" class="customers" width="100%" >
							<thead>
							<tr>
								<th>No</th>
                          <th>Judul</th>
                          <th>Tahun</th>
                          <th>Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($gender as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/gender')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
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
					<div class="col-4">
		          		<div id="gpr-kominfo-widget-container"></div>
					</div>
				</div>
			</div>
		</section>

@endsection