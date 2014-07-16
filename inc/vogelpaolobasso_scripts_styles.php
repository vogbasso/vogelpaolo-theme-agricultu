<?php
/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Vogel Paolo BASSO 1.0
 */
 
 //Load theme CSS
 function vogelpaolobasso_styles(){
	 //bootstrap
	wp_register_style('bootstrap_css', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap_css');
	
	//style.css
	wp_register_style('style_css',get_template_directory_uri().'/style.css');
	wp_enqueue_style('style_css');
		
 }
 add_action('wp_enqueue_scripts','vogelpaolobasso_styles');
 
 
 // Load theme JS
 function vogelpaolobasso_scripts(){
	 //bootstrap jquery
	
	//site_home_js
	if(is_home()){ 
	wp_register_script('site_home_js',get_template_directory_uri().'/js/site_js/home.js',array('jquery'));
	wp_enqueue_script('site_home_js');
	} 
 	//bootstrap
	wp_register_script('bootstrap_js',get_template_directory_uri().'/bootstrap/js/bootstrap.min.js',array('jquery'));
	wp_enqueue_script('bootstrap_js');

	
 }
 add_action( 'wp_enqueue_scripts', 'vogelpaolobasso_scripts' );
 