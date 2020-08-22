<?php /* Template name: Nabór */ ?>
<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content single-content col-lg-8">
				<div id="contact" class="form-container col-md-12">
                    	<fieldset>
	                    <div id="message"></div>
	                      <form method="post" action="<?php echo THEME_URL; ?>js/contact-form.php" name="contactform" id="contactform">
							<div class="form-group">
								<input name="par_name" id="par_name" type="text" value="" placeholder="Imię i nazwisko opiekuna" class="form-control" required>
							</div>
							<div class="form-group">
                                <input name="phone" id="phone" type="text" value="" placeholder="Telefon opiekuna" class="form-control" required>
							</div>
							<div class="form-group">
                                <input name="email" id="email" type="text" value="" placeholder="E-mail opiekuna" class="form-control" required>
							</div>
							<div class="form-group">
                                <input name="name" id="name" type="text" value="" placeholder="Imię i nazwisko dziecka" class="form-control" required>
							</div>
							  <div class="form-group">
							  	<select name="grupa" id="grupa" class="form-control" required>
								  <option value="Grupa treningowa" disabled selected>Grupa</option>
								  <option value="2004">2004</option>
								  <option value="2005">2005</option>
								  <option value="2006">2006</option>
								  <option value="2007">2007</option>
								  <option value="2008">2008</option>
								  <option value="2009">2009</option>
								  <option value="2010">2010</option>
								  <option value="2011">2011</option>
								  <option value="2012">2012</option>
								  <option value="2013">2013</option>
								  <option value="2014">2014</option>
								  <option value="2015">2015</option>
								  </select>
							  </div>
							  <div class="form-group">
								<input name="club" id="club" type="text" value="" placeholder="Poprzedni klub" class="form-control">
							</div>
							<div class="form-group no-margin">
								<label style="font-weight: normal; float:left;">
									<input id="rodo" type="checkbox" name="rodo" style="width: auto; float: left; margin-right: 5px; margin-bottom: 0; margin-top: 4px;" value="Wyrażam zgodę na przetwarzanie danych osobowych moich, tj. Opiekuna oraz Uczestnika, wobec którego przysługuje mi władza rodzicielska, przez administratora danych osobowych UKS 141 Warszawa, zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych), w celach uczestnictwa Uczestnika lub Opiekuna w UKS 141 Warszawa, działaniach marketingowych podejmowanych przez administratora danych samodzielnie lub we współpracy z innymi podmiotami. Oświadczam, że zostałem poinformowany o uprawnieniu dostępu do treści danych swoich oraz Uczestnika, a także ich poprawiania oraz zgłoszenia żądania zaprzestania ich przetwarzania. Oświadczam, że zostałem poinformowany o dobrowolności podania danych i niniejszą zgodę składam dobrowolnie." required>
								</label>
								<div class="rodo">
									<p>Zapoznałem się z 
										<span>informacją o administratorze i przetwarzaniu danych.</span>
									</p>
									<div class="rodo-more">
										<p>Wyrażam zgodę na przetwarzanie danych osobowych moich, tj. Opiekuna oraz Uczestnika, wobec którego przysługuje mi władza rodzicielska, przez administratora danych osobowych UKS 141 Warszawa, zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych), w celach uczestnictwa Uczestnika lub Opiekuna w UKS 141 Warszawa, działaniach marketingowych podejmowanych przez administratora danych samodzielnie lub we współpracy z innymi podmiotami.</p><p>Oświadczam, że zostałem poinformowany o uprawnieniu dostępu do treści danych swoich oraz Uczestnika, a także ich poprawiania oraz zgłoszenia żądania zaprzestania ich przetwarzania. Oświadczam, że zostałem poinformowany o dobrowolności podania danych i niniejszą zgodę składam dobrowolnie.</p>
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
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>