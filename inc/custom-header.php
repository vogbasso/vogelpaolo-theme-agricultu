<?php
/**
 * Implement an optional custom header for Twenty Twelve
 *
 * See http://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage vogelpaolobasso
 * @since Vogel Paolo BASSO 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses vogelpaolobasso_header_style() to style front-end.
 * @uses vogelpaolobasso_admin_header_style() to style wp-admin form.
 * @uses vogelpaolobasso_admin_header_image() to add custom markup to wp-admin form.
 *
 * @since Vogel Paolo 1.0
 */
 
 function vogelpaolobasso_custom_header_setup(){
 
 }
 add_action( 'after_setup_theme', 'vogelpaolobasso_custom_header_setup' );
 
 
 /**
 * Load our special font CSS file.
 *
 * @since Vogel Paolo BASSO 1.0
 */
function vogelpaolobasso_custom_header_fonts() {
	
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'vogelpaolobasso_custom_header_fonts' );


/**
 * Style the header text displayed on the blog.
 *
 * get_header_textcolor() options: 515151 is default, hide text (returns 'blank'), or any hex value.
 *
 * @since Vogel Paolo BASSO 1.0
 */
 
 function vogelpaolobasso_header_style(){
 
 }
 
 /**
 * Style the header image displayed on the Appearance > Header admin panel.
 *
 * @since Vogel Paolo BASSO 1.0
 */
 
 function vogelpaolobasso_admin_header_style(){
 }
 
 
/**
 * Output markup to be displayed on the Appearance > Header admin panel.
 *
 * This callback overrides the default markup displayed there.
 *
 * @since Vogel Paolo BASSO 1.0
 */
 
 function twentytwelve_admin_header_image(){
 
 }