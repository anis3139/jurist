 
<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist-page-sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;

$jurist_banner_image= get_template_directory_uri().'/assets/images/bg_1.jpg';
if(isset($jurist_page_meta['banner_image'])){
$jurist_banner_image= wp_get_attachment_image_src($jurist_page_meta['banner_image'],'full');
}
?>

<div class="hero-wrap js-fullheight" style="background-image: url(<?php echo esc_url( $jurist_banner_image[0]);?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">
                <h2 class="subheading text-white"><?php echo apply_filters(the_content(),$jurist_section_description);?></h2>
                <h1 class="mb-4 text-white"><?php echo bloginfo("description");?></h1>
            </div>
        </div>
    </div>
</div>

<?php 

$service_headings=$jurist_page_meta['services'];
if($service_headings):
?>
<section class="ftco-section ftco-no-pb ftco-no-pt services-section">
    <div class="container-fluid px-md-5 py-3">
        <div class="row py-4 d-flex">
           <?php 
            foreach($service_headings as $service_heading):
            
            ?>
            <div class="col-md-3 services align-self-stretch ftco-animate">
                <div class="media-body">
                    <span class="num"><?php echo esc_html($service_heading['services_number']);?></span>
                    <h3 class="heading mb-3 text-white"><a href="#"><?php echo esc_html($service_heading['services_heading_title']);?></a></h3>
                    <p class="text-primary text-white"><?php echo esc_html($service_heading['services_heading_subtitle']);?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<?php endif;?>
