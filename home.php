<?php /* Template name: Strona główna */ ?>

<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content col-lg-8">
				<div class="row">
				<?php
							
					$paged = ( get_query_var('page')) ? get_query_var('page') : 1;

					$news_query = new  Wp_Query( array(
						'showposts' => 10,
						'post_type' => array('post'),
						'post_status' => 'publish',
						'orderby' => 'DESC',
						'posts_per_page' => '10',
						'paged' => $paged
						));
					
					$i = 1;

					if($news_query->have_posts()) :
						while($news_query->have_posts()) : $news_query->the_post();
							$kategorie = get_the_category($news_query->ID);
				?>				
											
					<div class="single-wpis col-md-6">
						<div class="row">
							<div class="col-md-12 wpis-content move">
								<a href="><?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
								<?php 
									foreach($kategorie as $kategoria) {
										if($kategoria->name == "Bez kategorii" || $kategoria->name=="Aktualności"){
											echo '<span>Aktualności</span>';
										}else {
											echo '<span>'.$kategoria->name.'</span>';	
										}
									} ?>
								<h3><?php echo get_the_date('d.m.Y'); ?></h3>
							</div>
							<div class="col-md-5">
								<a href="<?php the_permalink(); ?>"><div class="obrazek"
									 <?php
										if (has_post_thumbnail( $post->ID ) ){
											?>
											style="background: url('<?php echo the_post_thumbnail_url();  ?>') !important; background-size: cover !important; background-position: center center !important; background-repeat: no-repeat !important;"
											<?php 
										}else {
											?>
											style ="background: url('<?php echo THEME_URL; ?>img/klub.png')"
											<?php 
										}
									 ?>
									 ></div></a>
							</div>
							<div class="col-md-7 wpis-content">
								<p><?php the_excerpt_max_charlength(260); ?></p>
								<a href="<?php the_permalink(); ?>"><h4>Czytaj więcej...</h4></a>
							</div>
							<?php 
							
								if( $i==9 || $i==10){
					
								}else {
									echo '<hr>';
								}
							
							?>
						</div>
					</div>
				<?php $i++; ?>
				<?php endwhile; ?>
				<?php endif;?>
				<?php if ($news_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
					  <nav class="prev-next-posts clear">
						<div class="prev-posts-link">
						  <?php echo get_next_posts_link( 'Następna strona ->', $news_query->max_num_pages ); // display older posts link ?>
						</div>
						<div class="next-posts-link">
						  <?php echo get_previous_posts_link( '<- Poprzednia strona' ); // display newer posts link ?>
						</div>
					  </nav>
					<?php } ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_template_part('bottom'); ?>


<?php get_footer(); ?>