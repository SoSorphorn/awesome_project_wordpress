<?php 
        
        /*
          Template Name: Page No Title
        */
          
get_header(); ?>
  <div class="row">
   <div class = "col-md-2"></div>
    <div class="col-md-8">
      <?php 
      
     $args = array(
        'type' => 'post',
        'posts_per_page' => 4,
      );
      
      $AllBlog = new WP_Query($args);
        
      if( $AllBlog->have_posts() ):
        
        while( $AllBlog->have_posts() ): $AllBlog->the_post(); ?>
          
          <?php get_template_part('content',get_post_format()); ?>
        
        <?php endwhile;
        
      endif;
  
          
      ?>
    </div>
    <div class = "col-md-2">
      <!-- <?php get_sidebar(); ?> -->
    </div>
  </div>
<?php get_footer(); ?>
    

