<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Vogel Paolo BASSO
 * @since Vogel Paolo BASSO 1.0
 */

get_header(); ?>
1ère étape:
le fichier index représentera la page de base de mon site, avec appel vers les autres pages compte tenu de la page demandé
-home.php
-category.php
-single.php
-page.php
-comment.php
-404.php
-search.php
.........

2ème étape:

Chacune de ces pages, aura un contenu.
le contenu sera appelé suivant son type et le type de la page
-content.php
-content-video.php
-content-aside.php
-content-........php



le main dépend du type de la page, si c'est un home, category, single, video etc...
	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
