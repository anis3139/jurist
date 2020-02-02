   <section class="ftco-section testimony-section">
       <div class="container">
           <div class="row justify-content-center mb-5">
               <div class="col-md-7 text-center heading-section ftco-animate">
                   <span class="subheading" id="t-subheading"><?php echo esc_html(get_theme_mod('t_subheading',__('Testimonial','jurist')));?></span>
                   <h2 class="mb-4" id="t-heading"><?php echo esc_html(get_theme_mod('t_heading',__('Happy Clients','jurist')));?></h2>
               </div>
           </div>
           <div class="row ftco-animate">
               <div class="col-md-12">
                   <div class="carousel-testimony owl-carousel ftco-owl">
                       <?php
    $jurist_testimonials_posts = new WP_Query( array(
        'post_type' => 'testimonials',
        'posts_per_page'      => -1,  
    ) );
            
    if( $jurist_testimonials_posts->have_posts() ):
            
    while ( $jurist_testimonials_posts->have_posts() ):
        $jurist_testimonials_posts->the_post();
        $jurist_testimonials_iamge=get_the_post_thumbnail_url(null, "large");
        $jurist_testimonials_meta= get_post_meta(get_the_ID(),'jurist_testimonials',true);
    ?>
                       <div class="item">
                           <div class="testimony-wrap py-4">
                               <div class="text">
                                   <p class="mb-4"><?php echo esc_html(wp_trim_words(get_the_excerpt(),20));?></p>
                                   <div class="d-flex align-items-center">
                                       <div class="user-img" style="background-image: url(<?php echo esc_url($jurist_testimonials_iamge);?>)"></div>
                                       <div class="pl-3">
                                           <p class="name"><?php the_title();?></p>
                                           <span class="position">
                                            <?php  echo esc_html($jurist_testimonials_meta['t_designation']);?>
                                           </span>
                                       </div>
                                   </div>
                               </div>

                           </div>

                       </div>
            <?php 
            endwhile;
            wp_reset_query();
            endif;
            ?>
                   </div>
               </div>
           </div>
       </div>
   </section>
