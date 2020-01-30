<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);
$about_pages_image= wp_get_attachment_image_src($jurist_page_meta['about_image'],'full');
?>
   

   
   <section class="ftco-section ftco-no-pt ftco-no-pb mt-1 about-image">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img jabout-us d-flex align-self-stretch align-items-center justify-content-end" style="background-image:url(<?php echo esc_url($about_pages_image[0]);?>);">
                    <a href="<?php esc_url($jurist_page_meta['video_link'][0]);?>" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 px-5 py-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading"><?php echo esc_html($jurist_page_meta['about_sub_title']);?></span>
                        <h2 class="mb-4"><?php echo esc_html($jurist_page_meta['about_title']);?></h2>
                        <p>
                            <?php echo esc_html($jurist_page_meta['about_description']);?>
                        </p>
                        <div class="years d-flex">
                            <h4 class="number mr-2" data-number="<?php echo esc_html($jurist_page_meta['experince']);?>"><?php _e('0','jurist');?></h4>
                            <h4><?php _e('Years of Experienced','jurist');?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
