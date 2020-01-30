<?php 

$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);

$contact_form_image= wp_get_attachment_image_src($jurist_page_meta['contact_image'],'full');
?>
<section class="ftco-consultation ftco-section img mt-1" style="background-image: url(<?php echo esc_url($contact_form_image[0]);?>);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-end">
            <div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
                <span class="subheading sheading"><?php _e('Booking an Appointment','jurist');?></span>
                <h2 class="mb-4"><?php _e('Free Consultation','jurist');?></h2>

                <?php 
                       if($jurist_page_meta['jurist_contact_form_shortcode']){
                       echo do_shortcode($jurist_page_meta['jurist_contact_form_shortcode']);
                            };
                        ?>

            </div>
        </div>
    </div>
</section>