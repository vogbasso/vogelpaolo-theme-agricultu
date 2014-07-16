<?php 
/***
* vogelpaolobasso_post_nav
*/
if(!function_exists('vogelpaolobasso_post_nav')):
		function vogelpaolobasso_post_nav(){
	global $post;
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	if ( ! $next && ! $previous )
		return;
	?>
    
	<ul class="nav-links pager small">

			<?php previous_post_link( '%link', _x( '<li class="previous meta-nav">&larr;</li> %title', 'Previous post link', 'vogelpaolobasso' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <li class="next meta-nav">&rarr;</li>', 'Next post link', 'vogelpaolobasso' ) ); ?>

	</ul><!-- .nav-links -->
	<?php
}
endif;