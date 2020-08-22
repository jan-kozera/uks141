<?php /* Template name: FAQ */ ?>
<?php get_header(); ?>
<?php the_post(); ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="content col-lg-8">
				<?php the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>