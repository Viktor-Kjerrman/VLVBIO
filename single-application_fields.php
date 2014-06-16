<?php
/*
Template Name: SINGLE ApplicationField
*/
?>
<?php get_header(); ?>
<div class="container add-top add-height ">

    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12 pevivabox border-bottom-big">
        <div class="col-md-8">
           <h1><?php the_title(); ?></h1>
           <div class="prodno">
              <?php 
                $prod_key = get_post_meta( get_the_ID(), 'prodno', true );

                 if( ! empty( $prod_key ) ) {
                      echo $prod_key;
                  }
            ?>
           </div>
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
    <div class="row">
      <div class="col-md-8">
      <div class="col-md-12 pevivabox">

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php the_content( );?>

      <!-- post -->
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
      <?php endif; ?>
        </div>
      </div>
     <div class="col-md-4 sidebar">
       
        <?php 
            $key_1_value = get_post_meta( get_the_ID(), 'links', false );

             if( ! empty( $key_1_value ) ) {

              ?>
               <div class="col-md-12 pevivabox each-section">
                    <h1>LINKS</h1>
              <?php

            foreach ($key_1_value as $link) {
                $curId = $link['ID'];
                  echo '<div class="links">
                           <a href="'. get_permalink($link['ID']) .'">
                            <span class="one-link">'. get_the_title($link['ID']) .'</span>
                        </a>
                          
                        </div>';
                }
                ?>
                      </div>
                <?php
              }
        ?>
  
         <?php 
            $key_2_value = get_post_meta( get_the_ID(), 'document', false );

            if( ! empty( $document ) ) { ?>

             <div class="col-md-12 pevivabox each-section">

             <h1>DOCUMENTS</h1>
              <?php
                foreach ($key_2_value as $document) {
                    $curId = $document['ID'];
                      echo '<div class="documents">
                               <a href="'.  wp_get_attachment_url($curId) .'">
                                <span class="one-links">'. get_the_title($document['ID']) .'</span>
                            </a>
                              
                            </div>';
                }
              ?> 
                 </div>
                 <?php
              }
        ?>

       
      </div>
    </div>

    <div class="row fadein-col">
      <div class="col-md-12">
        <h1 class="category">Other applicationfields</h1>  
            <div class="row">
              <?php 
              $exclude = get_the_ID();
              $sideposts1 = new WP_Query('post_type=application_fields&showposts=4'); 
              ?>
             <?php if ( $sideposts1->have_posts() ) : while ( $sideposts1->have_posts() ) : $sideposts1->the_post(); ?>   
              <?php   if($exclude != get_the_ID()) { ?>
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
          <?php } ?>
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