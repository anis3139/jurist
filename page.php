<?php get_header(); ?>

<?php get_template_part("/page-templates/common/hero");
?>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <?php 
            while(have_posts()):
              the_post();?>
            <div class="col-lg-12 ftco-animate">
                <h2 class="mb-5 text-center"><?php the_title();?></h2>
                <p class="text-center mb-5">
                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("full",array("class"=>"img-fluid"));
                        }
                        ?>
                </p>
               
                <p><?php 
                    the_content();
                    ?>
                </p>

            </div> 
            <?php endwhile;?>

        </div>
    </div>
</section>










<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>
