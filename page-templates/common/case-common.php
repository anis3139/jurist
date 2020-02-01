<section class="ftco-section">

    <div class="container">
        <div class="row">
            <?php
    $jurist_case_studies_posts = new WP_Query( array(
        'post_type' => 'case_studies',
        'posts_per_page'      => -1,  
    ) );
            
    if( $jurist_case_studies_posts->have_posts() ):
            
    while ( $jurist_case_studies_posts->have_posts() ):
        $jurist_case_studies_posts->the_post();
        $jurist_case_study_image=get_the_post_thumbnail_url(null, "large");
    ?>


            <div class="col-md-4 case-study ftco-animate">
                <div class="case img d-flex align-items-center justify-content-center" style="background-image: url( <?php echo esc_url($jurist_case_study_image);?>);">
                    <div class="text text-center">
                        <h3><?php the_title();?></h3>
                        <span> <?php echo esc_html(wp_trim_words(get_the_excerpt(),4));?></span>
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
