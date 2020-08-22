<?php /* Template name: Kontakt */ ?>
<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content single-content col-lg-12">
				<div class="row justify-content-center">
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
								<p><a href="tel:690513060">690 513 060</a><br>
								<a href="tel:518238080">518 238 080</a></p>
							</div>
							<div class="col-md-4 cicons text-center">
								<img src="<?php echo THEME_URL; ?>img/k3.png" alt="" class="img-fluid">
								<h3>Email:</h3>
								<p><a href="mailto:klub@uks141.pl">klub@uks141.pl</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div id="contact" class="form-container">
                    	<fieldset>
	                    <div id="message"></div>
	                      <form method="post" action="<?php echo THEME_URL; ?>js/contact-form-contact.php" name="c-contactform" id="c-contactform">
							<div class="form-group">
                                <input name="c_name" id="c_name" type="text" value="" placeholder="Imię" class="form-control" required>
							</div>
							<div class="form-group">
                                <input name="c_email" id="c_email" type="text" value="" placeholder="E-mail" class="form-control" required>
							</div>
							<div class="form-group">
                                <input name="c_phone" id="c_phone" type="text" value="" placeholder="Telefon" class="form-control" required>
							</div>
							<div class="form-group">
                                <input name="c_topic" id="c_topic" type="text" value="" placeholder="Temat" class="form-control" required>
							</div>
							<div class="form-gropu">
									<textarea name="c_comments" id="c_comments" class="form-control" placeholder="Wiadomość" required></textarea>
							</div>
							<div class="form-group no-margin">
								<label style="font-weight: normal; float:left;">
									<input id="rodo" type="checkbox" name="rodo" style="width: auto; float: left; margin-right: 5px; margin-bottom: 0; margin-top: 4px;" value="Wyrażam zgodę na przetwarzanie moich danych osobowych moich przez administratora danych osobowych UKS 141 Warszawa, zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych), w celu możliwości kontaktu ze strony UKS 141 Warszawa. Oświadczam, że zostałem poinformowany o uprawnieniu dostępu do treści swoich danych, a także ich poprawiania oraz zgłoszenia żądania zaprzestania ich przetwarzania. Oświadczam, że zostałem poinformowany o dobrowolności podania danych i niniejszą zgodę składam dobrowolnie." required>
								</label>
								<div class="rodo">
									<p>Zapoznałem się z 
										<span>informacją o administratorze i przetwarzaniu danych.</span>
									</p>
									<div class="rodo-more">
										<p>Wyrażam zgodę na przetwarzanie moich danych osobowych moich przez administratora danych osobowych UKS 141 Warszawa, zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych), w celu możliwości kontaktu ze strony UKS 141 Warszawa.</p><p>Oświadczam, że zostałem poinformowany o uprawnieniu dostępu do treści swoich danych, a także ich poprawiania oraz zgłoszenia żądania zaprzestania ich przetwarzania. Oświadczam, że zostałem poinformowany o dobrowolności podania danych i niniejszą zgodę składam dobrowolnie.</p>
										<span class="x">x</span>
									</div>
								</div>
							</div>
							<div class="form-group">
	                            <button class="btn btn-primary" type="submit" id="cf-submit" name="submit">Wyślij</button>
							</div>
						</form>
						</fieldset>
					</div><!-- /.form-container -->
					</div>
					<div class="col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2442.6902034351183!2d21.092477116005476!3d52.249010464028636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecdea17ba968d%3A0x5a4329e0e1a90419!2sUKS%20141%20Warszawa!5e0!3m2!1sen!2spl!4v1594376119351!5m2!1sen!2spl" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>