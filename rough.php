<?php 
/**
* Template Name: Rough
*/
?>


<?php get_header();?>
  <?php 

                    get_template_part("/page-templates/common/hero");
                ?>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Practice Areas</span>
                <h2 class="mb-4">Practice Areas</h2>
            </div>
        </div>
        <div class="row no-gutters d-flex justify-content-center">
            <?php 

                    get_template_part("/page-templates/common/practice");
                ?>
        </div>
    </div>
</section>
<?php get_footer();?>