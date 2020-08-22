<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content single-content col-lg-8">
				<?php the_post(); ?>
				<div class="imaz">
					<?php the_post_thumbnail('full', array('class' => 'img-fluid team-photo')); ?>
				</div>
				<?php the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>