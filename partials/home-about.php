


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<section class="about">
		<?php $image = get_field('about-image-left'); ?>
		<div class="about-left"  style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
		</div>
		<?php $image = get_field('about-image-right'); ?>
		<div class="about-right"  style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
			<div class="about-container">
				<h2><?php the_field("about-title"); ?></h2>
				<div class="about-content">
					<?php the_field("about-content"); ?>
				</div>

				<?php $page_id = 10; ?>
				<div class="button-wrapper">
					<a class="button"  href="<?php echo get_permalink( $page_id ); ?>"> learn more</a>
				</div>
			</div>
			
		</div>

	</section>


    <?php endwhile; // end the loop?>


