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
            <div class="col-md-7 text-center heading-section ftco-animate" >
                <span class="subheading" id="practice-area"><?php echo esc_html(get_theme_mod('practice_area',__('Practice Areas','jurist')));?></span>
                <h2 class="mb-4" id="practice-areas"><?php echo(get_theme_mod('practice_areas',__('Practice Areas','jurist')));?></h2>
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
            <span class="subheading" id="our-attorneys"><?php echo esc_html(get_theme_mod('our_attorneys',__('Our Attorneys','jurist')));?></span>
            <h2 class="mb-4" id="our-attorney"><?php echo esc_html(get_theme_mod('our__attorney',__('Our Legal Attorneys','jurist')));?></h2>
        </div>
    </div>
    <?php get_template_part("/page-templates/common/attorneys-common");?>
</div>

<?php get_template_part("/page-templates/common/booking-common");?>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <span class="subheading" id="c-subheading"><?php echo esc_html(get_theme_mod('c_subheading',__('Explore Case Studies','jurist')));?></span>
                <h2 class="mb-4" id="c-heading"><?php echo esc_html(get_theme_mod('c_heading',__('1000+ Completed Cases Successfully','jurist')));?></h2>
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
