<div class="sidebar col-lg-4">
	<div class="wydarzenia">
		<?php if ( is_active_sidebar( 'wydarzenia' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'wydarzenia' ); ?>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
		<hr>
	</div>
	<div class="galeria">
		<?php if ( is_active_sidebar( 'galeria' ) ) : ?>
			<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'galeria' ); ?>
				<a class="gal-more" href="<?php echo esc_url(home_url('/galeria')); ?>">Zobacz pozostałe</a>
			</div><!-- #primary-sidebar -->
		<?php endif; ?>
		<hr>
	</div>
	<div class="facebook">
		<div class="fb-page" data-href="https://www.facebook.com/Uks141Warszawa/" data-tabs="timeline" data-width="350" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Uks141Warszawa/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Uks141Warszawa/">UKS 141 Warszawa</a></blockquote></div>
		<hr>
	</div>
	<div class="video">
		<?php echo do_shortcode('[embedyt] https://www.youtube.com/embed?listType=playlist&list=UUXSgFFyMkndZePAPj1KN--g&layout=gallery[/embedyt]'); ?>
	</div>
</div>