<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
			<div id="categories_menu">
				<?php do_action('print_category_menu');?>
			</div>
			<div id="content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>

						

					<?php get_template_part( 'content', 'single' ); ?>
					<div class="freccia-d"><?php previous_post_link( '%link', __( '', 'twentyeleven' ) ); ?></div>
					<div class="freccia-sx"><?php next_post_link( '%link', __( '', 'twentyeleven' ) ); ?></div>
					</nav><!-- #nav-single -->
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>