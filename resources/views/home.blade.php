
@extends('layouts.app', ['pageSlug' => 'home'], ['pageSlug' => 'maps'])
@section('content')
	<div class="header py-7 py-lg-8">
		<div class="container">
			<div class="header-body text-center mb-7">
				<div class="row justify-content-center">
					<div class="col-lg-5 col-md-6">
						<h1 class="text-white">{{ __('Controle de Frota') }}</h1>
						<p class="text-lead text-light">
							a partir daqui inicaiaremos o projeto
						</p>
					</div>
				</div>                
			</div>
		</div>
	</div>                
	 <!-- inicio do grafico-->
		 <div class="row">
			 <div class="col-12">
				 <div class="card card-chart">
					 <div class="card-header ">
						 <div class="row">
							 <div class="col-sm-6 text-left">
								 <h5 class="card-category">Total Shipments</h5>
								 <h2 class="card-title">Performance</h2>
							 </div>
							 <div class="col-sm-6">
								 <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
								 <label class="btn btn-sm btn-primary btn-simple active" id="0">
									 <input type="radio" name="options" checked>
									 <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
									 <span class="d-block d-sm-none">
										 <i class="tim-icons icon-single-02"></i>
									 </span>
								 </label>
								 <label class="btn btn-sm btn-primary btn-simple" id="1">
									 <input type="radio" class="d-none d-sm-none" name="options">
									 <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
									 <span class="d-block d-sm-none">
										 <i class="tim-icons icon-gift-2"></i>
									 </span>
								 </label>
								 <label class="btn btn-sm btn-primary btn-simple" id="2">
									 <input type="radio" class="d-none" name="options">
									 <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
									 <span class="d-block d-sm-none">
										 <i class="tim-icons icon-tap-02"></i>
									 </span>
								 </label>
								 </div>
							 </div>
						 </div>
					 </div>
					 <div class="card-body">
						 <div class="chart-area">
							 <canvas id="chartBig1"></canvas>
						 </div>
					 </div>
				 </div>
			 </div>
		 </div>
		 <div class="row">
			 <div class="col-lg-4">
				 <div class="card card-chart">
					 <div class="card-header">
						 <h5 class="card-category">Total Shipments</h5>
						 <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
					 </div>
					 <div class="card-body">
						 <div class="chart-area">
							 <canvas id="chartLinePurple"></canvas>
						 </div>
					 </div>
				 </div>
			 </div>
			</div>
<!-- final do grafico-->
<!-- inicio do mapa-->
			<div class='row'>
			<div class="col-12">
				 <div class="card card-chart">
					 <div class="card-header">
						 <h5 class="card-category">mapa</h5>
					 </div>
					 <div class="card-body">
						 <div class="map" id='map'>
							{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxj7BKEIPdqv7D-u6YJQ8S0m3s8kLVPkQ"></script>--}}
							
						 </div>
					 </div>
				 </div>

			</div>

		 <!-- final do mapa-->
	 
		  
@endsection
@push('js')
<!-- scripts dos graficos -->
	<script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
	<script>
		
		$(document).ready(function() {
		  demo.initDashboardPageCharts();
		}); 
	</script>

<!-- final script graficos -->

<!--script mapas -->

<!-- Place this tag in your head or just before your close body tag.

Coloque esta etiqueta na sua cabeça ou imediatamente antes da sua etiqueta corporal fechada -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxj7BKEIPdqv7D-u6YJQ8S0m3s8kLVPkQ"></script>
   {{-- <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
	</script> --}}
	
<!--script do google -->
<script>
var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 13
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }




</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxj7BKEIPdqv7D-u6YJQ8S0m3s8kLVPkQ&callback=initMap"> </script>

<!-- final script mapas -->



@endpush