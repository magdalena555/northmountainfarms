<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>


	<div class="blog-parent">
		<div class="body-wrapper">
			<div class="blog-wrapper">
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
				
				


				<article class="post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h4>
				        <?php the_title(); ?>
					</h4>   
				    
					<section>
						<?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>

						<?php wp_link_pages( array(
						  'before' => '<div class="page-link"> Pages:',
						  'after' => '</div>'
						)); ?>
					</section>
				       

				</article><!-- #post-## -->
			</div>
			
		</div>
		

	</div>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<div class="blog-button-container">
		<?php previous_posts_link('previous'); ?>
		<?php next_posts_link('next'); ?>
	</div>
<?php endif; ?>
