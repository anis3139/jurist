<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'case_study_page_sections',true);
?>
<section class="ftco-section">
   <?php 
    $jurist_portfolios=$jurist_page_meta['case_study_sections'];
    if($jurist_portfolios): 
    ?>
    <div class="container">
        <div class="row">
           <?php 
            foreach($jurist_portfolios as $jurist_portfolio):
            $jurist_portfolio_image= wp_get_attachment_image_src($jurist_portfolio['Portfolio_image'],'large');
            ?>
            <div class="col-md-4 case-study ftco-animate">
                <div class="case img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo esc_url($jurist_portfolio_image[0]); ?>);">
                    <div class="text text-center">
                        <h3><a href="<?php the_permalink();?>"><?php echo esc_html($jurist_portfolio['portfolio_title']); ?></a></h3>
                        <span><?php echo esc_html($jurist_portfolio['portfolio_Fields']); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endif;?>
</section>