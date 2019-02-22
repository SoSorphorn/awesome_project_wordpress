<?php 
        
        /*
          Template Name: Page No Title
        */
          
get_header(); ?>
  <div class= "row">
   <div class= "col-md-4">
   </div>
   <div class= "col-md-4">
    <?php 
    
    if( have_posts() ):
      
      while( have_posts() ): the_post(); ?>
        
        <h1>Hello this is my portfolio</h1>
        
        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
        
        <p><?php the_content(); ?></p>
        
        <hr>
      
      <?php endwhile;
      
    endif;  
    ?>
   </div>
   <div class= "col-md-4">
   </div>
  </div> 
   <?php get_footer(); ?>
    