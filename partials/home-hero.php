


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="hero-container">
		<section class="hero-desktop">
			<?php $image = get_field('hero-logo'); ?>
	       	<img src="<?php echo $image['sizes']['hero'] ?>"> 

		</section>
		<?php $image = get_field('hero-image'); ?>
		<section class="hero-mobile" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
			<?php $image = get_field('hero-logo'); ?>
	       	<img  width="375" src="<?php echo $image['sizes']['hero'] ?>"> 
			<div class="overlay"></div>
		</section>
	</div>
	

    <?php endwhile; // end the loop?>


