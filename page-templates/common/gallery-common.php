<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
                       <?php
    $jurist_gallery_posts = new WP_Query( array(
        'post_type' => 'gallery',
        'posts_per_page'      => -1,  
    ) );
            
    if( $jurist_gallery_posts->have_posts() ):
            
    while ( $jurist_gallery_posts->have_posts() ):
        $jurist_gallery_posts->the_post();
        $jurist_gallery_iamge_small=get_the_post_thumbnail_url(null, "large");
        $jurist_gallery_iamge_large=get_the_post_thumbnail_url(null, "full");
    ?>
            <div class="col-md-2 ftco-animate">
                <a href="<?php echo esc_url($jurist_gallery_iamge_large);?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo esc_url($jurist_gallery_iamge_small);?>);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <?php 
            endwhile;
            wp_reset_query();
            endif;
            ?>
        </div>
    </div>
</section>
