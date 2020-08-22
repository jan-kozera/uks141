<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="left-white"></div>
		<div class="right-white"></div>
		<div class="row">
			<div class="content projekty col-lg-8">
				<div class="row">
					<div class="col-md-12 single-content mar-bot">
						<h2 class="has-text-align-center"><strong>PROJEKTY UKS 141</strong></h2>
					</div>
				<?php
							

					$news_query = new  Wp_Query( array(
						'showposts' => -1,
						'post_type' => array('obozy'),
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC'
						));
					
					if($news_query->have_posts()) :
						while($news_query->have_posts()) : $news_query->the_post();
				?>				
						<div class="col-md-6 single-team oboz">
							<div class="oboz-photo" style="background: url('<?php the_post_thumbnail_url(); ?>')"></div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						<hr>
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