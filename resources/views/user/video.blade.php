
@extends('app',[
  'activePage' => 'video', 
])
@section('content')
 
    <section class="ftco-section">
		        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	 <span class="subheading">Portal Resmi Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Kumpulan Video</h2>
          </div>
        </div>
		<div class="container">
			<div class="row">
 				@foreach($video as $data)			
	 				<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff border">
							<div class="img-wrap d-flex align-items-stretch">
							<embed width="100%" height="315"src="https://www.youtube.com/embed/{{$data->video}}">
							</div>
						</div>
					</div>
				@endforeach
			</div>
      {{ $video->render() }}
		</div>
	</section>

  
@endsection
