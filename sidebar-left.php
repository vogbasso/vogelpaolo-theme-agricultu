<?php 
// sidebar left


if ( is_active_sidebar( 'sidebar-left' ) ) : 
?>
	<div id="sidebar-left" class="sidebar-container col-md-2" role="complementary">
		<div class="sidebar-inner"
            <div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-left' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>
