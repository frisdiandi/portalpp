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
                                <p> Simpang Gunung, Padang Panjang   </p>
                                <br>
                                
                              </div>
                            <div class="row">
                              <div class="col-4"><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                </div>
                            </div>
                           </div> 
                           <div class="row">
                              <div class="col-8">
                                <h5>Bank BRI </h5><br>
                                <p> Kantor Cabang BRI (Jl. Jend. Sudirman No.220, Balai-Balai)  </p>
                                <p>Toko Besi Hidayah (Jalan Prof.Hamka, Bukit Surungan) </p>
                                <p> Samping Wisma Pangeran, Guguk Malintang   </p>
                                <p>  Depan Mesjid Nurul Iman (Jl. Hos. Cokroaminoto No.30, Silaing Atas)   </p>
                                <p>   Area Mifan (Silaing Bawah )      </p>
                                <p>   Kantor Unit BRI (Jl. Prof. M. Yamin No.51, Ps. Usang)      </p>
                                <p>   RM. Pak Datuk ( Jl. Sutan Syahrir, Silaing Bawah)      </p>
                                <p>   RSUD Padang Panjang ( Ganting)     </p>
                                <p>   Teras BRI Guguk Malintang      </p>
                                <p>   Ged. M.Syafei Jl. DR. Hamka, Ps. Baru, Padang Panjang Barat 27118      </p>
                                <p>   BRI Kota II (Pasar Baru)     </p>
                                <p>   AB Mart Supermarket (Jl. Adam Bb, Balai-Balai)     </p>
                                <p>   Paris Swalayan (Jl. Adam Bb, Balai-Balai)      </p>
                                <p>  Gerai ATM RS Yarsi ( Bukit Surungan)    </p>
                                <br>
                                
                              </div>
                            <div class="row">
                              <div class="col-4"><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.464036, 100.402506" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.458209, 100.398327" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.464270, 100.406056" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=    -0.4621338,100.357403,13" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4714854,100.3071998,12" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=    -0.4632469,100.3866664,17" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4658092,100.3792825,16" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4597713,100.4161952,17" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4582341,100.4035956,20" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=     -0.4634005,100.4007166,21" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=    -0.4668202,100.3954039,16" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                  
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=     -0.4653407,100.4026807,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  

                </div>
                            </div>
                           </div> 
                            <div class="row">
                              <div class="col-8">
                                <h5>Bank BNI</h5><br>
                                <p> RM. Sate Syukur (Jl. Sutan Syahrir No.252, Silaing Bawah)   </p>
                                <p> Kantor Cabang BNI (Jl. Soekarno Hatta, Bukit Surungan)   </p>
                                <p> Serambi Mekah (Jl. DR. Hamka, Ngalau)    </p>
                                <br>
                                
                              </div>
                            <div class="row">
                              <div class="col-4"><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                </div>
                            </div>
                           </div> 
                           <div class="row">
                              <div class="col-8">
                                <h5>Bank Mandiri</h5><br>
                                <p> RM. Sate Syukur (Jl. Sutan Syahrir No.252, Silaing Bawah)   </p>
                                <p>  Gerai ATM RS Yarsi ( Bukit Surungan)    </p>
                                <p>  Bank Mandiri KCP ( Balai-balai)   </p>
                                <br>
                                
                              </div>
                            <div class="row">
                              <div class="col-4"><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                </div>
                            </div>
                           </div> 
                           <div class="row">
                              <div class="col-8">
                                <h5>Bank Mandiri Syariah</h5><br>
                                <p>  Komplek ISI, Jalan Bundo Kandung, Guguk Malintang,     </p>
                                <p>   Jl. Soekarno Hatta, Ps. Usang,     </p>
                                <p>  Komplek Diniyah Putri ( Jl. Moh. Yamin No.375,)   </p>
                                <br>
                                
                              </div>
                            <div class="row">
                              <div class="col-4"><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>

                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.463149,100.399144" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
    
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.461875,100.390268" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 

                </div>
                            </div>
                           </div>
                           <div class="row">
                              <div class="col-8">
                                <h5> Bank Tabungan Pensiun Negara (BTPN)</h5><br>
                                <p>  Jalan Soekarno Hatta No.3E, Pasar Usang  </p>
                                
                                <br>
                                
                              </div>
                            <div class="row">
                              <div class="col-4"><br><br>
                                <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=-0.459911,100.418245" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p>
                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
                  <p><a href="https://www.google.com/maps?saddr=My+Location&daddr=   -0.4737957,100.423606,19" target="_blank"><button class="btn btn-sm btn-info">Cek Lokasi</button></a></p> 
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
                          <img src="{{url('assetuser/images/rsud.jpg')}}" width="100%"><br><br>
                          <h3 class="text-center"> SPBU Ngalau (14.271.536)</h3>
                          <p class="text-center">Ngalau, Padang Panjang Tim., Kota Padang Panjang, Sumatera Barat 27111
                          </p>
                          <p>Koordinat '-0.468599, 100.411180</p>

                          <br>                          
                        </div>
                    </div>
                </div>
            </div>


           

@endsection