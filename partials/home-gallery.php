


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<!-- start of image gallery  -->
<section class="gallery-container">
	<section class="gallery">
		<?php 
		$images = get_field('home-gallery');
		// check to see if the field exist and is populated
		// if gallery exist
		$counter = 0;
		if( $images ): ?>
	        <?php foreach( $images as $image ): ?>
        	<?php if ($counter % 3 === 0) : ?>
				<a href="">
					<div class=" float large-image" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
						
					</div>
				</a>
		
        	<?php else: ?>
        		 <div class="column-flex"> 
        		 	<a href="">
        		 		<div class="float small-image" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
        		 			
        		 		</div>
        		 	</a>
        		</div>
        		    
	       	<?php endif; ?>
	        	
	        <?php $counter++ ?>
		    <?php endforeach; ?>
		<?php endif; ?>
	</section>
	<section class="gallery-two">
		<?php 
		$images = get_field('gallery-right');
		// check to see if the field exist and is populated
		// if gallery exist
		$counter = 0;
		if( $images ): ?>
	        <?php foreach( $images as $image ): ?>

	        	<?php if ($counter % 3 === 0) : ?>
					<a href="">
						<div class=" float large-image" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
							
						</div>
					</a>

	        	<?php else: ?>
	        		 <div class="column-flex"> 
	        		 	<a href="">
	        		 		<div class="float small-image" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');"></div>
	        		 	</a>
	        		</div>
	        		    
	        	<?php endif; ?>   
			    <?php $counter++ ?>
			<?php endforeach; ?>
		<?php endif; ?>
	</section>
</section>
<!-- end of image gallery  -->

    <?php endwhile; // end the loop?>


