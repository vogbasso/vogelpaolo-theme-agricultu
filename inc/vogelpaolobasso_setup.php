<?php
  /**
   * Vogel Paolo BASSO setup.
   *
   * Sets up theme defaults and registers the various WordPress features that
   * Vogel Paolo BASSO support
   *
   * @uses load_theme_textdomain() For translation/localization support.
   * @uses add_editor_style() To add a Visual Editor stylesheet.
   * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
   * 	custom background, and post formats.
   * @uses register_nav_menu() To add support for navigation menus.
   * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
   *
   * @since Vogel Paolo BASSO 1.0
   */   
   function vogelpaolobasso_setup(){
	  /*
		  * Makes Vogel Paolo BASSO available for translation.
		  *
		  s* Translations can be added to the /languages/ directory.
		  * If you're building a theme based on Vogel Paolo BASSO, use a find and replace
		  * to change 'vogelpaolobasso' to the name of your theme in all the template files.
	   */
	load_theme_textdomain( 'vogelpaolobasso', get_template_directory() . '/languages' );
  
  	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
	
		// This theme uses wp_nav_menu() in one location.
		
	//register_nav_menu( 'primary', __( 'Primary Menu', 'vogelpaolobasso' ) );
	register_nav_menus( array('primary' => __( 'Primary Menu', 'vogelpaolobasso'),'secondary'=>__('Secondary Menu','vogelpaolobasso')));
	
	
	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6'	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
  };
  add_action( 'after_setup_theme','vogelpaolobasso_setup' );