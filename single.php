<?php get_header(); ?>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="content single-content col-lg-8">
				<?php the_post(); ?>
				<div class="imaz">
					<?php the_post_thumbnail('full', array('class' => 'img-fluid team-photo')); ?>
				</div>
				<h2 class="sin-title"><strong><?php the_title(); ?></strong></h2>
				<div class="sdesc">
					<?php 
					$kat = get_the_category();
					foreach($kat as $kategoria) {
						if($kategoria->name == "Bez kategorii" || $kategoria->name=="Aktualności"){
							echo '<span>Aktualności</span>';
						}else {
							echo '<span>'.$kategoria->name.'</span>';	
						}
					} ?>
					<h3><?php echo get_the_date('d.m.Y'); ?></h3>
				</div>
				<?php the_content(); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_template_part('bottom'); ?>

<?php get_footer(); ?>