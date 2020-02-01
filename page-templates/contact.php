  <?php 
/*
* Template Name: Contact
*/
?>
  <?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_contact_page_sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
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
              <div class="col-md-3">
                  <p><span><?php _e('Address:','jurist');?></span> <?php echo esc_html($jurist_page_meta['jurist_contact_address']);?></p>
              </div>
              <div class="col-md-3">
                  <p><span>Phone:</span> <a href="tel:<?php echo esc_attr($jurist_page_meta['jurist_contact_phone']);?>"><?php echo esc_html($jurist_page_meta['jurist_contact_phone']);?></a></p>
              </div>
              <div class="col-md-3">
                  <p><span>Email:</span> <a href="mailto:<?php echo esc_attr($jurist_page_meta['jurist_contact_email']);?>"><?php echo esc_html($jurist_page_meta['jurist_contact_email']);?></a></p>
              </div>
              <div class="col-md-3">
                  <p><span>Website</span> <a href="<?php echo esc_url($jurist_page_meta['jurist_contact_website']);?>"><?php echo esc_html($jurist_page_meta['jurist_contact_website']);?></a></p>
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
