<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<!-- start of blog hero -->
<?php $image = get_field('hero-image', 'option'); ?>
 <section class="hero-small top" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
 	<hr>
 	<div class="hero-content">
 		<h1><?php the_field('title-one', 'option'); ?></h1>
		<h2><?php the_field('title-two', 'option'); ?> </h2>
 
 	</div>
 	<div class="overlay"></div>
 </section>
 <!-- end of blog hero -->
 <!-- start of blog main -->
<section class="blog-main">
	<?php get_template_part( 'loop', 'index' );	?>
</section>
<!-- end of blog main -->
<?php get_footer(); ?>