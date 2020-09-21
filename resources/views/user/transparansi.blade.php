@extends('app',[
  'activePage' => 'home', 
])
@section('content')
 

  <section class="ftco-section">
            <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
             <span class="subheading">Portal Resmi Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Transparansi Anggaran</h2>
          </div>
        </div>
			<div class="container">
				<div class="row">
					<div class="col-12">
							<div class="tabulation-2 mt-4"  style="width: 100%">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item px-lg-2">
							    <a class="nav-link active py-2 mb-3 mb-3" data-toggle="tab" href="#home1"><span class="ion-ios-photos mr-2"></span>Poster Anggaran</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home2"><span class="ion-ios-list-box mr-2"></span>Rencana Pembangunan</a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home3"><span class="ion-ios-cash mr-2"></span>Pengelolaan Anggaran</a>
							  </li>
							   <li class="nav-item px-lg-2">
							    <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home4"><span class="ion-ios-stats mr-2"></span>Akuntabilitas</a>
							  </li>
							  <!-- <li class="nav-item px-lg-2">-->
							  <!--  <a class="nav-link py-2 mb-3" data-toggle="tab" href="#home5"><span class="ion-ios-paper mr-2"></span>Kegiatan</a>-->
							  <!--</li>-->
							</ul>
							<div class="tab-content bg-light rounded mt-2"  style="width: 10[0%"> 
							  <div class="tab-pane container p-0 active" id="home1">
							  						<div class="table-responsive">
                      <table id="basic-datatables1" class="customers" width="100%">
							<thead>
							<tr>
								<th>No</th>
                          <th class="text-center">Judul</th>
                          <th >Tahun</th>
                          <th class="text-center">Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($poster as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td class="text-center">{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/poster')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
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
                          <th class="text-center">Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($rencana as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/rencana')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>
							   <div class="tab-pane container p-0 fade" id="home3">
							  						<div class="table-responsive">
                      <table id="basic-datatables3" class="customers" width="100%" >
							<thead>
							<tr>
								<th>No</th>
                          <th>Judul</th>
                          <th>Tahun</th>
                          <th>OPD</th>
                          <th>Kategori</th>
                          <th>Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($pengelolaan as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td>{{$data->skpd}}</td>
                                            <td>{{$data->kategori}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/pengelolaan')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>

							   <div class="tab-pane container p-0 fade" id="home4">
							  						<div class="table-responsive">
                      <table id="basic-datatables4" class="customers" width="100%" >
							<thead>
							<tr>
								<th>No</th>
                          <th>Judul</th>
                          <th>Tahun</th>
                          <th>OPD</th>
                          <th>Download</th>
												</tr>
											</thead>
											<tbody>
									      <?php $no=0;?>
                                        @foreach($akuntabilitas as $data)
                                        <?php $no++?>
                                        <tr>
                                            <td>{{$no}}</td>                                             
                                            <td>{{$data->judul}}</td>
                                            <td>{{$data->tahun}}</td>
                                            <td>{{$data->skpd}}</td>
                                            <td  class="text-center">
               									<a href="{{url('public/akuntabilitas')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
							  </div>

							<!--   <div class="tab-pane container p-0 fade" id="home5">-->
							<!--  						<div class="table-responsive">-->
       <!--               <table id="basic-datatables5" class="customers" width="100%" >-->
							<!--<thead>-->
							<!--<tr>-->
							<!--	<th>No</th>-->
       <!--                   <th>Judul</th>-->
       <!--                   <th>Tahun</th>-->
       <!--                   <th>OPD</th>-->
       <!--                   <th>Download</th>-->
							<!--					</tr>-->
							<!--				</thead>-->
							<!--				<tbody>-->
							<!--		      <?php $no=0;?>-->
       <!--                                 @foreach($kegiatan as $data)-->
       <!--                                 <?php $no++?>-->
       <!--                                 <tr>-->
       <!--                                     <td>{{$no}}</td>                                             -->
       <!--                                     <td>{{$data->judul}}</td>-->
       <!--                                     <td>{{$data->tahun}}</td>-->
       <!--                                     <td>{{$data->opd}}</td>-->
       <!--                                     <td  class="text-center">-->
       <!--        									<a href="{{url('public/kegiatan')}}/{{ $data->file}}" target="_blank"><i class="icon-download"></i></a> 	    -->
							<!--				</td>-->
							<!--				</tr>-->
							<!--				@endforeach-->
							<!--				</tbody>-->
							<!--			</table>-->
							<!--		</div>-->
							<!--  </div>-->

							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

@endsection