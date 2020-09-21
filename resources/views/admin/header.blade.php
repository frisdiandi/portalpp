<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Portal Resmi Pemerintahan Kota Padang Panjang</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{url('assetadmin/img/logopapa.png')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{url('assetadmin/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../../assetadmin/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<style>
.customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 0px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #007bff;
  color: white;
}
</style>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{url('assetadmin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assetadmin/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{url('assetadmin/css/demo.css')}}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="/admin/welcome" class="logo">
					<img src="{{url('assetadmin/img/pemko padang panjang.png')}}" style="width: 150px; height:40px;" alt="navbar brand" class="navbar-brand">&nbsp;<b></b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="https://cdn1.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/01-1User-2-512.png" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="https://cdn1.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/01-1User-2-512.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Administrator</h4>
												<p class="text-muted">admin</p>
											</div>
										</div>
									</li>
									<li>
										 <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/admin/changepassword">Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					
					<ul class="nav nav-primary">
						<li  class="nav-item @if ($activePage == 'dashboard') active @else  @endif">
							<a href="/admin/welcome"  aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data Master</h4>
						</li>
						@if (Auth::User()->level == 'superadmin')
						<li  class="nav-item @if ($activePage == 'users') active @else  @endif">
                            <a href="/admin/users">
                                <i class="fas fa-users"></i>
                                <p>Data Users</p>
                            </a>
                        </li>
                         @endif
						<li  class="nav-item @if ($activePage == 'sejarah' || $activePage == 'lambang' || $activePage == 'visimisi' || $activePage == 'geografis' ||  $activePage == 'pendidik') active @endif">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-school"></i>
								<p>Tentang Kota</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li class="@if ($activePage == 'sejarah') active @endif">
										<a href="/admin/sejarah">
											<span class="sub-item">Sejarah Kota</span>
										</a>
									</li>
									<li class="@if ($activePage == 'Lambang') active @endif">
										<a href="/admin/lambang">
											<span class="sub-item">Lambang dan Arti</span>
										</a>
									</li>
									<li class="@if ($activePage == 'geografis') active @endif">
										<a href="/admin/geografis">
											<span class="sub-item"> Geografis </span>
										</a>
									</li>
									<li class="@if ($activePage == 'visimisi') active @endif">
										<a href="/admin/visimisi">
											<span class="sub-item">Visi Misi</span>
										</a>
									</li>						
								</ul>
							</div>
						</li>
						<li  class="nav-item @if ($activePage == 'gap' || $activePage == 'gender' ) active @endif">
							<a data-toggle="collapse" href="#tablesis">
								<i class="fas fa-hdd"></i>
								<p>Bank Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tablesis">
								<ul class="nav nav-collapse">
									<li class="@if ($activePage == 'gap') active @endif">
										<a href="/admin/gap">
											<span class="sub-item">GAP GBS RKA</span>
										</a>
									</li>
									<li class="@if ($activePage == 'gender') active @endif">
										<a href="/admin/gender">
											<span class="sub-item">Gender Dan Anak</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li  class="nav-item @if ($activePage == 'poster' || $activePage == 'rencana ' || $activePage == 'pengelolaan ' || $activePage == 'akuntabilitas ' || $activePage == 'kegiatan ' ) active @endif">
							<a data-toggle="collapse" href="#table">
								<i class="fas fa-money-check-alt"></i>
								<p> Transparansi Anggaran</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="table">
								<ul class="nav nav-collapse">
									<li class="@if ($activePage == 'poster') active @endif">
										<a href="/admin/poster">
											<span class="sub-item">Poster Anggaran </span>
										</a>
									</li>
									<li class="@if ($activePage == 'rencana ') active @endif">
										<a href="/admin/rencana ">
											<span class="sub-item">Rencana Pembangunan</span>
										</a>
									</li>
									<li class="@if ($activePage == 'pengelolaan') active @endif">
										<a href="/admin/pengelolaan">
											<span class="sub-item">Pengelolaan Anggaran</span>
										</a>
									</li>
									<li class="@if ($activePage == 'akuntabilitas') active @endif">
										<a href="/admin/akuntabilitas">
											<span class="sub-item">Akuntabilitas</span>
										</a>
									</li>
									<li class="@if ($activePage == 'kegiatan') active @endif">
										<a href="/admin/kegiatan">
											<span class="sub-item">Kegiatan</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
						<li  class="nav-item @if ($activePage == 'sakip' || $activePage == 'spip' ) active @endif">
							<a data-toggle="collapse" href="#sis">
								<i class="fas fa-handshake"></i>
								<p>Layanan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sis">
								<ul class="nav nav-collapse">
									<li class="@if ($activePage == 'sakip') active @endif">
										<a href="/admin/sakip">
											<span class="sub-item">Sakip</span>
										</a>
									</li>
									<li class="@if ($activePage == 'spip') active @endif">
										<a href="/admin/spip">
											<span class="sub-item">SPIP</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li  class="nav-item @if ($activePage == 'cpnsd') active @else  @endif">
                            <a href="/admin/cpnsd">
                                <i class="fas fa-bullhorn"></i>
                                <p> Info CPNSD</p>
                            </a>
                        </li>

							<li class="nav-item @if ($activePage == 'album' || $activePage == 'video' ) active @endif">
							<a data-toggle="collapse" href="#test">
								<i class="fas fa-images"></i>
								<p>Galeri</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="test">
								<ul class="nav nav-collapse">
									<li class="@if ($activePage == 'video') active @endif">
										<a href="/admin/video">
											<span class="sub-item"> Video</span>
										</a>
									</li>
										<li class="@if ($activePage == 'grafis') active @endif">
										<a href="/admin/grafis">
											<span class="sub-item"> Info Grafis</span>
										</a>
									</li>
								</ul>
							</div>
						</li>		
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

	