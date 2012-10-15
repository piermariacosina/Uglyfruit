<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="left-shade"></div>
		<section id="primary">
			<div id="content" role="main">
			
										<?php if ( have_posts() ) : ?>
				
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>
				<div id="posts_list">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="item <?php post_categories_list( get_the_ID() ) ?>">
						<a href="<?php the_permalink() ?>">
							<h2><?php the_title() ?></h2>
							<p><?php echo $post->post_excerpt ?></p>
						</a>
					</div>

				<?php endwhile; ?>
</div>
				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
			

			</div><!-- #content -->
		</section><!-- #primary -->
<div class="right-shade"></div>

<?php get_footer(); ?>