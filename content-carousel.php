
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    	<ol class="carousel-indicators">
    		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  		</ol>
        
         <div class="carousel-inner">
         
         <?php $the_query= new WP_Query(array('posts_per_page'=>1));?>
         
         <?php while($the_query->have_posts()):?>
         <?php $the_query->the_post();?>
		 <div class="item active">
            	 <?php the_post_thumbnail('thumbnail');?>
      			<div class="carousel-caption">
					<h4><?php the_title();?></h4>
                    <p><?php //the_excerpt()?></p>
      			</div>
    	</div><!--.item .active-->
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
        
 	<?php 
   		$the_query = new WP_Query(array('posts_per_page' => 5,'offset'=>1)); 
   		while ( $the_query->have_posts()): 
   			$the_query->the_post();
  	?>
   			<div class="item">
    			<?php the_post_thumbnail('thumbnail');?>
    			<div class="carousel-caption">
     				<h4><?php the_title();?></h4>
     				<p><?php //the_excerpt();?></p>
    			</div>
   			</div><!-- item -->
      </div><!--.carousel-inner-->
  <?php  endwhile; 
   wp_reset_postdata();
  ?>
          <!-- Controls -->
  		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left"></span>
  		</a>
  		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right"></span>
  		</a>
        
 </div><!--.carousel-->
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.carousel').carousel({
  		interval: 1000	
  	})
});
</script>