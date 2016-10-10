
	<?php $image = get_field('footer-image', 'option'); ?>
	<div class="footer"  style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
		<?php $image = get_field('footer-logo', 'option'); ?>
		<div class="footer-wrapper">
	       	<img src="<?php echo $image['sizes']['logo'] ?>"> 
			<div class="footer-content">
				<?php the_field('footer-content', 'option'); ?>
			</div>
		</div>
	</div>


<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>