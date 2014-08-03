<?php if(is_home()):?>
	<li id="post-<?php the_ID();?>" <?php post_class('media');?>>		
    	<?php if(has_post_thumbnail()):?>
        	<span class="pull-left"><?php the_post_thumbnail('thumbnail',array('class'=>'media-object'));?></span>
        <?php endif;?>
        <div class="media-body small">
            <h4 class="entry-title media-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4><!--.entry-title-->
            <p class="entry-content"><?php the_excerpt();?></p><!--.entry-content-->
			<p class="home-author"><?php the_date(); ?> par <?php the_author();?></p>
		</div>
 	</li>
 	
<?php elseif(is_single()):?>    
   <article id="post-<?php the_ID();?>"<?php post_class('row');?>> 
      <div class="block-center">
         <header class="entry-header single-header page-header">
         	<h3 class="text-primary text-center"><?php the_title(); ?></h3>
         </header>
					
         		<div id="article-single-content" class="text-justify thumbnail">
         			<?php the_post_thumbnail('large');?>
         			<div id="article-single-content-text" class="container-fluid">
						<p ><?php the_content();?></p>
					</div>
         		</div>
         		<footer class="entry-footer single-footer text-left">
         			<?php //the_author();?>
         		</footer>
         	</div><!--.block-center-->
   </article>
         
         <?php elseif(is_category()):?>
   	<li id="post-<?php the_ID();?>" <?php post_class('media');?>>		
    	<?php if(has_post_thumbnail()):?>
        	<span class="pull-left"><?php the_post_thumbnail('thumbnail',array('class'=>'media-object'));?></span>
            <?php endif;?>
            <div class="media-body small">
             	<h4 class="entry-title media-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4><!--.entry-title-->
            	<p class="entry-content"><?php the_excerpt();?></p><!--.entry-content-->
                <p class="category-author"><?php the_author(); ?></p>
            </div>
 	</li>
   
        <?php endif;?>   
 
