<?php
    $jurist_about_posts = new WP_Query( array(
        'post_type' => 'about-us',
        'posts_per_page'      => 1,  
    ) );

 if( $jurist_about_posts->have_posts() ):

    while ( $jurist_about_posts->have_posts() ):
        $jurist_about_posts->the_post();
    ?>


<?php 
$jurist_about_image=get_template_directory_uri().'/assets/images/about.jpg';
$jurist_about_featured_image=get_the_post_thumbnail_url(null, "large");
if(isset($jurist_about_featured_image)){
$jurist_about_image= $jurist_about_featured_image;
$jurist_about_meta = get_post_meta(get_the_ID(),'jurist_about',true);
}
?>


   <section class="ftco-section ftco-no-pt ftco-no-pb">
       <div class="container">
           <div class="row d-flex">
               <div class="col-md-6 d-flex">
                
                   <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(<?php echo esc_url($jurist_about_image);?>);">
                       <a href="#" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                           <span class="icon-play"></span>
                       </a>
                   </div>
               </div>
               <div class="col-md-6 px-5 py-5">
                   <div class="row justify-content-start pt-3 pb-3">
                       <div class="col-md-12 heading-section ftco-animate">
                           <span class="subheading"><?php  echo esc_html($jurist_about_meta['about_sub_title']);?></span>
                           <h2 class="mb-4"><?php the_title();?></h2>
                           <?php the_content();?>
                           <div class="years d-flex">
                               <h4 class="number mr-2" data-number="40"><?php  echo esc_html($jurist_about_meta['experience']);?></h4>
                               <h4>Years of Experienced</h4>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <?php 
            endwhile;
            wp_reset_query();
            endif;
            ?>