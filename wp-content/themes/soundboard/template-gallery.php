<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

        <div id ="content" class="gallery grid_12">
                
                <h1 class="pagetitle"> <?php the_title(); ?> </h1>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                          	                               
                        <?php the_content(); ?> 
                <?php endwhile; endif; ?>    
                
                <div class="clear">
                </div><!-- .clear-->                 
                
                
                
                <?php  
                        global $post;
                        
                        $args = array(
                                        'order' => 'DESC',
                                        'post_type' => 'gallery',
                                        'posts_per_page' => -1 );
                        
                        $loop = new WP_Query( $args );
                        
                        while ( $loop->have_posts() ) : $loop->the_post();
                        
                        $gallery_title = $post->post_title;
                        $gallery_thumb = get_the_post_thumbnail($post->ID, 'square1', array('title' => ''))                               
                ?>     
                           
              <!-- <h2> <?php //echo $gallery_title; ?><!--</h2>-->
               <ul class="gallery">
                        
                                                                                
                                                       <?php 
	                        	
				$images = rwmb_meta( 'gxg_gallery_images', 'type=image&size=square1' );
				
				foreach ( $images as $image )
				    	{
				    echo "<li style='margin-right:10px;'><a class='pretty_image' title='' alt='{$image['caption']}' data-rel='prettyPhoto[pp_gallery]' href='{$image['full_url']}'><img src='{$image['url']}' /></a></li>";
				    	}                     
	                        	?>   
                                                
                       
		<?php       
                        endwhile;
                        
                        // Always include a reset at the end of a loop to prevent conflicts with other possible loops                 
                        wp_reset_query();
                ?>
                </ul>
                <br/>
                <br/>
        </div><!-- #content-->
        
        <div class="clear">
        </div><!-- .clear-->

<?php get_footer(); ?>