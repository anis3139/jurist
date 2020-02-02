  <?php 
/*
* Template Name: Contact
*/
?>

  <?php get_header(); ?>

  <?php get_template_part("/page-templates/common/hero");
?>



  <section class="ftco-section contact-section">
      <div class="container">
          <div class="row d-flex mb-5 contact-info">
              <div class="col-md-12 mb-4">
                  <h2 class="h3"><?php _e('Contact Information','jurist');?></h2>
              </div>
              <div class="w-100"></div>
              <div class="col-md-3" id="jurist-address">
                  <p><span><?php _e('Contact: ','jurist');?></span><span><?php echo esc_html(get_theme_mod('jurist_address',__('Contact: Khilgoan, Dhaka-1219, Bangladesh','jurist')));?></span></p>
              </div>
              <div class="col-md-3" id="jurist-phone">
                  <p><span><?php _e('Phone: ','jurist');?></span> <a href="tel:<?php echo esc_html(get_theme_mod('jurist_phone',__('00801816366535','jurist')));?>"><?php echo esc_html(get_theme_mod('jurist_phone',__('008801816366535','jurist')));?></a></p>
              </div>
              <div class="col-md-3" id="jurist-email">
                  <p><span><?php _e('Email: ','jurist');?></span> <a href="mailto:<?php echo esc_html(get_theme_mod('jurist_email',__('anis904692@gmail.com','jurist')));?>"><?php echo esc_html(get_theme_mod('jurist_email',__('anis904692@gmail.com','jurist')));?></a></p>
              </div>
              <div class="col-md-3" id="jurist-website">
                  <p><span><?php _e('Website: ','jurist');?></span> <a href="<?php echo esc_html(get_theme_mod('jurist_website',__('http://www.rainyforest.xyz/','jurist')));?>"><?php echo esc_html(get_theme_mod('jurist_website',__('http://www.rainyforest.xyz/','jurist')));?></a></p>
              </div>
          </div>
          <div class="row block-9 justify-content-between">
              <div class="col-lg-6 order-md-last d-flex overflow-hidden">
                 
                  <?php 
                    get_template_part("/page-templates/common/contact-common");
                    ?>

              </div>

              <div class="col-lg-6 d-flex overflow-hidden">
                  <div id="map" class="bg-white">
                      <?php 
                         if ( is_active_sidebar( "google-map" ) ) {
                        dynamic_sidebar( "google-map" );
                        }
                        ?>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <?php 

    get_template_part("/page-templates/common/email");
    ?>

  <?php get_footer();?>
