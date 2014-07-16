<?php
/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Vogel Paolo BASSO 1.0
 */
 function vogelpaolobasso_widgets_init(){
 	register_sidebar( array(
		'name'          => __( 'Left Widget Area', 'vogelpaolobasso' ),
		'id'            => 'sidebar-left',
		'description'   => __( 'Appears in the left side of the site.', 'vogelpaolobasso' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar(array(
		'name'			=>__('Right Widget Area','vogelpaolobasso'),
		'id'			=>'sidebar-right',
		'description'	=>__('Appears in the right side of the site.','vogelpaolobasso'),
		'before_widget'	=>'<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=>'</aside>',
		'before_title'	=>'<h3 class="widget_title">',
		'after_title'	=>'</h3>'));
 }
	add_action('widgets_init','vogelpaolobasso_widgets_init');