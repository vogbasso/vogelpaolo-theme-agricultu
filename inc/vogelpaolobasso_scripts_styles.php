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
	if(is_admin()) return;
	//bootstrap jquery
	
	//Site Web Application Js And Ajax Use
	wp_register_script('vogelpaolobasso_application_js',get_template_directory_uri().'/js/vogelpaolobasso_js/applicationService.js',array('jquery'),'1.0.O',true);
	wp_enqueue_script('vogelpaolobasso_application_js');
	wp_localize_script('vogelpaolobasso_application_js','vogelpaolobassoAjax',
	array(
	'ajaxUrl' => admin_url('admin-ajax.php'),
	'siteUrl'=> get_bloginfo('url'),
	'nextNonce' => wp_create_nonce('vogelpaolobasso-wp-nonce')
	));
	
	//index.js
	
	//site_home_js
	if(is_home()){ 
	wp_register_script('vogelpaolobasso_home_js',get_template_directory_uri().'/js/vogelpaolobasso_js/homeService.js',array('jquery','vogelpaolobasso_application_js'),'1.0.0',true);
	wp_enqueue_script('vogelpaolobasso_home_js');
	} 
		
 	//bootstrap
	wp_register_script('bootstrap_js',get_template_directory_uri().'/bootstrap/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('bootstrap_js');	
}
add_action( 'wp_enqueue_scripts', 'vogelpaolobasso_scripts' );
 
