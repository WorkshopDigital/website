<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 */

get_header(); ?>

  
<!--==============================content=================================-->

<?php while ( have_posts() ) : the_post(); ?>
  
<section id="content">
  
	<div class="container">
    
    	<div class="row">
        
        	<div class="span12">
        
        		<h1><?php the_title();?></h1>
            
            </div>
            
        </div> <!-- /row1 -->
        
            
        <div class="row">
         
         	<div class="span8">
                
          		<div class="content">
         
       				<?php the_content();?>
               
         		</div> 
				
        	</div><!-- /span8 -->
            
            <div class="span4">
            
            	<?php if ( has_post_thumbnail() ) { ?><span class="page-icon"><?php the_post_thumbnail('page-icon'); ?></span><?php } ?>

                <div id="sidebar-contact">

				<?php get_sidebar(); ?>
                    
				</div>
      
 			</div> <!-- /span4 -->
       
       </div> <!-- /row2 -->
      
	</div> <!-- /container -->
  
</section>

 <?php endwhile; // end of the loop. ?>
 


<?php get_footer(); ?>
