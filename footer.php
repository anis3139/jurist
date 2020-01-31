
  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
          <div class="row mb-5">
              <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                      <?php 
                         if ( is_active_sidebar( "footer-sidebar-1" ) ) {
                        dynamic_sidebar( "footer-sidebar-1" );
                    }
                    ?>
                      <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md">
                  <div class="ftco-footer-widget mb-4 ml-md-5">
                      <?php 
                         if ( is_active_sidebar( "footer-sidebar-2" ) ) {
                        dynamic_sidebar( "footer-sidebar-2" );
                    }
                    ?>
                  </div>
              </div>
              <div class="col-md">
                  <div class="ftco-footer-widget mb-4">

                      <div class="opening-hours">
                          <?php 
                         if ( is_active_sidebar( "footer-sidebar-3" ) ) {
                        dynamic_sidebar( "footer-sidebar-3" );
                    }
                    ?>
                      </div>
                  </div>
              </div>
              <div class="col-md text-light ">
                  <div class="ftco-footer-widget mb-4 text-light">
                     
                      <div class="block-23 mb-3 text-light">
                          <?php 
                         if ( is_active_sidebar( "footer-sidebar-4" ) ) {
                        dynamic_sidebar( "footer-sidebar-4" );
                    }
                    ?>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 row text-center">
                  <div class="col-md-8">
                      <?php echo _e('Copyright ©2020 All rights reserved | This template is made with by  ', 'jurist') ?><a href="http://www.rainyforest.xyz"><?php _e('Anis Arronno','jurist'); ?></a>
                  </div>
                  <div class="col-md-4">
                      <?php _e('Powered by','jurist');?> <a href="http://www.rainyforest.xyz"><?php _e('Rainy Forest','jurist') ;?></a>
                  </div>
              </div>
          </div>
      </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
          <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
          <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>




  <?php wp_footer();?>

  </body>

  </html>
