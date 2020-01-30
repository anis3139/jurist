
<?php
$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_about_page_sections',true);
$jurist_gallerys= $jurist_page_meta['jurist_gallery'];
if($jurist_gallerys):
?>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <?php 
        foreach($jurist_gallerys as $jurist_gallery):
        $gallery_image_small =wp_get_attachment_image_src($jurist_gallery['jurist_gallery_image'],'large'); $gallery_image_large= wp_get_attachment_image_src($jurist_gallery['jurist_gallery_image'],'full');
            
        ?>
            <div class="col-md-2 ftco-animate">
                <a href="<?php echo esc_url($gallery_image_large[0]);?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo esc_attr($gallery_image_small[0]);?>;">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <?php endforeach;?>
        </div>
    </div>

</section>
<?php endif;?>

