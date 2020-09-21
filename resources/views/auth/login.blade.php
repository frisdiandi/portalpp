<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login Portal Resmi Pemerintahan Kota Padang Panjang</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{url('assetuser/img/favicon.png')}}" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{url('assetadmin/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assetadmin/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{url('assetadmin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assetadmin/css/atlantis.min.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{url('assetadmin/css/demo.css')}}">
</head>
<body>
    <div class="wrapper overlay-sidebar">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
                <a href="/users" class="logo">
                    <img src="{{url('assetadmin/img/logopapa.png')}}" style="width: 50px; height:40px;" alt="navbar brand" class="navbar-brand">
                </a>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="../" class="btn btn-white btn-border btn-round mr-2">Visit Homepage</a>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <div class="main-panel" style="margin-top: 75px;">
            <div class="content">
                    <div class="row" style="margin-left: 100px; margin-right: 100px;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Silahkan Login Ke Halaman Admin Portal Resmi Pemerintahab Kota  Padang Panjang</div>
                                    </div>
                                </div>
                        <form method="POST" action="{{ route('login') }}"> 
                        @csrf         
                            <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Username <span class="required">*</span></label>
                                                    <div>
                                                        <input type="text" name="username" autofocus="autofocus" class="form-control" placeholder="Masukkan Username..." required value="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password <span class="required">*</span></label>
                                                    <div>
                                                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password..." required value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-primary" name="Submit" >Login</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        Copyright &copy; <?php echo date('Y') ?> Dinas Kominfo Kota Padang Panjang</div>              
                </div>
            </footer>
        </div>
    </div>
    <script src="{{url('assetadmin/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{url('assetadmin/js/core/popper.min.js')}}"></script>
    <script src="{{url('assetadmin/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{url('assetadmin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{url('assetadmin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{url('assetadmin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


    <!-- Chart JS -->
    <script src="{{url('assetadmin/js/plugin/chart.js')}}/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{url('assetadmin/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{url('assetadmin/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{url('assetadmin/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{url('assetadmin/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{url('assetadmin/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{url('assetadmin/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Atlantis JS -->
    <script src="{{url('assetadmin/js/atlantis.min.js')}}"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{url('assetadmin/js/setting-demo.js')}}"></script>
    <script src="{{url('assetadmin/js/demo.js')}}"></script>
</body>
</html>