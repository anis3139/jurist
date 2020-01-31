 <?php get_header(); ?>

 <?php get_template_part("/page-templates/common/hero");
?>


 <section class="ftco-section bg-light">
         <div class="container">
         <?php the_archive_title('<h2 class="jarchive">','</h2>');?>
        <div class="row">
            <?php 
            while(have_posts()):
              the_post();?>
            <div class="col-lg-12 ftco-animate">
                <h2 class="mb-5 bg-light text-dark text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            </div> 
            <?php endwhile;?>

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
