
@extends('app',[
  'activePage' => 'home', 
])
@section('content')

    <section class="ftco-section">
            <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
             <span class="subheading">Portal Resmi Pemerintah Kota Padang Panjang</span>
            <h2 class="mb-4">Layanan Publik</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://baznas.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/baznas 1.2.jpg')}}" width="100%" height="150px">
              </a><p class="text-center">Baznas</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://berita.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/baznas 1.2.jpg')}}" width="100%" height="150px" >
              </a><p class="text-center">Berita</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://e-surau.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/esurau.jpg')}}" width="100%" height="150px">
              </a><p class="text-center">E-Surau</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://jdih.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/jdih.jpg')}}" width="100%"  height="150px" >
              </a><p class="text-center">JDIH</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="https://lakon.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/lakon2.jpg')}}" width="100%"  height="150px">
              </a><p class="text-center">Lakon</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://lapor-wali.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/lapor wali 1.4.jpg')}}" width="100%" height="150px" >
              </a><p class="text-center">Lapor Wali</p>
            </div>  
             <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://lpse.padangpanjang.go.id/eproc4">
                <img src="{{url('assetuser/images/lpse2.jpg')}}" width="100%"  height="150px">
              </a><p class="text-center">LPSE</p>
            </div>
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="https://paduko.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/paduko2.jpg')}}" width="100%" height="150px" >
              </a><p class="text-center">Paduko</p>
            </div>  
             <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://ppid.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/ppid 1.1.jpg')}}" width="100%" height="150px" >
              </a><p class="text-center">PPID</p>
            </div> 
            <div class="col-md-6 col-lg-2 mb-4 ftco-animate">
              <a href="http://tambo.padangpanjang.go.id/">
                <img src="{{url('assetuser/images/tambo.jpg')}}" width="100%" height="150px" >
              </a><p class="text-center">Tambo</p>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
