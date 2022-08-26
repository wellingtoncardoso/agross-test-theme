<?php
//////////////////////////////////////////////////////////////////////////////////////////////
// SCRIPT AND STYLE RESET
//////////////////////////////////////////////////////////////////////////////////////////////
function cpw_scripts_styles(){
	if( ! is_admin() ){
		/*Style*/	
		wp_enqueue_style('reset-theme', get_stylesheet_directory_uri().'/assets/css/reset.css', array(), '1.0.0');
		wp_enqueue_style('common-theme', get_stylesheet_directory_uri().'/assets/css/common.css', array(), '1.0.0');
		wp_enqueue_style('general-theme', get_stylesheet_directory_uri().'/assets/css/general.css', array(), '1.0.0');
		wp_enqueue_style('header-theme', get_stylesheet_directory_uri().'/assets/css/header.css', array(), '1.0.0');
		wp_enqueue_style('footer-theme', get_stylesheet_directory_uri().'/assets/css/footer.css', array(), '1.0.0');
		wp_enqueue_style('pages-theme', get_stylesheet_directory_uri().'/assets/css/pages.css', array(), '1.0.0');
		wp_enqueue_style('media-theme', get_stylesheet_directory_uri().'/assets/css/media.css', array(), '1.0.0');
		wp_enqueue_style('modal-theme', get_stylesheet_directory_uri().'/assets/css/modal.css', array(), '1.0.0');
		wp_enqueue_style('flip-theme', get_stylesheet_directory_uri().'/assets/css/flip.css', array(), '1.0.0');
	}

	/*Script*/
	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1');	
	wp_enqueue_script('google-ajax','https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',array('jquery'),'1.12.4'); 
	
	wp_enqueue_script('flipclock','https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js',array(),'0.7.8');	
	wp_enqueue_style('flipclock','https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css', array(),'0.7.8');

	wp_enqueue_script('main-js',get_stylesheet_directory_uri().'/assets/js/main.js', array('jquery'),'1.0.0', true);
	
	wp_enqueue_style('bootstrap-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.css', array(),'4.4.1');
	wp_enqueue_script('bootstrap-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap.min.js', array('jquery'),'5.2.0', true);	
	wp_enqueue_script('bootstrap-bundle-min',get_stylesheet_directory_uri().'/vendor/bootstrap/bootstrap-bundle.min.js', array('jquery'),'4.0.0', true);	
	// wp_enqueue_script('popper-min',get_stylesheet_directory_uri().'/vendor/bootstrap/popper.min.js', array('jquery'),'2.9.2', true);	
	
	wp_enqueue_style('slick-theme',get_stylesheet_directory_uri().'/vendor/slick/slick-theme.css', array(),'1.0.0');
	wp_enqueue_style('slick',get_stylesheet_directory_uri().'/vendor/slick/slick.css', array(),'1.0.0');
	wp_enqueue_script('slick-min',get_stylesheet_directory_uri().'/vendor/slick/slick.min.js', array('jquery'),'1.0.0', true);	
	
}//style and script
add_action('wp_enqueue_scripts', 'cpw_scripts_styles');