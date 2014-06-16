<?php
/*
Template Name: DEFAULT PAGE
*/
?>
<?php get_header(); ?>
<div class="container add-top add-height ">

    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 pevivabox border-bottom-big">
        <div class="col-md-8">
           <h1><?php the_title(); ?></h1>
          
           </div>
           <div class="col-md-4">
           <div class="prod-head-img">
           <?php 
                $prod_image = get_post_meta( get_the_ID(), 'productimage', true );

                 if( ! empty( $prod_image ) ) {

                  echo wp_get_attachment_image($prod_image['ID'], full);
                  }
            ?>
            </div>
           </div>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>