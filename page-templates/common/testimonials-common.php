
<?php
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);
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
