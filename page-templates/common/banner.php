<?php 
global $jurist_section_id;
$jurist_section_meta= get_post_meta($jurist_section_id,'jurist_banner_sections',true);
$jurist_banner_image= get_template_directory_uri().'/assets/images/bg_1.jpg';
if(isset($jurist_section_meta['banner_image'])){
$jurist_banner_image= wp_get_attachment_image_src($jurist_section_meta['banner_image'],'full');
}


$jurist_section= get_post($jurist_section_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;

?>
     
     
     <div class="hero-wrap js-fullheight" style="background-image: url(<?php echo esc_url( $jurist_banner_image[0]);?>);"  data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading"><?php echo esc_html($jurist_section_description);?></h2>
            <h1 class="mb-4"><?php echo bloginfo("description");?></h1>
            <p><a href="#" class="btn-custom mr-md-4">Get Legal Advice <span class="ion-ios-arrow-forward"></span></a> <a href="#" class="btn-custom">Request A Quote <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>
