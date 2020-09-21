
@extends('app',[
  'activePage' => 'kota', 
])
@section('content')
 
    <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
			<div class="container consult-wrap">
				<div class="row d-flex align-items-stretch">
					<div class="col-md-12 wrap-about ftco-animate py-md-5 pl-md-5">
						<div class="heading-section mb-4">
							<h2 class="text-center text-primary">Pemerintah Kota Padang Panjang</h2>
						<div class="tabulation-2 mt-4">
							<ul class="nav nav-pills nav-fill d-md-flex d-block">
							  <li class="nav-item">
							    <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-book mr-2"></span>Sejarah</a>
							  </li>
							  <li class="nav-item px-lg-2">
							    <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-analytics mr-2"></span>Lambang</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-navigate mr-2"></span>Geografis</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link py-2" data-toggle="tab" href="#home4"><span class="ion-ios-briefcase mr-2"></span>Visi Misi</a>
							  </li>
							</ul>
							<div class="tab-content bg-light rounded mt-2">
							  <div class="tab-pane container p-0 active" id="home1">
							  	@foreach($sejarah as $data)
							  	<p>{!!$data->sejarah!!}</p>
							  	@endforeach
							  </div>
							  <div class="tab-pane container p-0 fade" id="home2">
							  	@foreach($lambang as $data)
							  	<p>{!!$data->lambang!!}</p>
							  	@endforeach
							  </div>
							  <div class="tab-pane container p-0 fade" id="home3">
							  	@foreach($geografis as $data)
							  	<p>{!!$data->geografis!!}</p>
							  	@endforeach
							  </div>
							  <div class="tab-pane container p-0 fade" id="home4">
							  	@foreach($visimisi as $data)
							  	<p>{!!$data->visimisi!!}</p>
							  	@endforeach
							  </div>
							</div>
						</div>
    				<div class="row mt-5">
	          </div>
					</div>
				</div>
			</div>
		</section>
@endsection
