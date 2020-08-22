<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content col-lg-8 druzyny">
				<div class="row">
					<div class="col-md-12 single-content">
						<h2><strong>ZESPOŁY</strong></h2>
					</div>
				<?php
							

					$news_query = new  Wp_Query( array(
						'showposts' => -1,
						'post_type' => array('druzyny'),
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC'
						));

					if($news_query->have_posts()) :
						while($news_query->have_posts()) : $news_query->the_post();
					
						if(get_the_ID() == 3521){
							?>
								<div class="col-md-6 single-team">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('full', array('class' => 'img-fluid team-photo')); ?>
										<h2><?php the_title(); ?></h2>
										<hr>
									</a>
								</div>
							<?php
						}else {
							?>
							<div class="col-md-6 single-team">
								<?php the_post_thumbnail('full', array('class' => 'img-fluid team-photo')); ?>
								<h2><?php the_title(); ?></h2>
								<hr>
							</div>
							<?php
						}
					?>
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