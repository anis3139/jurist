<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist-page-sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
?>

<div class="hero-wrap js-fullheight" style="background-image: url('<?php get_template_directory_uri()?>.'/assets/images/bg_1.jpg';');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading text-white">
                <?php echo apply_filters(the_content(),$jurist_section_description);?>
                </h2>
                <h1 class="mb-4 text-white"><?php echo bloginfo("description");?></h1>
            </div>
        </div>
    </div>
</div>

<?php get_template_part("/page-templates/common/featured-posts");?>

