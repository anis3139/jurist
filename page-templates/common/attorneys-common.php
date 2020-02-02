<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters">
            <?php
    $jurist_attorneys_posts = new WP_Query( array(
        'post_type' => 'attorneys',
        'posts_per_page'      => -1,  
    ) );

 if( $jurist_attorneys_posts->have_posts() ):

 while ( $jurist_attorneys_posts->have_posts() ):
     $jurist_attorneys_posts->the_post();
$jurist_testimonials_meta = get_post_meta(get_the_ID(),'jurist_attorneys',true);
    ?>

            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(<?php echo esc_url($jurist_attorneys_image);?>);">
                            <div class="box">
                                <h2><?php the_title();?></h2>
                                <p><?php  echo esc_html($jurist_testimonials_meta['attorneys_sub_title']);?></p>
                            </div>
                        </div>
                        <div class="back">
                            <blockquote>
                                <p><?php _e('&ldquo;','jurist');?><?php echo esc_html(wp_trim_words(get_the_excerpt(),27));?><?php _e('     &ldquo;','jurist');?></p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <?php 
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                                    }
                                    ?>
                                </div>
                                <div class="name align-self-center ml-3"><?php the_title();?><span class="position"><?php  echo esc_html($jurist_testimonials_meta['attorneys_sub_title']);?></span></div>
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
</section>
