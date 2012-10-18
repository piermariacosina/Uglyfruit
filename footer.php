<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
</div>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		
			<div class="container">
			<div class="uglyfruit">
				<h2><?php the_field("cose-titolo","options") ?></h2>
				<p> <?php the_field("cose-paragrafi","options") ?></p>
			</div>
			<div class="contatti">
				<h2><?php the_field("contatti-titolo","options") ?></h2>
				<p> <?php the_field("contatti-paragrafi","options") ?></p>
			</div>
			<div class="social"></div>
			<?php 
				wp_nav_menu("footer");
				
			?>
			
			<div class="facebook"></div>
			<div class="twitter"></div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>