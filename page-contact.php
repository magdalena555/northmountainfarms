<?php

/*
	Template Name: contact, No Sidebar
*/

get_header();  ?>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     <!-- start of contact hero -->
     <?php $image = get_field('contact-image'); ?>     
     <section class="hero-small top" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
     	<hr>
     	<div class="hero-content">
     		<h1><?php the_field("contact-title1"); ?></h1>
     		<h2><?php the_field("contact-title2"); ?></h2>
     	</div>
     	<div class="overlay"></div>
	</section>
    <!-- end of contact hero-->
     <!-- start of contact info -->
	<section class="contact-info">
		<div class="phone">
			<h2><?php the_field("phone-icon"); ?></h2>
			<h3><?php the_field("phone"); ?></h3>
		</div>	
		<div class="email">	
			<h2><?php the_field("email-icon"); ?></h2>
			<h3><?php the_field("email"); ?></h3>
		</div>
	
	</section>
    <!-- end of contact info -->
    <!-- start of form-->
    <section class="contact-main">
    	<div class="body-wrapper">
    		<?php the_content(); ?>
    	</div>
    </section>
    <!-- end of contact form -->

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>