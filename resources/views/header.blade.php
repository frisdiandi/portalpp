<!DOCTYPE html
<html lang="en">
  <head>
    <title>Portal Resmi Pemerintahan Kota Padang Panjang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/7/76/Padang_Panjang_coa.png">

    <link rel="stylesheet" href="{{url('assetuser/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assetuser/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{url('assetuser/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assetuser/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assetuser/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('assetuser/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('assetuser/css/ionicons.min.css')}}">
    
    <link rel="stylesheet" href="{{url('assetuser/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('assetuser/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('assetuser/css/style.css')}}">
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
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
  background-color: #033975;
  color: white;
}
</style>

	<script>
	    $(document).ready(function(){
	        $("#myModal").modal('show');
	    });
	</script>	
  </head>
  <body>
	 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="/"><img src="{{url('assetuser/images/padangpanjang.png')}}" style="width: 20%;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item @if ($activePage == 'home') active @else  @endif"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item @if ($activePage == 'kota') active @else  @endif"><a href="/kota" class="nav-link">Kota</a></li>
	        	<li class="nav-item @if ($activePage == 'transparansi') active @else  @endif"><a href="/transparansi" class="nav-link">Transparansi</a></li>
	        	<li class="nav-item @if ($activePage == 'grafis') active @else  @endif"><a href="/grafis" class="nav-link">Infografis</a></li>
	        	<li class="nav-item @if ($activePage == 'video') active @else  @endif"><a href="/video" class="nav-link">Video</a></li>
	        	<li class="nav-item @if ($activePage == 'cpnsd') active @else  @endif"><a href="/cpnsd" class="nav-link">CPNSD</a></li>
	         	<li class="nav-item"><a href="/kontak" class="nav-link">Kontak</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->