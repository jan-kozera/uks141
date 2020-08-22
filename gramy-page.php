<?php /* Template name: Gdzie gramy */ ?>
<?php get_header(); ?>
<?php the_post(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content single-content col-lg-12">
				<div class="row justify-content-center">
					<div class="col-md-12 single-content">
						<h2><strong>GDZIE GRAMY?</strong></h2>
					</div>
					<div class="col-md-4">
						<ul class="points">
							<li>
								<h3>Orlik w Parku im. Józefa Polińskiego</h3>
								<p><i class="fa fa-map-marker"></i> ul. Szaserów / Garwolińska</p>
								<a href="javascript:void(0)" onClick="stplace()">Przybliż na mapie</a>
							</li>
							<li>
								<h3>Szkoła Podstawowa nr 141</h3>
								<p><i class="fa fa-map-marker"></i> ul. Szaserów 117</p>
								<a href="javascript:void(0)" onClick="ndplace()">Przybliż na mapie</a>
							</li>
							<li>
								<h3>Szkoła Podstawowa nr 246</h3>
								<p><i class="fa fa-map-marker"></i> ul. Białowieska 22</p>
								<a href="javascript:void(0)" onClick="rdplace()">Przybliż na mapie</a>
							</li>
							<li>
								<h3>Zespół Szkół Gastronomiczno-Hotelarskich</h3>
								<p><i class="fa fa-map-marker"></i> ul. Majdańska 30/36</p>
								<a href="javascript:void(0)" onClick="thplace()">Przybliż na mapie</a>
							</li>
							<li>
								<h3>Szkoła Podstawowa nr 60</h3>
								<p><i class="fa fa-map-marker"></i> ul. Zbaraska 3</p>
								<a href="javascript:void(0)" onClick="fthplace() ">Przybliż na mapie</a>
							</li>
							<li>
								<h3>Strefa Sportu Rembertów</h3>
								<p><i class="fa fa-map-marker"></i> ul. Strażacka 121</p>
								<a href="javascript:void(0)" onClick="sthplace()">Przybliż na mapie</a>
							</li>
							<li>
								<h3>OPP Jordanek</h3>
								<p><i class="fa fa-map-marker"></i> ul. Kwatery Głównej 11</p>
								<a href="javascript:void(0)" onClick="sethplace()">Przybliż na mapie</a>
							</li>
						</ul>
					</div>
					<div class="col-md-8">
						<?php the_content(); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>