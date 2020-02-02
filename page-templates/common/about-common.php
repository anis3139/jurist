<section class="ftco-section ftco-no-pt ftco-no-pb mb-5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex" id="about-image">
                <?php
                    $about_image_id =get_theme_mod("jurist_about_image","large");
                    ?>
                <div id="about-url" class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(<?php echo esc_url($about_image_id);?>);">
                    <a href="<?php echo esc_html(get_theme_mod('jurist_about_url',__('https://www.youtube.com/watch?v=MZ552T1vzn8','jurist')));?>" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 px-5 py-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading" id="about-sub-heading"><?php
                    echo esc_html(get_theme_mod('jurist_about_sub_heading',__('Welcome to Jurist','jurist')));
                    ?></span>
                        <h2 class="mb-4" id="about-heading"> <?php
                    echo esc_html(get_theme_mod('jurist_about_heading',__('We Always Fight For Your Justice to Win','jurist')));
                    ?></h2>
                        <div id="about-description"><?php
                    echo apply_filters('the_content', get_theme_mod('jurist_about_description',__('Far far away, behind the word mountains, far from the countries Vokalia and Consonantia

A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.

Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar Grammar.','jurist')));
                    ?></div>


                        <div class="years d-flex" id="about-experiance">
                            <h4 class="number mr-2" data-number="<?php echo esc_html(get_theme_mod('jurist_about_experiance',__('30','jurist')));?>"></h4>
                            <h4><?php _e('Years of Experienced','jurist')?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
