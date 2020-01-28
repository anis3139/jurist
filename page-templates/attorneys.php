<?php 
/*
* Template Name: Our Attorneys
*/
?>
<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_attorneys_page_sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
?>
<?php get_header(); ?>

<?php get_template_part("/page-templates/common/hero");
?>


<?php 
$jurist_attorneys=$jurist_page_meta['jurist_attorneys_sections'];
if($jurist_attorneys):
?>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters">
           <?php 
            foreach($jurist_attorneys as $jurist_attorney):            $jurist_attornes_image= wp_get_attachment_image_src($jurist_attorney['jurist_attorneys_image'],'large');
            ?>
            <div class="col-lg-3 col-sm-6">
                <div class="block-2 ftco-animate">
                    <div class="flipper">
                        <div class="front" style="background-image: url(/images/person_1.jpg);">
                            <div class="box">
                                <h2><?php echo esc_html($jurist_attorney['jurist_attorneys_name']); ?></h2>
                                <p><?php echo esc_html($jurist_attorney['jurist_attorneys_designation']); ?></p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p><?php _e('&ldquo;','jurist');?><?php echo esc_html($jurist_attorney['jurist_attorneys_bio']); ?> <?php _e('&ldquo;','jurist');?></p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image align-self-center">
                                    <img src="<?php echo esc_url($jurist_attornes_image[0]); ?> " alt="<?php echo esc_html($jurist_attorney['jurist_attorneys_name']); ?>">
                                </div>
                                <div class="name align-self-center ml-3"><?php echo esc_html($jurist_attorney['jurist_attorneys_name']); ?><span class="position"><?php echo esc_html($jurist_attorney['jurist_attorneys_designation']); ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php endif;?>


<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>