<?php

/*
	Template Name: story, No Sidebar
*/

get_header();  ?>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<!-- story hero  -->
     <?php $image = get_field('story-image'); ?>
     <section class="hero-small top" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
     	<hr>
     	<div class="hero-content">
     		<h1><?php the_field("story-title1"); ?></h1>
     		<h2><?php the_field("story-title2"); ?></h2>
     	</div>
     	<div class="overlay"></div>
	</section>
	<!--  end of story hero  -->
	<!-- start of who we are -->
	<section class="story-content">
		<div class="body-wrapper">
			<h1><?php the_field("whoweare-title"); ?></h1>
				<?php the_field("whoweare-content"); ?>
		</div>
	</section>
	<!-- end of who we are -->
	<!-- start of cheesemaker section -->
	<section class="cheesemaker">
		<div class="cheesemaker-content-container">
			<div class="cheesemaker-left">
				<?php if( have_rows('cheesemaker-item') ): ?>
				
					<?php while( have_rows('cheesemaker-item') ): the_row(); 
					    ?>
						<h2> <?php the_sub_field('cheesemaker-title1'); ?></h2>
						<h3><?php the_sub_field('cheesemaker-title2'); ?></h3>
						<div class="cheesemaker-content"><?php the_sub_field('cheesemaker-content'); ?></div>
						
					<?php endwhile; ?> 

				<?php endif; ?>
			</div>
		</div>
		<div class="cheesemaker-images">
			<?php 
			$images = get_field('cheesemaker-images');
			// check to see if the field exist and is populated
			// if gallery exist
			$counter = 0;
			if( $images ): ?>

			        <?php foreach( $images as $image ): ?>
			           
			           
			            	<?php if ($counter % 3 === 0) : ?>
			
								<div class=" float large-image" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');"></div>
			            		<?php else: ?>	
		            			<div class="float small-image" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');"></div>
			            	<?php endif; ?>
			        			            
			        <?php $counter++ ?>
			    <?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- end  of cheesemaker section -->
	<!-- start of farmer section -->
	<section class="farmer">
		<div class="body-wrapper">
			<?php if( have_rows('farmer-item') ): ?>
			
				<?php while( have_rows('farmer-item') ): the_row(); 
				    ?>
					<h2> <?php the_sub_field('farmer-title1'); ?></h2>
					<h3><?php the_sub_field('farmer-title2'); ?></h3>
					<div class="farmer-content">
						<?php the_sub_field('farmer-content'); ?>
					</div>
					
				<?php endwhile; ?> 

			<?php endif; ?>
		</div>
	</section>
	<!-- end of farmer section -->
	<!-- start of footer -->
<?php endwhile; // end the loop?>


<?php get_footer(); ?>