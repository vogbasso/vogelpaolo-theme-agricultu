<?php


/**
 * Vogel Paolo BASSO Setup
 *
 */
 require( get_template_directory() . '/inc/vogelpaolobasso_setup.php' );
 
 /**
 * Add support for a custom header image.
 */
 require( get_template_directory() . '/inc/custom-header.php' );
 
 
 
 /**
 * Return the Google font stylesheet URL if available.
 *
 */
 require(get_template_directory() . '/inc/vogelpaolobasso_get_font_url.php');
 
 /**
 * Enqueue scripts and styles for front-end.
 *
 * @since Vogel Paolo BASSO 1.0
 */
 require(get_template_directory() . '/inc/vogelpaolobasso_scripts_styles.php');
 
 /**
 * Filter TinyMCE CSS path to include Google Fonts.
 *
 */
 require(get_template_directory() . '/inc/vogelpaolobasso_mce_css.php');
 
 /**
 * Filter the page title.
 *
 */
require(get_template_directory() . '/inc/vogelpaolobasso_wp_title.php');


 /**
 * Register sidebars.
 *
 */
 require(get_template_directory() . '/inc/vogelpaolobasso_widgets_init.php');

 require(get_template_directory() . '/inc/vogelpaolobasso_nav.php');

 /**
 *Registry bootstrap file and Jquery
 *
 */ 
// require(get_template_directory().'inc/vogelpaolobasso_bootstrap_jquery_setup.php');
 
 
 /**
 *Wordpress nav walker
 *
 */
 require_once('wp_bootstrap_navwalker.php');
 
 /**
  * Add Ajax php functions
  */
 require(get_template_directory() . '/inc/vogelpaolobasso_ajax.php');
 
