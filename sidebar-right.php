<?php 
// sidebar right


if ( is_active_sidebar( 'sidebar-right' ) ) : 
?>
	<div id="sidebar-left" class="sidebar-container col-md-2" role="complementary">
		<div class="sidebar-inner">
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-right' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>