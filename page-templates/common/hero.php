<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php get_template_directory_uri()?>.'/assets/images/bg_1.jpg';');" data-stellar-background-ratio="0.5">
    <div class="overlay">
        
    </div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-5 bread"><?php the_title();?></h1>
                <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                
            </div>
        </div>
    </div>
</section>
