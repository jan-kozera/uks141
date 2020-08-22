<?php get_header(); ?>

<section id="content">
	<div class="container">
		<div class="left-white"></div>
		<div class="right-white"></div>
		<div class="row">
			<div class="content col-lg-8">
				<div class="row">
					<div class="col-md-12 single-content">
						<h2><strong>KADRA TRENERSKA</strong></h2>
					</div>
				<?php
							

					$news_query = new  Wp_Query( array(
						'showposts' => -1,
						'post_type' => array('kadra'),
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC'
						));

					if($news_query->have_posts()) :
						while($news_query->have_posts()) : $news_query->the_post();
				?>				
						<div class="single-wpis-kadra col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="obrazek">
									 <?php
										if (has_post_thumbnail( $post->ID ) ){
											the_post_thumbnail(array(200,'auto'), array('class' => 'img-fluid team-photo'));
										}else {
											?> <img class="img-fluid" src="<?php echo THEME_URL; ?>img/man.jpg" alt="">     <?php
										}
									 ?>
									 </div>
								</div>
								<div class="col-md-6 align-self-center">
									<h2><?php the_title(); ?></h2>
									<p><?php the_content(); ?></p>
								</div>
								<hr>
							</div>
						</div>

				<?php endwhile; ?>
				<?php endif;?>
					</div>
				
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_template_part('bottom'); ?>


<?php get_footer(); ?>