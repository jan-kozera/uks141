<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content projekty col-lg-8">
				<div class="row">
					<div class="col-md-12 single-content mar-bot">
						<h2><strong>PROJEKTY UKS 141</strong></h2>
					</div>
				<?php
							

					$news_query = new  Wp_Query( array(
						'showposts' => -1,
						'post_type' => array('projekty'),
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC'
						));
					
					if($news_query->have_posts()) :
						while($news_query->have_posts()) : $news_query->the_post();
				?>				
						<div class="col-md-6 single-team project">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full', array('class' => 'img-fluid team-photo')); ?>
								<h2><?php the_title(); ?></h2>
							</a>
							<hr>
						</div>
				<?php endwhile; ?>
				<?php endif;?>
					<div class="col-md-6 single-team project">
						<a href="<?php echo esc_url(home_url('/obozy')); ?>">
							<img src="<?php echo THEME_URL; ?>img/oboz.jpg" alt="" class="img-fluid">
							<h2>Obozy letnie</h2>
						</a>
						<hr>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_template_part('bottom'); ?>


<?php get_footer(); ?>