<?php

/*
	Template Name: contact, No Sidebar
*/

get_header();  ?>


 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>


    <?php endwhile; // end the loop?>


<?php get_footer(); ?>