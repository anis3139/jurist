<?php 
/**
* Template Name: Landing Page
*/
?>



<?php get_header();?>



<?php 
get_template_part("page-templates/landing-page-banner");

?>

<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);
    get_template_part("/page-templates/common/about-common");
?>



<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Practice Areas</span>
                <h2 class="mb-4">Practice Areas</h2>
            </div>
        </div>
        <div class="row no-gutters d-flex justify-content-center">
            <?php 
$practice_areas=$jurist_page_meta['jurist_practice_area_sections'];
get_template_part("/page-templates/common/practice");
?>
        </div>
    </div>
</section>










<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Our Attorney</span>
                <h2 class="mb-4">Our Legal Attorneys</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <?php 
            get_template_part("/page-templates/common/attorneys-common");
            ?>

        </div>
    </div>
</section>

<?php 

    get_template_part("/page-templates/common/contact-common");
?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <span class="subheading">Explore Case Studies</span>
                <h2 class="mb-4">1000+ Completed Cases Successfully</h2>
            </div>
        </div>
        <?php get_template_part("/page-templates/common/case-common");
?>

    </div>
</section>

<section class="ftco-section testimony-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
            <?php 

    get_template_part("/page-templates/common/testimonials-common");
?> 

            </div>
        </div>
    </div>
</section>

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
                                <p><?php the_excerpt();?></p>
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


<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
           <?php 
            get_template_part("/page-templates/common/gallery-common");
            ?>
        </div>
    </div>
</section>
<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>
