<section id="partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12 partners">
				<h2>Nasi Partnerzy</h2>
				<ul>
					<li><img class="img-fluid" src="<?php echo THEME_URL; ?>img/p1.png" alt=""></li>
					<li><img class="img-fluid" src="<?php echo THEME_URL; ?>img/p2.png" alt=""></li>
					<li><img class="img-fluid" src="<?php echo THEME_URL; ?>img/p3.png" alt=""></li>
					<li><img class="img-fluid" src="<?php echo THEME_URL; ?>img/p52.png" alt=""></li>
					<li><img class="img-fluid" src="<?php echo THEME_URL; ?>img/p7.png" alt=""></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section id="contact">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-7 left-info">
				<div class="map">
					<div id="map"></div>
					<script>
						function initMap() {
							var ulica = {lat: 52.2485329, lng: 21.095098000000007};

							  var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 15,
								center: ulica,
								disableDefaultUI: true,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								rotateControl: false,
								fullscreenControl: false
							  });

							var marker = new google.maps.Marker({
							  position: ulica,
							  map: map
							});
						}
					</script>
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqVvJxDsHpIIcgF9cmo8ScEX-nI8ZlXeI&callback=initMap"
					type="text/javascript"></script>

				</div>
				<div class="data">
					<h2>Kontakt</h2>
					<ul>
						<li>Szaserów 117, Warszawa</li>
						<li>690 513 060, 518 238 080</li>
						<li><a href="mailto:klub@uks141.pl">klub@uks141.pl</a></li>
					</ul>
					<p>Znajdziesz nas też na: 
						<ul class="social">
							<li><a target="_blank" href="https://www.facebook.com/Uks141Warszawa/"><img class="img-fluid" src="<?php echo THEME_URL; ?>img/fb.png" alt=""></a></li>
							<li><a target="_blank" href="https://www.youtube.com/channel/UCXSgFFyMkndZePAPj1KN--g"><img class="img-fluid" src="<?php echo THEME_URL; ?>img/yt.png" alt=""></a></li>
							<li><a target="_blank" href="https://www.instagram.com/uks141/"><img class="img-fluid" src="<?php echo THEME_URL; ?>img/ig.png" alt=""></a></li>
						</ul>
					</p>
				</div>
			</div>

<!--
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-4 cicons text-center">
						<img src="<?php echo THEME_URL; ?>img/k1.png" alt="" class="img-fluid">
						<h3>Adres</h3>
						<p>Szaserów 117<br>
							04 - 349 Warszawa</p>
					</div>
					<div class="col-md-4 cicons text-center">
						<img src="<?php echo THEME_URL; ?>img/k2.png" alt="" class="img-fluid">
						<h3>Nr telefonu</h3>
						<p><a href="tel:518238080">518 238 080</a> <br>
						<a href="tel:690513060">690 513 060</a></p>
					</div>
					<div class="col-md-4 cicons text-center">
						<img src="<?php echo THEME_URL; ?>img/k3.png" alt="" class="img-fluid">
						<h3>Email:</h3>
						<p><a href="mailto:klub@uks141.pl">klub@uks141.pl</a></p>
					</div>
				</div>
			</div>
-->
		</div>
	</div>
</section>