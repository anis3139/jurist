
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
        <div class="container py-4">
            <div class="row d-flex justify-content-between jurist-newsletter">
                <div class="col-md-7 ftco-animate d-flex align-items-center">
                    <h2 class="mb-0" style="color:white; font-size: 28px;" id="je-mail"><?php echo esc_html(get_theme_mod('je_mail',__('Subcribe to our Newsletter','jurist')));?></h2>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                           <?php 
                         if ( is_active_sidebar( "newsletter" ) ) {
                        dynamic_sidebar( "newsletter" );
                    }
                    ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>