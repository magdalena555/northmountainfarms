


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- start of home blog -->
	<?php $page_id = 16; ?>
	<a class="blog-title" href="<?php echo get_permalink( $page_id ); ?>">
		<?php
		$args = array(
			'post_type' => 'post',
			'order' => 'desc',
			'orderby' => 'date',
			'posts_per_page' => 1,
			);

	$recentPosts = new WP_Query($args);
	if ($recentPosts->have_posts() ) {
		while ($recentPosts->have_posts() ) {
			$recentPosts->the_post(); ?>

				<section class="home-blog">
					<div class="body-wrapper">
						<div class="home-blog-wrapper">
							<div class="date-section">
								<div class="date-wrapper">
									<div class="shape-container">
										<img class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="5" src="<?php bloginfo("template_url")?>/images/triangle.png">
									</div>
									<div class="numbers">
										<h3><?php the_time('j'); ?></h3>
										<h4><?php the_time('M'); ?></h4>
										
									</div>
								</div>
							</div>
							
							
							<div class="home-blog-content">
								<h3 class="title"><?php the_title();?></h3>
								<p class=""> <?php the_excerpt();  ?></p>
							</div>
						</div>
					</div>
				</section>
				
				<?php } // end while
			} // end if

			wp_reset_postdata();
				?>
			</a>
<!-- end of home blog -->			
<?php endwhile; // end the loop?>


