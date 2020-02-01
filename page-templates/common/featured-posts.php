<section class="ftco-section ftco-no-pb ftco-no-pt services-section mb-1">
    <div class="container-fluid px-md-5 py-3">
        <div class="row py-4 d-flex">
            <?php
    $jurist_featured_posts = new WP_Query( array(
        'post_type' => 'featured',
        'posts_per_page'      => 4,  
    ) );

 if( $jurist_featured_posts->have_posts() ):
$jc=01;
 while ( ($jurist_featured_posts->have_posts()) && ($jc<=4)):
     $jurist_featured_posts->the_post();
    ?>

            <div class="col-md-3 services align-self-stretch ftco-animate">
                <div class="media-body">
                    <span class="num">
                       <?php  
                        echo "0$jc";
                        $jc++;
                        ?>
                       
                    </span>
                    <h3 class="heading mb-3 text-white"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <p class="text-primary text-white"><?php echo esc_html(wp_trim_words(get_the_excerpt(),12));?></p>
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
