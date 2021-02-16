 <?php 

function load_stylesheets(){

	wp_enqueue_style( 'stylesheet',get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('stylesheet');

	wp_enqueue_style( 'style',get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function include_jquery(){
	wp_deregister_script( 'jquery' );
	wp_enqueue_script('jquery',get_template_directory_uri() . '/js/jquery-3.5.1.min.js','','3.5.1',true);
}


function loadjs(){
	wp_register_script( 'bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', '',1, true );
	wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts','loadjs');
add_theme_support( 'menus');
register_nav_menus( 
	array(
			'top-menu' => __('Top Menu', ' theme'),
			'top-footer' => __('Top Footer', ' theme')
	)	

 );