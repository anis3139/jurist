<?php 
$jurist_banner_image=get_template_directory_uri().'/assets/images/bg_1.jpg';
$jurist_featured_image=get_the_post_thumbnail_url(null, "large");
if(isset($jurist_featured_image)){
$jurist_banner_image= $jurist_featured_image;
}
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $jurist_banner_image;?>');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread"><?php the_title();?></h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="<?php home_url();?>"><?php _e('Home','jurist')?> <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="<?php site_url();?>"><?php the_title();?></a><i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>