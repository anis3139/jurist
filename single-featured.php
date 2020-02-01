<?php 
get_header();
?>
<?php 
    get_template_part("/page-templates/common/hero");
?>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <?php 
            while(have_posts()):
              the_post();?>
            <div class="col-lg-8 order-md-last ftco-animate">
                <p>
                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
?>
                </p>
                <h2 class="mb-3"><?php _e('Overview:','jurist'); ?></h2>
                <p><?php 
                    the_content();
                    wp_link_pages();
                    ?></p>
                <p><a href="<?php site_url('/contact');?>" class="btn btn-primary"><?php _e('Request Free Consultation','jurist');?></a></p>


                
            </div> 
            <?php endwhile;?>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <?php 
                         if ( is_active_sidebar( "sidebar-1" ) ) {
                        dynamic_sidebar( "sidebar-1" );
                    }
                    ?>
            </div>

        </div>
    </div>
</section> <!-- .section -->
                <div class="row mt-5 pt-5 no-gutters">
                    <div class="col-md-12">
                        <h2 class="mb-4 font-weight-bold"><?php _e('Our Legal Advisors','jurist')?></h2>
                    </div>
                    <?php get_template_part("/page-templates/common/attorneys-common");?>
                </div>
<?php 
    get_template_part("/page-templates/common/email");
    ?>
<?php get_footer();?>
