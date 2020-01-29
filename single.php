<?php get_header(); ?>

<?php get_template_part("/page-templates/common/blog-hero");
?>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <?php 
            while(have_posts()):
              the_post();?>
            <div class="col-lg-8 ftco-animate">
                <p>
                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
                        ?>
                </p>
                <h2 class="mb-3 text-center"><?php the_title();?></h2>
                <p><?php 
                    the_content();
                    wp_link_pages();
                    ?>
                </p>
                <div class="post-pagination pt-5">
                    <h3 class="bg-primary text-white"><?php _e('Next & Previous Post');?></h3>
                    <?php 
                    next_post_link();
                    echo "<br/>";
                    previous_post_link();
                    ?>
                </div>

                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <?php echo get_the_tag_list();?>
                    </div>
                </div>

                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio mr-5">
                        <?php echo get_avatar( get_the_author_meta( "ID"));?>
                    </div>
                    <div class="desc">
                        <h3><?php echo get_the_author_meta( "display_name" ); ?></h3>
                        <p><?php echo get_the_author_meta( "description" ); ?></p>
                    </div>
                </div>


                <div class="pt-5 mt-5">

                    <div class="related-post pt-5">
                        <?php if ( function_exists( "the_field" ) ) : ?>
                        <div>
                            <h1><?php _e( "Related Posts", "jurist" ); ?></h1>
                            <?php
                            $related_posts = get_field( "related_posts" );
                            $jurist_rp      = new WP_Query( array(
                               'post__in' => $related_posts,
                           'orderby'  => 'post__in',
                           ) );
                         while ( $jurist_rp->have_posts() ) {
                         $jurist_rp->the_post();
                      ?>
                            <a href="<?php the_permalink();?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <?php
                           }
                           
                          wp_reset_query();
                        ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="pt-5 s-comments-box">

                        <?php
                        if(!post_password_required()){
                            comments_template();
                        }
                        ?>
                    </div>

                </div>

            </div> <!-- .col-md-8 -->
            <?php endwhile;?>
            <div class="col-lg-4 sidebar ftco-animate">
               <div class="sidebar-box">
                    <?php
                if(is_search()){
                    ?>
                    <h3><?php _e("You searched for","jurist") ?>: <?php the_search_query(); ?></h3>
                    <?php
                }
                ?>
                    <?php
                echo get_search_form();
                ?>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3><?php _e('Categories','jurist');?></h3>
                         <a href="<?php the_permalink();?>"><?php echo get_the_category_list();?></a>
                    </div>
                </div>


                <div class="sidebar-box ftco-animate">
                    <?php 
                         if ( is_active_sidebar( "sidebar-1" ) ) {
                        dynamic_sidebar( "sidebar-1" );
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->










<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>
