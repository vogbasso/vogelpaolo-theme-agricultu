<?php if(is_home()):?>
	<li id="post-<?php the_ID();?>" <?php post_class('media');?>>		
    	<?php if(has_post_thumbnail()):?>
        	<span class="pull-left"><?php the_post_thumbnail('thumbnail',array('class'=>'media-object'));?></span>
            <?php endif;?>
            <div class="media-body small">
             	<h3 class="entry-title media-heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3><!--.entry-title-->
            	<p class="entry-content"><?php the_excerpt();?></p><!--.entry-content-->
                <p><?php the_author(); ?></p>
            </div>
 	</li>
   
   
<?php elseif(is_single()):?>
		
        
         <article id="post-<?php the_ID();?>" <?php post_class('row');?>> 
      		<div class="block-center">
         		<header class="entry-header single-header">
         			<h3 class="text-primary text-center"><?php the_title(); ?></h3>
         		</header>
         
         		<div class="entry-content single-content text-justify">
                
         			<p><?php the_content();?></p>
         		</div>
         		<footer class="entry-footer single-footer text-left">
         			<?php the_author();?>
         		</footer>
         	</div><!--.block-center-->
         </article>
         
         
         <?php elseif(is_category()):?>
         <li class="list-group-item">
          	 <?php the_post_thumbnail('thumbnail',array('class'=>'col-md-3 image-rounded'))?>;
             <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>	
        	<?php the_excerpt();?> 
            <?php the_author();?>
         </li>
        <?php endif;?>   
 