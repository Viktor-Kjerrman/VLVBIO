<?php
/*
Template Name: PAGE DISTRIBUTORS
*/
?>
<?php get_header(); ?>
<div class="container add-top add-height ">

<div class="row">
  <div class="row">
  <div class="col-md-12">
    <div class="col-md-12 pevivabox">
       <h1><?php the_title(); ?></h1>
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
              <?php
               $linkTitle = get_post_meta( get_the_ID(), 'linktitle', true );
                if( ! empty( $linkTitle ) ) {
                 ?>
                    <h1> <?php echo $linkTitle; ?></h1>
               <?php 
                }
                else 
                  {
                    echo '<h1>LINKS</h1>';
                  }
                    ?>
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
         </div>
         

    </div>
<?php get_footer(); ?>