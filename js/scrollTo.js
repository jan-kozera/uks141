$( document ).ready(function() {
	
	$(function() {
	  $('a[href*=\\#]:not([href=\\#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top -56
			}, 1000);
			return false;
		  }
		}
	  });
	});    
	
});

/*
<div id="portfolio" class="album text-muted" style="background-color:hsla(0,0%,90%,1.00); margin-top: 3rem; padding-top: 1rem;">
     
      <div class="container">
        
        <div class="col text-center" style="margin-bottom: 3rem;">
			 <h2 class="featurette-heading" >Nasze portfolio</h2>
		  </div>

        <div class="row">
			<div class="col-md-12">
				<a href="<?php echo THEME_URL; ?>img/mockups/1.jpg" data-lightbox="image-1">
					<div class="col-md-6 col-sm-6 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/myluggage-545-340.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>MyLuggage</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/2.jpg" data-lightbox="image-1">
					<div class="col-md-6 col-sm-6 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/filmtruck-545-340.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">

							<h2>Filmtruck</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/3.jpg" data-lightbox="image-1">
					<div class="col-md-12 col-sm-12 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/nals-1100-450.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Nals</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/4.jpg" data-lightbox="image-1">
					<div class="col-md-4 col-sm-4 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/dietcoachingacademy.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Dietcoachingcademy</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/5.jpg" data-lightbox="image-1">
					<div class="col-md-4 col-sm-4 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/sofa-30-350.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Sofa</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/6.jpg" data-lightbox="image-1">
					<div class="col-md-4 col-sm-4 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/ART-TRANSPORTER-370-350.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>ART Transporter</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/7.jpg" data-lightbox="image-1">
					<div class="col-md-6 col-sm-6 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/cheerscatering-545-340.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Cheerscatering</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/8.jpg" data-lightbox="image-1">
					<div class="col-md-6 col-sm-6 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/vrachitect.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Vrchitect</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/9.jpg" data-lightbox="image-1">
					<div class="col-md-12 col-sm-12 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/betahouse-1100-450.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Betahouse</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/10.jpg" data-lightbox="image-1">
					<div class="col-md-6 col-sm-6 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/zielonepranie-545.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Zielone pranie</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
				<a href="<?php echo THEME_URL; ?>img/mockups/11.jpg" data-lightbox="image-1">
					<div class="col-md-6 col-sm-6 col-xs-12 gallery-item">
						<div class="img" style="background: url('<?php echo THEME_URL; ?>img/portfolio/trimtab-575.jpg')">

						</div>
						<div class="overlay">

						</div>
						<div class="content">
							<h2>Trimtab</h2>
							<i class="fa fa-share"></i>
						</div>
					</div>
				</a>
			</div>
        </div>
    </div>      
    
	  </div>
	  
	  <div id="map" class="col-md-5 col-sm-5 col-xs-12" style="height:42vh">
							<script>
							  function initMap() {
								var uluru = {lat: 52.225248, lng: 21.0608293};
								var styledMapType = new google.maps.StyledMapType(
								[
								  {
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#f5f5f5"
									  }
									]
								  },
								  {
									"elementType": "labels",
									"stylers": [
									  {
										"saturation": -40
									  },
									  {
										"lightness": -60
									  }
									]
								  },
								  {
									"elementType": "labels.icon",
									"stylers": [
									  {
										"visibility": "off"
									  }
									]
								  },
								  {
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#616161"
									  }
									]
								  },
								  {
									"elementType": "labels.text.stroke",
									"stylers": [
									  {
										"color": "#f5f5f5"
									  }
									]
								  },
								  {
									"featureType": "administrative.land_parcel",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#bdbdbd"
									  }
									]
								  },
								  {
									"featureType": "poi",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#eeeeee"
									  }
									]
								  },
								  {
									"featureType": "poi",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#757575"
									  }
									]
								  },
								  {
									"featureType": "poi.park",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#e5e5e5"
									  }
									]
								  },
								  {
									"featureType": "poi.park",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#9e9e9e"
									  }
									]
								  },
								  {
									"featureType": "road",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#ffffff"
									  }
									]
								  },
								  {
									"featureType": "road.arterial",
									"elementType": "geometry.fill",
									"stylers": [
									  {
										"color": "#f9ba49"
									  }
									]
								  },
								  {
									"featureType": "road.arterial",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#757575"
									  }
									]
								  },
								  {
									"featureType": "road.highway",
									"stylers": [
									  {
										"color": "#f9ba49"
									  }
									]
								  },
								  {
									"featureType": "road.highway",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#dadada"
									  }
									]
								  },
								  {
									"featureType": "road.highway",
									"elementType": "geometry.fill",
									"stylers": [
									  {
										"color": "#f9ba49"
									  }
									]
								  },
								  {
									"featureType": "road.highway",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#616161"
									  }
									]
								  },
								  {
									"featureType": "road.local",
									"elementType": "geometry.fill",
									"stylers": [
									  {
										"color": "#f9ba49"
									  }
									]
								  },
								  {
									"featureType": "road.local",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#9e9e9e"
									  }
									]
								  },
								  {
									"featureType": "transit.line",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#e5e5e5"
									  }
									]
								  },
								  {
									"featureType": "transit.station",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#eeeeee"
									  }
									]
								  },
								  {
									"featureType": "water",
									"elementType": "geometry",
									"stylers": [
									  {
										"color": "#c9c9c9"
									  }
									]
								  },
								  {
									"featureType": "water",
									"elementType": "labels.text.fill",
									"stylers": [
									  {
										"color": "#9e9e9e"
									  }
									]
								  }
								]
								);
								var map = new google.maps.Map(document.getElementById('map'), {
								  zoom: 14,
								  center: uluru,
								 mapTypeControlOptions: {
									 mapTypeControlOptions: {
									mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
											'styled_map']
								  }}
								});
								map.mapTypes.set('styled_map', styledMapType);
        						map.setMapTypeId('styled_map');
								var marker = new google.maps.Marker({
								  position: uluru,
								  map: map
								});
							  }
							</script>
							<script async defer
								src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJkbGc0bjFlMcNmT-1KI4FDJgV9kcq8eI&callback=initMap">
							</script>
							
						</div>
*/