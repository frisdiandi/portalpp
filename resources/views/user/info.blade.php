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
				<div class="row" style="margin-left: 50px;margin-right: 50px;">
					<div class="col-12">
						<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 ftco-animate">
						<div class="img-wrap d-flex align-items-stretch">
							<a href="" data-toggle="modal" data-target="#notelp">
				            	<img src="{{url('assetuser/images/layanan1.jpg')}}" width="100%" height="150px">
				            </a>
						</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<span class="position">No Penting</span>
							</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 ftco-animate">
						<div class="img-wrap d-flex align-items-stretch">
							<a href="" data-toggle="modal" data-target="#rumah-sakit">
				            	<img src="{{url('assetuser/images/layanan3.jpg')}}" width="100%" height="150px">
				            </a>
						</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<span class="position">Rumah Sakit</span>
							</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 ftco-animate">
						<div class="img-wrap d-flex align-items-stretch">
							<a href="" data-toggle="modal" data-target="#atm">
				            	<img src="{{url('assetuser/images/layanan5.jpg')}}" width="100%" height="150px">
				            </a>
						</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<span class="position">ATM</span>
							</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 ftco-animate">
						<div class="img-wrap d-flex align-items-stretch">
							<a href="" data-toggle="modal" data-target="#spbu">
				            	<img src="{{url('assetuser/images/layanan2.jpg')}}" width="100%" height="150px">
				            </a>
						</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<span class="position">SPBU</span>
							</div>
					</div>
					<div class="col-md-6 col-lg-4 mb-4 ftco-animate">
						<div class="img-wrap d-flex align-items-stretch">
              <a href="" data-toggle="modal" data-target="#wifi">
				            	<img src="{{url('assetuser/images/layanan4 (2).jpg')}}" width="100%" height="150px">
				            </a>
						</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<span class="position">WIFI</span>
							</div>
					</div>
					<div class="col-md-6 col-lg-3 mb-4 ftco-animate">
						<div class="img-wrap d-flex align-items-stretch">
              <a href="" data-toggle="modal" data-target="#rute">
				            	<img src="{{url('assetuser/images/layanan6.jpg')}}" width="100%" height="150px">
				            </a>
						</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<span class="position">Rute</span>
							</div>
					</div>
				</div>
				</div>
				</div>
			</div>
		</section>

			<div class="modal fade" id="notelp" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Daftar No Telepon Penting</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                                   
                        </div>
                    </div>
                </div>
            </div>

              <div class="modal fade" id="rumah-sakit" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Rumah Sakit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{url('assetuser/images/rsud.jpg')}}" width="100%"><br><br>
                          <h3 class="text-center">RSUD PADANG PANJANG. NO TELP (0752) 82046</h3>
                          <p class="text-center">Jl. Tabek Gadang, Ganting, Padang Panjang Timur, Ganting, Padang Panjang Tim., Kota Padang Panjang, Sumatera Barat 27111</p>

                          <br><br>
             <img src="{{url('assetuser/images/yarsi.jpg')}}" style="width: 100%; height: 450px;"><br><br>
                          <h3 class="text-center">RS YARSI  - NO TELP : (0752) 82127</h3>
                          <p class="text-center">Jalan Soekarno Hatta No.17, Bukit Surungan</p>                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="wifi" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Wifi Gratis </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                                   
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="rute" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Rute </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                                   
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="atm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Daftar Sebaran ATM Di Kota Padang Panjang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                           		<div class="col-8">
                           			<h5>Bank Nagari</h5><br>
                           			<p>Area RSUD Kota Padang Panjang, Ganting</p>
                           			<p>Kantor Cab Bank Nagari (Jl. Prof. M. Yamin, Ps. Usang) </p>
                           			<p>Balaikota , Jl. Prof. M. Yamin No.89, Silaing Atas  </p>
                           			<p>Simpang Gunung, Padang Panjang 	 </p>
                                <p>Pasar Baru, Padang Panjang   </p>
                           			<br>

                                <h5>Bank BRI </h5><br>
                                <p>Kantor Cab Bank Rakyat Indonesia (Jend Sudirman) </p>
                                <p>Area RSUD Kota Padang Panjang, Ganting</p>
                                <p>Bank BRI Unit Pasar Usang </p>
                                <p>Bank BRI Unit Pasar</p>
                                <p>Rumah Sakit Ibnu Sina </p>
                                <p>Gedung Pertemuan M.Syafei</p>
                                <p>Area Mesjid Nurul Iman Silaing Atas</p>
                                <p>Area AB Mart</p>
                                <p>Area Paris Swalayan</p>
                                <br>

                                <h5>Bank BNI</h5><br>
                                <p>Bank BNI KCP Padang Panjang</p>
                                <p>Pesantren Serambi Mekah</p>
                                <p>Area RSUD Kota Padang Panjang</p>
                                <p>Area Sate Mak Syukur</p><br>

                                <h5>Bank Mandiri Syariah</h5><br>
                                <p>BSM KCP Padang Panjang</p>
                                <p>Area Dinniyah Putri</p><br>

                                <h5>Bank Mandiri</h5><br>
                                <p>Area Sate Mak Syukur</p><br>
                                                       			
                           		</div>
                           	<div class="row">
                           		<div class="col-4"><br><br>
                           			<p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                           			<p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
		
  									             <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

  									             <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                                <br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                                 <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                 <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                 <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                                <br><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                                 <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                                 <br><br><br>
                                 <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                                 <br><br>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                                 
 
								</div>
                           	</div>
                           </div>                  
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="spbu" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Daftar SPBU di Kota Padang Panjang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{url('assetuser/images/spbu-ngalau.jpg')}}" width="100%"><br><br>
                          <h3 class="text-center"> SPBU Ngalau (14.271.536)</h3>
                          <p class="text-center">Ngalau, Padang Panjang Tim., Kota Padang Panjang, Sumatera Barat 27111
                          </p>
                          <p>Koordinat '-0.468599, 100.411180</p>

                          <br> 
                           <img src="{{url('assetuser/images/spbu-ganting.jpg')}}" width="100%"><br><br>
                          <h3 class="text-center"> SPBU Ganting</h3>
                          <p class="text-center">Jalan Raya Padang Panjang- Bukit Tinggi, Panyalaian, Sepuluh Koto, Panyalaian, Kec. Sepuluh Koto, Kabupaten Tanah Datar, Sumatera Barat 27211
                          </p>
                          <p>Koordinat '-0.468599, 100.411180</p>

                        </div>
                    </div>
                </div>
            </div>


           

@endsection