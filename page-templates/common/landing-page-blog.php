<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Our Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>


        <div class="row d-flex">
            <?php
    $saneem_popular_posts = new WP_Query( array(
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => 1,
        'orderby'             => "comment_count"
    ) );
    while ( $saneem_popular_posts->have_posts() ):
        $saneem_popular_posts->the_post();
    ?>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="<?php the_permalink();?>">
                        <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
                        ?>
                    </a>
                    <div class="text p-4 float-right d-block">
                        <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                        <div class="meta mb-4"><em><?php echo the_author_posts_link();?></em><span class="mx-2">&bullet;</span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a><span class="mx-2">&bullet;</span> <a href="#"><?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></a></div>
                        <p><?php echo wp_trim_words(get_the_excerpt(),20);?></p>
                        <p><a href="<?php the_permalink();?>"><?php _e('Continue Reading...','jurist');?></a></p>
                    </div>
                </div>
            </div>
            <?php 
        endwhile;
        wp_reset_query();
        ?>
        </div>

    </div>
</section>