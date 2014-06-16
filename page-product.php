<?php
/*
Template Name: SINGLE PRODUCT PAGE
*/
?>
<?php get_header(); ?>
<div class="container add-top add-height ">
    <div class="row">
      <div class="col-md-12">
        <?php the_title(); ?>
      </div>
    </div>

      <div class="row">
      <div class="col-md-12">
      <h1 class="category">Our Products</h1>  
      <div class="row">
    <?php $sideposts1 = new WP_Query('post_type=product&showposts=4'); ?>
    <?php if ( $sideposts1->have_posts() ) : while ( $sideposts1->have_posts() ) : $sideposts1->the_post(); ?>
         <?php $descdesc = get_post_meta($post->ID, 'description', true); ?>
         
        <div class="swiper-slide col-md-4">
        <div class="row inner pevivabox">
        <a href="<?php the_permalink();?>">
       
        <h3><?php the_title(); ?></h3>
          <p class="desc">
            <?php
                        if($descdesc != '') {
            ?>
            
                            <?php echo $descdesc;?>
          <?php } ?>

          </p>
          </a>
      </div>
       </div>


    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>

    <?php wp_reset_query(); ?>
          </div>
           
  </div>
  </div>
</div>
<?php get_footer(); ?>