<?php 

if ( !function_exists( 'bp_dtheme_enqueue_styles' ) ) :
	function wp_enqueue_styles(){
		$version = '0.2';
		wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css', array(), $version, 'screen, projection' );

		wp_register_style( 'screen', get_stylesheet_directory_uri() . '/screen.css', array(), $version, 'screen, projection' );

wp_register_script( 'isotope',  get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array(), $version, false );
wp_register_script( 'isotope_main',  get_stylesheet_directory_uri() . '/js/isotope.js', array(), $version, false );



wp_enqueue_script('jquery',false, array(), $version, true);
wp_enqueue_script('isotope',false, array('jquery'), $version, true);
wp_enqueue_script('isotope_main',false, array('isotope'), $version, true);

		wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'screen' );


	}

	add_action( 'wp_enqueue_scripts', 'wp_enqueue_styles' );
endif;

if ( !function_exists( 'get_posts_list' ) ) :
function get_posts_list(){
global $post;
	$args = array( 
		'posts_per_page' => -1,
		'post_type'=>'post' ,
		'post_status'=>'publish',
		'order'=>'ASC',
		'orderby'=>'date'
		);

	query_posts( $args );
	
	// The Loop
	while (have_posts() ) : the_post();
		?>
		<div class="item <?php post_categories_list( get_the_ID() ) ?>">
			<a href="<?php the_permalink() ?>">
				<h2><?php the_title() ?></h2>
				<p><?php echo $post->post_excerpt ?></p>
			</a>
		</div>


<?php endwhile;	

	// Reset Query
	wp_reset_query();
}

add_action('list_posts', 'get_posts_list');
endif;


add_action('print_category_menu','category_menu');
function category_menu(){
	echo get_category_menu();
}

function get_category_menu(){
		$ul_categories = '<ul class="nav nav-pills">';
			$args=array(
			  'orderby' => 'name',
			  'order' => 'ASC'
			  );
			  
			$categories=get_categories($args);
			
			  foreach($categories as $category) { 
					$ul_categories .= ' <li><a href="' . get_category_link( $category->term_id ) . '" data-filter=".'.$category->slug.'" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name;
		if ($count  == "all"){
			$ul_categories .=  ' ('. $category->count . ')</a></li>';
		}else{
			$ul_categories .=  '</a></li>';
		}		
		} 
		$ul_categories .= '</ul>';
		
		return $ul_categories;
}


add_action('list_all_categories', 'all_categories_list',1);

function all_categories_list($count){
	echo get_all_categories_list($count);
}

function get_all_categories_list($count){
		$ul_categories = '<ul class="nav nav-pills">';
		$args=array(
		  'orderby' => 'name',
		  'order' => 'ASC'
		  );
		  
		$categories=get_categories($args);
		if ($count  == "all"){
			$ul_categories .= '<li><a href="#filter" data-filter="*">Show All</a></li>';
		}	
		
		  foreach($categories as $category) { 
				$ul_categories .= ' <li><a href="#filter" data-filter=".'.$category->slug.'" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name;
	if ($count  == "all"){
		$ul_categories .=  ' ('. $category->count . ')</a></li>';
	}else{
		$ul_categories .=  '</a></li>';
	}		
	} 
	$ul_categories .= '</ul>';
	
	return $ul_categories;
}

function post_categories_list($id){
	echo get_post_categories_list($id);
}

function get_post_categories_list($id){
	$post_categories = wp_get_post_categories( $id );
	$cats = array();
	
	foreach($post_categories as $c){
		$cat = get_category( $c );
		$cats[] =  $cat->slug ;
	}
	
	return implode( ' ', $cats );
}