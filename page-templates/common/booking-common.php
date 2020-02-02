            <?php
             $booking_image_id =get_theme_mod("jurist_booking_image","large");
            ?>
            <section id="booking-image" class="ftco-consultation ftco-section img" style="background-image: url(
       <?php echo esc_url($booking_image_id);?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex justify-content-end">
                        <div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
                            <span class="subheading" id="booking1"><?php echo esc_html(get_theme_mod('booking1',__('Booking an Appointment','jurist')));?></span>
                            <h2 class="mb-4" id="booking2"><?php echo esc_html(get_theme_mod('booking2',__('Free Consultation','jurist')));?></h2>
                            <?php get_template_part("/page-templates/common/contact-common");?>
                        </div>
                    </div>
                </div>
            </section>
