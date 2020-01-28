<?php 
/*
* Template Name: About Us
*/
?>
<?php 

$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);
$about_pages_image= wp_get_attachment_image_src($jurist_page_meta['about_image'],'full');
$contact_form_image= wp_get_attachment_image_src($jurist_page_meta['contact_image'],'full');
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
?>

<?php 
get_header();

?>
<?php 

    get_template_part("/page-templates/common/hero");
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


<?php
    $jurist_testimonials= $jurist_page_meta['jurist_testimonial_sections'];
    if($jurist_testimonials):
    ?>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading"><?php _e('Testimonial','jurist');?></span>
                <h2 class="mb-4"><?php _e('Happy Clients','jurist');?></h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php 
                  foreach($jurist_testimonials as $jurist_testimonial):
                  $testimonials_image= wp_get_attachment_image_src($jurist_testimonial['testimonial_image'],'full');
                  ?>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4"><?php echo esc_html($jurist_testimonial['description']);?></p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(<?php echo esc_attr($testimonials_image[0]);?>)"></div>
                                    <div class="pl-3">
                                        <p class="name"><?php echo esc_html($jurist_testimonial['name']);?></p>
                                        <span class="position"><?php echo esc_html($jurist_testimonial['designation']);?></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>





<?php 
$jurist_gallerys= $jurist_page_meta['jurist_gallery'];
if($jurist_gallerys):
?>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
        <?php 
        foreach($jurist_gallerys as $jurist_gallery):
        $gallery_image_small =wp_get_attachment_image_src($jurist_gallery['jurist_gallery_image'],'large'); $gallery_image_large= wp_get_attachment_image_src($jurist_gallery['jurist_gallery_image'],'full');
            
        ?>
            <div class="col-md-2 ftco-animate">
                <a href="<?php echo esc_url($gallery_image_large[0]);?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo esc_attr($gallery_image_small[0]);?>;">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <?php endforeach;?>
        </div>
    </div>
   
</section>
 <?php endif;?>
 
 




<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>
