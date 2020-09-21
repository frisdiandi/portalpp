
@extends('app',[
  'activePage' => 'home', 
])
@section('content')
 
    <section class="ftco-section">
            <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
             <span class="subheading">Portal Resmi Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Layanan Pemerintahan</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="https://e-office.padangpanjang.go.id/login">
                <img src="{{url('assetuser/images/e-office 1.3.jpg')}}" width="100%" height="150px">
              </a>
              <p class="text-center">E-Office</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="https://eplanning.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/e=lanning2.jpg')}}" width="100%" height="150px" >
              </a>
              <p class="text-center">E-Learning</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://palito.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/palito2.jpg')}}" width="100%" height="150px">
              </a>
              <p class="text-center">Palito</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://simak.padangpanjang.go.id/login">
                <img src="{{url('assetuser/images/simak 2.jpg')}}" width="100%"  height="150px" >
              </a>
              <p class="text-center">Simak</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://sipenari.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/sipenari2.jpg')}}" width="100%" height="150px" >
              </a>
              <p class="text-center" >Sipenari</p>  
            </div>
             <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://tpp.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/tpp2.jpg')}}" width="100%"  height="150px">
              </a>
              <p class="text-center">TPP</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://skm.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/skm2.jpg')}}" width="100%" height="150px" >
              </a>
              <p class="text-center" >SKM</p>
            </div> 
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="https://wbs.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/wbs2.jpg')}}" width="100%" height="150px" >
              </a>
              <p class="text-center">SKM</p>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
