<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<?php $image = get_field('hero-image'); ?>
	<section class="stay-connected-hero" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
		<h2>hero</h2>
	</section>

<section class="blog-main">
	<?php get_template_part( 'loop', 'index' );	?>
</section>

<?php get_footer(); ?>