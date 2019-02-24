</br>
  <div class = "row card content">    
    <div class="row  card-body">
      <?php if( has_post_thumbnail() ): ?>
        <div class="col-xs-12 col-sm-4">
          <div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
        </div>
        <div class="col-xs-12 col-sm-8">
          <?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
          <?php the_category(sprintf('<span class="label-primary"><a href="%s">', esc_url( get_permalink() )),'</a></span>' ); ?>
          <?php the_content(); ?>
        </div>
      <?php else: ?>
        <div class="col-xs-12">
          <?php the_content(); ?>
          <?php the_content(); ?>
          <?php the_category(sprintf('<span class="label-primary"><a href="%s">', esc_url( get_permalink() )),'</a></span>' ); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</br>
