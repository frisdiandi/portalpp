
@extends('app',[
  'activePage' => 'grafis', 
])
@section('content')
 
  
    <section class="ftco-section">
		        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Portal Resmi Pemerintahan Kota Padang Panjang</span>
            <h2 class="mb-4">Info Grafis</h2>
          </div>
        </div>
		<div class="container">
			<div class="row">
 				@foreach($grafis as $data)			
	 				<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff border">
							<div class="img-wrap d-flex align-items-stretch">
								<a href="{{url('public/grafis')}}/{{$data->gambar}}" class="gallery image-popup">
									<img class="img align-self-stretch" src="{{url('public/grafis')}}/{{$data->gambar}}" height="100%">
								</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
        {{ $grafis->render() }}
		</div>
	</section>

  
@endsection
