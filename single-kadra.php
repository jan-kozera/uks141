<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="left-white"></div>
		<div class="right-white"></div>
		<div class="row">
			<div class="content single-content col-lg-12">
				<?php the_post(); ?>
				<?php if (has_post_thumbnail( $post->ID ) ){
							the_post_thumbnail('full', array('class' => 'img-fluid team-photo'));
						}else {
							?> <img class="img-fluid" src="<?php echo THEME_URL; ?>img/man.jpg" alt="">     <?php
						} ?>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>