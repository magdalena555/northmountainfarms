


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- start of products section  -->
	<section id="products" class="products">
		<div class="body-wrapper">
			<p><?php the_field("products-intro"); ?></p>
			<div class="products-container">

				<?php if( have_rows('product-item') ): ?>
				
					<?php while( have_rows('product-item') ): the_row(); 
					             
					 	$image = get_sub_field('product-image');?>
							
							<div class="product-box" style="background-image: url('<?php echo $image['sizes'] ['product'] ; ?>');">
								<h2> <?php the_sub_field('product-title-one'); ?></h2>
								<h3><?php the_sub_field('product-title-two'); ?></h3>
								<div class="product-info"><?php the_sub_field('product-info'); ?></div>
								<div class="button-wrapper">
									<a class="button"  href=""> learn more</a>
								</div>

							</div>

					  
					<?php endwhile; ?> 

				<?php endif; ?>

			</div> 	<!-- end of products container -->
		</div> 	<!-- end of body-wrapper  -->
	</section>
	<!-- end of products section  -->
    <?php endwhile; // end the loop?>


