<?php 

if ( !function_exists( 'bp_dtheme_enqueue_styles' ) ) :
	function wp_enqueue_styles(){
		$version = '0.2';

		wp_register_style( 'screen', get_stylesheet_directory_uri() . '/screen.css', array(), $version, 'screen, projection' );


			
		wp_enqueue_style( 'screen' );
		wp_enqueue_style( 'print' );

		wp_enqueue_script('jquery');

	}

	add_action( 'wp_enqueue_scripts', 'wp_enqueue_styles' );
endif;