<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form class="form-search" method="get"  id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="input-append">
			<input name="s" id="s" type="text" class="span2 search-query" placeholder="<?php esc_attr_e( 'Search something', 'twentyeleven' ); ?>">
			<button id="searchsubmit" type="submit" class="btn"><?php esc_attr_e( 'Search', 'twentyeleven' ); ?></button>
		</div>
	</form>
