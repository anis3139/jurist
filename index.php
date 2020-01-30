 <?php get_header(); ?>

<?php get_template_part("/page-templates/common/blog-hero");
?>

<?php 
$saneem_layout_class="col-md-8";
$saneem_layout_class_second="col-md-6 col-lg-6 mb-4 mb-lg-6";
if(!is_active_sidebar("sidebar-blog")){
    $saneem_layout_class="col-md-12";
    $saneem_layout_class_second="col-md-4 col-lg-4 mb-4 mb-lg-4";
};

?>


 <section class="ftco-section bg-light">
     <div class="container">
         <div class="row d-flex">
             <?php 
                if(is_active_sidebar("sidebar-blog")):
            ?>
            <div class="col-md-4">
                <?php 
                         if ( is_active_sidebar( "sidebar-blog" ) ) {
                        dynamic_sidebar( "sidebar-blog" );
                            }
                          ?>
            </div>
             <?php endif; ?>
            <div class="<?php echo $saneem_layout_class; ?> row">
            <?php 
                while(have_posts()):
                the_post();
                    ?>
             <div class="<?php echo $saneem_layout_class_second; ?> d-flex ftco-animate">
                 <div class="blog-entry justify-content-end">
                     <div class="text p-4 float-right d-block">
                         <a href="<?php the_permalink();?>">
                                    <?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("large",array("class"=>"img-fluid"));
                        }
                        ?>
                                </a>
                                <h2 class="font-size-regular"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                                <div class="meta mb-4"><em><?php echo the_author_posts_link();?></em><span class="mx-2">&bullet;</span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a><span class="mx-2">&bullet;</span> <a href="#"><?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></a></div>
                                <p><?php echo wp_trim_words(get_the_content(),30);?></p>
                                <p><a href="<?php the_permalink();?>"><?php _e('Continue Reading...','jurist');?></a></p>
                     </div>
                 </div>
             </div>
              <?php endwhile;?>
             </div>
            
         </div>
     </div>
     <div class="container paginations">
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-8">
            <?php the_posts_pagination(
                    array(
                        screen_reader_text=>" ",
                    )
                );?>
        </div>
    </div>
</div>
 </section>










 <?php 

    get_template_part("/page-templates/common/email");
    ?>

 <?php get_footer();?>
