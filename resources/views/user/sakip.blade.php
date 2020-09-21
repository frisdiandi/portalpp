@extends('app',[
  'activePage' => 'home', 
])
@section('content')

  <section class="ftco-section">
            <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	 <span class="subheading">Portal Resmi Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Sistem Akuntabilitas Kinerja Instansi Pemerintah Publik</h2>
          </div>
        </div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="tabulation-2 mt-4"  style="width: 100%">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item px-lg-2">
							    <a class="nav-link active py-2 mb-3 mb-3" data-toggle="tab" href="#home1"><span class="ion-ios-photos mr-2"></span>BAPPEDA</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home2"><span class="ion-ios-list-box mr-2"></span>BKPSDM </a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home3"><span class="ion-ios-cash mr-2"></span>BPBD</a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home4"><span class="ion-ios-stats mr-2"></span>BPKD</a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home5"><span class="ion-ios-paper mr-2"></span>Cabar</a>
							  </li>
							 <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home6"><span class="ion-ios-paper mr-2"></span>Catim</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home7"><span class="ion-ios-paper mr-2"></span>Dinsos</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home8"><span class="ion-ios-paper mr-2"></span>Disdikpora</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home9"><span class="ion-ios-paper mr-2"></span>Disdukcapil</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home10"><span class="ion-ios-paper mr-2"></span>Dishub</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home11"><span class="ion-ios-paper mr-2"></span>Diskominfo</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home12"><span class="ion-ios-paper mr-2"></span>Dispangtan</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home13"><span class="ion-ios-paper mr-2"></span>Dispar</a>
							  </li>

							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home14"><span class="ion-ios-paper mr-2"></span>Disperkim-LH</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home15"><span class="ion-ios-paper mr-2"></span>Dispupr</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home16"><span class="ion-ios-paper mr-2"></span>Dinas Kesehatan</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home17"><span class="ion-ios-paper mr-2"></span>DPK</a>
							  </li>

							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home18"><span class="ion-ios-paper mr-2"></span>DPK-UKM</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home19"><span class="ion-ios-paper mr-2"></span>DPMPTSP</a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home20"><span class="ion-ios-paper mr-2"></span>DPRD</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home21"><span class="ion-ios-paper mr-2"></span>Inspektorat</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home22"><span class="ion-ios-paper mr-2"></span>KOTA</a>
							  </li>

							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home23"><span class="ion-ios-paper mr-2"></span>RSUD</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home24"><span class="ion-ios-paper mr-2"></span>Satpol-PP</a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home25"><span class="ion-ios-paper mr-2"></span>Setdako</a>
							  </li>
							</ul>
							<div class="tab-content bg-light rounded mt-2"  style="width: 10[0%"> 
							  <div class="tab-pane container p-0 active" id="home1">
							  	<h3>BAPPEDA</h3><br>
							 		 <div class="table-responsive">
                      <table id="basic-datatables1" class="customers" width="100%">
							<thead>
							<tr>
								<th>No</th>
                          <th >Judul</th>
                          <th >Tahun</th>
                          <th class="text-center">Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($bappeda as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td class="text-center">{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  	<h3>BKPSDM</h3><br>
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
                                        @foreach($bkpsdm as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>
							   <div class="tab-pane container p-0 fade" id="home3">
							   	<h3>BPBD- Kesbangpol</h3><br>
							  						<div class="table-responsive">
                      <table id="basic-datatables3" class="customers" width="100%" >
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
                                        @foreach($bpbd as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>

							   <div class="tab-pane container p-0 fade" id="home4">
							   	<h3>Badan Keuangan Daerah</h3><br>
							  						<div class="table-responsive">
                      <table id="basic-datatables4" class="customers" width="100%" >
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
                                        @foreach($bpkd as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>

							   <div class="tab-pane container p-0 fade" id="home5">
							   	<h3>Kecamatan Padang Panjang Barat</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables5" class="customers" width="100%" >
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
                                        @foreach($cabar as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td>{{$data->instansi}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  <div class="tab-pane container p-0 fade" id="home6">
							   	<h3>Kecamatan Padang Panjang Timur</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables6" class="customers" width="100%" >
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
                                        @foreach($catim as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td>{{$data->instansi}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  <div class="tab-pane container p-0 fade" id="home7">
							   	<h3>Dinas Sosial</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables7" class="customers" width="100%" >
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
                                        @foreach($dinsos as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td>{{$data->instansi}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							   <div class="tab-pane container p-0 fade" id="home8">
							   	<h3>Dinas Pendidikan Pemuda dan Olahraga</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables8" class="customers" width="100%" >
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
                                        @foreach($disdikpora as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							   <div class="tab-pane container p-0 fade" id="home9">
							   	<h3>Dinas Kependudukan dan Catatan Sipil </h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables9" class="customers" width="100%" >
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
                                        @foreach($disdukcapil as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  	<div class="tab-pane container p-0 fade" id="home10">
							   	<h3>Dinas Perhubungan </h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables10" class="customers" width="100%" >
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
                                        @foreach($dishub as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  	<div class="tab-pane container p-0 fade" id="home11">
							   	<h3>Dinas Komunikasi dan Informatika </h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables11" class="customers" width="100%" >
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
                                        @foreach($diskominfo as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  	<div class="tab-pane container p-0 fade" id="home12">
							   	<h3>Dinas Pangan dan Pertanian </h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables12" class="customers" width="100%" >
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
                                        @foreach($dispangtan as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>


							<div class="tab-pane container p-0 fade" id="home13">
							   	<h3>Dinas Pariwisata </h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables13" class="customers" width="100%" >
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
                                        @foreach($dispar as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>


							<div class="tab-pane container p-0 fade" id="home14">
							   	<h3>Dinas Perumahan,Permukiman dan Lingkungan Hidup </h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables14" class="customers" width="100%" >
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
                                        @foreach($disperkim as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  <div class="tab-pane container p-0 fade" id="home15">
							   	<h3>Dinas Pekerjaan Umum dan Penataan Ruang</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables15" class="customers" width="100%" >
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
                                        @foreach($dispupr as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							<div class="tab-pane container p-0 fade" id="home16">
							   	<h3>Dinas Kesehatan</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables16" class="customers" width="100%" >
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
                                        @foreach($dkk as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							<div class="tab-pane container p-0 fade" id="home17">
							   	<h3>Dinas Perpustakaan dan Kearsipan</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables17" class="customers" width="100%" >
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
                                        @foreach($dpk as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>


							<div class="tab-pane container p-0 fade" id="home18">
							   	<h3>Dinas Perdagkop dan UKM</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables18" class="customers" width="100%" >
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
                                        @foreach($dpkukm as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>


							<div class="tab-pane container p-0 fade" id="home19">
							   	<h3>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables19" class="customers" width="100%" >
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
                                        @foreach($dpmptsp as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							<div class="tab-pane container p-0 fade" id="home20">
							   	<h3>DPRD</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables20" class="customers" width="100%" >
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
                                        @foreach($dprd as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  <div class="tab-pane container p-0 fade" id="home21">
							   	<h3>Inspektorat</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables21" class="customers" width="100%" >
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
                                        @foreach($inspektorat as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  <div class="tab-pane container p-0 fade" id="home22">
							   	<h3>Kota</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables22" class="customers" width="100%" >
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
                                        @foreach($kota as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							 <div class="tab-pane container p-0 fade" id="home23">
							   	<h3>Rumah Sakit Umum Daerah</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables23" class="customers" width="100%" >
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
                                        @foreach($rsud as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							   <div class="tab-pane container p-0 fade" id="home24">
							   	<h3>Satpol PP Damkar</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables24" class="customers" width="100%" >
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
                                        @foreach($polpp as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
										</tr>
										@endforeach
								</tbody>
										</table>
									</div>
							  </div>

							  <div class="tab-pane container p-0 fade" id="home25">
							   	<h3>Setdako</h3><br>
							  		<div class="table-responsive">
                      					<table id="basic-datatables25" class="customers" width="100%" >
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
                                        @foreach($setdako as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/sakip')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
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
		</section>

@endsection