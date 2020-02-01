<?php get_header(); ?>

<?php get_template_part("/page-templates/common/hero");
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
