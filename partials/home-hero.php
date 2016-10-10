

 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<!-- home hero  -->
	<div class="video-container top  ">
		<?php
		$heroImage = get_field('hero-image');
		$image = $heroImage['sizes']['hero'];
		?>

		<div class="hero-container" data-vide-bg="mp4: <?php echo get_field('video-mp4'); ?>, webm: <?php echo get_field('video-webm'); ?>, ogv: <?php echo get_field('video-ogv'); ?>, poster: <?php echo $image; ?>"  data-vide-options="posterType: jpg, loop: true, muted: true, position: 0% 0%">
			<hr>
			<div class="hero-center">
				<div class="image-wrapper">
					<?php $image = get_field('hero-logo'); ?>
					<img class="center-logo"  width="375" src="<?php echo $image['sizes']['hero'] ?>"> 
				</div>
				<a href="#products">
					<img class="hero-arrow" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/arrow.png" alt="hero arrow" title="hero arrow" />
				</a>
			</div>
			<div class="overlay"></div>
		</div>
	</div>
	<!-- end of home hero  -->

  <?php endwhile; // end the loop?>


