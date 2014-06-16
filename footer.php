    <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">
            <div class="row">
              <div class="col-md-12">
              <?php bones_main_nav(); ?>
           
              <div class="row">
            <div class="col-md-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
              <?php endif; ?>
            </div>

            <div class="col-md-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div> 

            <div class="col-md-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
              <?php endif; ?>
            </div>

    
            </div> <!-- end col -->
            </div>
          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="text-center">
          <div class="row">
             <div class="col-md-12">
                  &copy; <?php echo date('Y'); ?> <?php /*<?php bloginfo( 'name' ); ?>.*/ ?> PEVIVA
             </div>
           
          </div> <!-- end .row -->
        </div>
      </div>

    </footer> <!-- end footer -->

    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->
  </body>
</html> <!-- end page. what a ride! -->