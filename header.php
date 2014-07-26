<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Vogel Paolo BASSO
 * @since Vogel Paolo BASSO 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--<link href="//bloginfo('stylesheet_url');" rel="stylesheet"> -->

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
-->
    <!-- Bootstrap -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  -->  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!--  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
    <script src="js/dropdown.js"></script>
-->
<?php wp_head(); ?>
 </head>
<body <?php body_class(); ?>>
    <div id="site-page" class="container">	
    	<header id="site-header" class="masthead" role="banner">
			<nav id="site-header-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div id="site-header-1" class="row navbar-inverse">
				<?php wp_nav_menu(array(
					'menu'				=>'primary',
                	'theme_location'    => 'primary',
                	'depth'             => 3,
                	'container'         => 'div',
                	'container_class'   => 'collapse navbar-collapse',
        			'container_id'		=> 'bs-example-navbar-collapse-1',
                	'menu_class'        => 'nav navbar-nav',
                	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                	'walker'            => new wp_bootstrap_navwalker())); ?><!-- #site-header-1 -->
				</div><!--#site-header-1-->
				<div id="site-header-2" class="row">
					<div class="container">
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/images/header/logo1_NEW-OK.png';?>" class="img-responsive logo"/></a>
					<form class="navbar-form navbar-left " role="search">
                    	<div class="form-group">
                        	<input type="text" class="form-control " placeholder="Search" size="60%">
                        </div>
                        <button type="submit" class="btn btn-default">Rechercher</button>
					</form> 
					</div>
				</div><!-- #site-header-2 -->	
			</nav>
	 
      		<!--<nav id="site-header-navBar" class="navbar navbar-default navbar-fixed-top " role="navigation">	
                <div class="container-fluid navbar-inverse">
            		<?php /*wp_nav_menu(array(
						'menu'				=>'primary',
                		'theme_location'    => 'primary',
                		'depth'             => 3,
                		'container'         => 'div',
                		'container_class'   => 'collapse navbar-collapse',
        				'container_id'		=> 'bs-example-navbar-collapse-1',
                		'menu_class'        => 'nav navbar-nav ',
                		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                		'walker'            => new wp_bootstrap_navwalker())); */?>
                </div>
                <div class="row">
					<div class="container">
						<a  class="navbar-brand" href="<?php //echo home_url(); ?>"><img src="<?php //echo get_stylesheet_directory_uri().'/images/header/logo1_NEW-OK.png';?>" class="img-responsive logo"/></a>    
						<form class="navbar-form navbar-left " role="search">
                    	<div class="form-group">
                        	<input type="text" class="form-control " placeholder="Search" size="100%">
                        </div>
                         <button type="submit" class="btn btn-default">Rechercher</button>
						</form> 
					</div>
                </div>   
            </nav>-->   
        </header><!-- #site-header -->
        
        <div id="main" class="container"> 
