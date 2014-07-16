<?php 
/*
* THE HOME PAGE
*
*/
?>
<?php get_header(); ?>
 <!--le container général du site web-->
<div id="container" class="content-area">
	<?php get_sidebar('left');?>
    <div id="content" class="site-content col-md-8" role="main">
	<?php //get_template_part('content','carousel');?>
	<?php if(have_posts()):?>
    	<ul class="media-list ">
		<?php while(have_posts()): the_post(); get_template_part('content',get_post_format());endwhile;?> 
		</ul>
	<?php else: get_template_part('content','none');endif;?>
    </div><!--#content .site-content-->
    <?php get_sidebar('right');?>
</div><!--#container .content-area-->
<?php get_footer();?>