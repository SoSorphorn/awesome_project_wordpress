<?php 
        
        /*
          Template Name: Page No Title
        */
          
get_header(); ?>
  <div class="row">
   <div class = "col-md-2"></div>
    <div class="col-md-8">
      <?php 
        
        $lastBlog = new WP_Query('type=post&posts_per_page=1');
        
        if( $lastBlog->have_posts() ):
          
          while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
            
            <?php get_template_part('content',get_post_format()); ?>
          
          <?php endwhile;
          
        endif;
        
        wp_reset_postdata();
      
      ?> 
    </div>
     <div class = "col-md-2"></div>
  </div>

  <div class = "row">
    <div class = "col-md-2"></div>
    <div class="col-md-8">

      <?php 
      
      if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>
          
          <?php get_template_part('content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
      
      //PRINT OTHER 2 POSTS NOT THE FIRST ONE
      $args = array(
        'type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1,
      );
      
      $lastBlog = new WP_Query($args);
        
      if( $lastBlog->have_posts() ):
        
        while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
          
          <?php get_template_part('content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
      
      wp_reset_postdata();
          
      ?>
      <hr>
      <?php
        
      //PRINT ONLY TUTORIALS
      $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
        
      if( $lastBlog->have_posts() ):
        
        while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
          
          <?php get_template_part('content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
      
      wp_reset_postdata();
          
      ?>
    </div>
    <div class = "col-md-2">
      <!-- <?php get_sidebar(); ?> -->
    </div>
  </div>
<?php get_footer(); ?>
    

