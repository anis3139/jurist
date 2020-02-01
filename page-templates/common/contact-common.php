<?php
    $jurist_booking_posts = new WP_Query( array(
        'post_type' => 'booking',
        'posts_per_page'      => 1,  
    ) );
 if( $jurist_booking_posts->have_posts() ):
    while ( $jurist_booking_posts->have_posts() ):
        $jurist_booking_posts->the_post();
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_booking',true);
?>
<div class="col-lg-6 order-md-last d-flex justify-content-center">
                        <?php 
                       if($jurist_page_meta['booking_shortcode']){
                       echo do_shortcode($jurist_page_meta['booking_shortcode']);
                        };
                        ?>
</div>
<?php 
endwhile;
wp_reset_query();
endif;
?>
