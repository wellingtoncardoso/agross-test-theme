<?php
//////////////////////////////////////////////////////////////////////////////////////////////
// ACTIVE THEME
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_setup(){
	//Thumbnail destacada
	add_theme_support( 'post-thumbnails' ); 

	//Support Title SEO
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cpw_setup');

//////////////////////////////////////////////////////////////////////////////////////////////
// MENU
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_menus(){
	//require_once('wp-bootstrap-navwalker.php');

	register_nav_menus(array('principal' => __('Menu Principal', 'cpw')));
}
add_action('init', 'cpw_menus');

//////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPT AND STYLE RESET
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_scripts_styles(){
	if(! is_admin()){
		/*Style*/	
		wp_enqueue_style('reset-css', get_stylesheet_directory_uri().'/assets/css/reset.css', array(), null, 'all');
		wp_enqueue_style('general-css', get_stylesheet_directory_uri().'/assets/css/general.css', array(), null, 'all');
		wp_enqueue_style('header-css', get_stylesheet_directory_uri().'/assets/css/header.css', array(),  null, 'all');
		wp_enqueue_style('footer-css', get_stylesheet_directory_uri().'/assets/css/footer.css', array(),  null, 'all');
		wp_enqueue_style('pages-css', get_stylesheet_directory_uri().'/assets/css/pages.css', array(),  null, 'all');
	}

	/*Script*/
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1');		 
	wp_enqueue_script('main-js',get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'),'1.0.0', true);

	wp_enqueue_style('bootstrap-min-css',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.css', array(),'4.4.1');
	wp_enqueue_script('bootstrap-min-js',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.js', array('jquery'),'5.2.0', true);	
	wp_enqueue_script('bootstrap-bundle-min-js',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap-bundle.min.js', array('jquery'),'4.0.0', true);	
	wp_enqueue_script('popper-min-js',get_stylesheet_directory_uri().'/vendor/bootstrap/popper.min.js', array('jquery'),'2.9.2', true);	
	
	wp_enqueue_style('slick-theme-css',get_stylesheet_directory_uri().'/vendor/slick/slick-theme.css', array(),'1.0.0');
	wp_enqueue_style('slick-css',get_stylesheet_directory_uri().'/vendor/slick/slick.css', array(),'1.0.0');
	wp_enqueue_script('slick-min-js',get_stylesheet_directory_uri().'/vendor/slick/slick.min.js', array('jquery'),'1.0.0', true);	
	
}//style and script
add_action('wp_enqueue_scripts', 'cpw_scripts_styles');
