<?php 
/*
* Template Name: About-us
*/
?>

<?php 
get_header();
?>
<?php 
    get_template_part("/page-templates/common/hero");
    ?>
<?php 
    get_template_part("/page-templates/common/about-common");
?>
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
<?php 
    get_template_part("/page-templates/common/testimonials-common");
?> 
<?php 
    get_template_part("/page-templates/common/gallery-common");
?>
<?php 
    get_template_part("/page-templates/common/email");
    ?>
<?php get_footer();?>
