<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="left-white"></div>
		<div class="right-white"></div>
		<div class="row">
			<div class="content single-content col-lg-7">
				<div class="pion"></div>
				<?php woocommerce_content(); ?>
			</div>
			<div class="col-lg-1"></div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>