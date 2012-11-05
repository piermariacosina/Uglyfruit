<?php
get_header(); ?>
		<div class="left-shade"></div>
		<div id="primary">
			
			<div class="orange_header">
				<div class="circle">
					<h1 id="title"> <?php the_field("blog-titolo","options")?></h1>
				</div>
				<p class="description"><?php the_field("blog-descrizione","options")?></p>
			</div>
			<div class="shade-grey"></div>
			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	
			<div id="categories">
				<?php do_action("list_all_categories","all") ?>
			</div>
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'landing' ); ?>

				<?php endwhile; // end of the loop. ?>
				<div id="posts_list">
					<?php do_action("list_posts"); ?>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	<div class="right-shade"></div>
<?php get_footer(); ?>
