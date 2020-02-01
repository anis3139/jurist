<section class="ftco-section">

    <div class="container">
        <div class="row no-gutters d-flex justify-content-center">


    <?php
    $jurist_practice_posts = new WP_Query( array(
        'post_type' => 'practice',
        'posts_per_page'      => -1,  
    ) );
            
    if( $jurist_practice_posts->have_posts() ):
            
    while ( $jurist_practice_posts->have_posts() ):
        $jurist_practice_posts->the_post();
    ?>



            <div class="col-md-3 text-center">
                <div class="practice-area border-b no-border-l ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                       
                        <span class="picon <?php
                                            $jurist_practice_meta = get_post_meta(get_the_ID(),'jurist_practice',true);
                                            echo esc_attr($jurist_practice_meta['icon']);
                                            ?>"></span>
                    </div>
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <p>
                        
				      <?php echo esc_html(wp_trim_words(get_the_excerpt(),16));?>
				      
                    </p>
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
