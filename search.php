 <?php get_header(); ?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay">
        
    </div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                 <h1 class="search"><?php _e('Search Results...','jurist');?></h1>
            </div>
        </div>
    </div>
</section>



  <div class="col-md-4 pt-5 offset-md-4">
        <?php
        echo get_search_form();
        ?>
        
        
        <?php
        if(is_search()){
        ?>
        <h3><span  class="text-primary"><?php _e("You searched for:","jurist") ?></span> <?php the_search_query(); ?></h3>
        <?php
         }
        ?>
        
    </div>
    <div class="posts single-page">
        <?php
        if ( ! have_posts() ):
            ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 p-3 bg-gradient-warning text-danger text-center">
                    <h4>
                        <?php _e('No result found','jurist'); ?>
                    </h4>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 blog-content">
                    <?php 
                    while(have_posts()):
                        the_post();?>
                    <div class="row mb-5">
                    </div>
                    <p class="lead">
                        <?php 
                    the_content();
                    wp_link_pages();
                    ?>
                    </p>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>









 <?php 

    get_template_part("/page-templates/common/email");
    ?>

 <?php get_footer();?>
