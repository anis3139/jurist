<?php 

$jurist_page_meta= get_post_meta(get_the_ID(),'jurist_practice_area_page_sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
?>





<section class="ftco-section">
    <?php 
$practice_areas=$jurist_page_meta['jurist_practice_area_sections'];
if($practice_areas):
?>
    <div class="container">
        <div class="row no-gutters d-flex justify-content-center">

        <?php 
        foreach($practice_areas as $practice_area ):    
            
        ?>
            <div class="col-md-3 text-center">
                <div class="practice-area border-b no-border-l ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="picon <?php echo esc_attr($practice_area['practice_area_icon']);?>"></span>
                    </div>
                    <h3><a href="<?php the_permalink();?>"><?php echo esc_html($practice_area['practice_area_name']);?></a></h3>
                    <p><?php echo esc_html($practice_area['practice_area_description']);?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php endif;?>
</section>
