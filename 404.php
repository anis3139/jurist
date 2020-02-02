
<?php get_header(); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/images5.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay">
        
    </div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                 <h1 class="search"><?php _e('Search Results...','jurist');?></h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
         
            <div class="col-lg-12 ftco-animate">
               <h1 class="text-uppercase" data-aos="fade-up" data-aos-delay="300">
    <?php
        _e( "Sorry! We couldn't find what you were looking for", "saneem" );
   ?>
</h1>

            </div> 
            

        </div>
    </div>
</section> 










<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>
