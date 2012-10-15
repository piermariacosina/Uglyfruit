<?php
get_header(); ?>
		<div class="left-shade"></div>
		<div id="primary">
			<div class="orange_header"></div>
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'landing' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	<div class="right-shade"></div>
<?php get_footer(); ?>