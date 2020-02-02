<div class="hero-wrap js-fullheight" style="background-image: url('<?php get_template_directory_uri()?>.'/assets/images/bg_1.jpg';');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate" id="display-sub-heading">
                <div id="front-sub-heading">
                    <?php if(get_theme_mod('jurist_display_sub_heading',1)): ?>
                    <h2 class="subheading text-white" id="display-sub-heading">
                        <?php echo esc_html(get_theme_mod('jurist_front_page_sub_heading',__('Product Liabilty & Personal Injury','jurist')));?>
                    </h2>
                    <?php endif;?>
                </div>
                <h1 class="mb-4 text-white"><?php echo esc_html(bloginfo("description"));?></h1>
            </div>
        </div>
    </div>
</div>

<?php get_template_part("/page-templates/common/featured-posts");?>
