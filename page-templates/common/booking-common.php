<?php 
$jurist_banner_image=get_template_directory_uri().'/assets/images/bg_2.jpg';
?>
    <section class="ftco-consultation ftco-section img" style="background-image: url(
       <?php echo $jurist_banner_image;?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
                    <span class="subheading"><?php _e('Booking an Appointment','jurist')?></span>
                    <h2 class="mb-4"><?php _e('Free Consultation','jurist')?></h2>
                    <?php get_template_part("/page-templates/common/contact-common");?>
                </div>
            </div>
        </div>
    </section>