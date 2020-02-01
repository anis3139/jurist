<?php 
/**
* Template Name: Landing Page
*/
?>
<?php get_header();?>
<?php 
get_template_part("page-templates/common/landing-page-banner");
?>
<?php 
get_template_part("page-templates/common/about-common");
?>
<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading"><?php _e('Practice Areas','jurist');?></span>
                <h2 class="mb-4"><?php _e('Practice Areas','jurist');?></h2>
            </div>
        </div>
        <div class="row no-gutters d-flex justify-content-center">
            <?php 
                    get_template_part("/page-templates/common/practice-common");
                ?>
        </div>
    </div>
</section>
<div class="attorneys">
    <div class="row justify-content-center">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading"><?php _e('Our Attorney','jurist');?></span>
            <h2 class="mb-4"><?php _e('Our Legal Attorneys','jurist');?></h2>
        </div>
    </div>
    <?php get_template_part("/page-templates/common/attorneys-common");?>
</div>

<?php get_template_part("/page-templates/common/booking-common");?>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <span class="subheading"><?php _e('Explore Case Studies','jurist');?></span>
                <h2 class="mb-4"><?php _e('1000+ Completed Cases Successfully','jurist');?></h2>
            </div>
        </div>
        <?php get_template_part("/page-templates/common/case-common");?>
    </div>
</section>
<?php get_template_part("/page-templates/common/testimonials-common");?>
<?php get_template_part("/page-templates/common/landing-page-blog");?>
<?php get_template_part("/page-templates/common/gallery-common");?>
<?php get_template_part("/page-templates/common/email");?>
<?php get_footer();?>
