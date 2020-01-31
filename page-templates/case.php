<?php 
/*
* Template Name: Case Study
*/
?>
<?php 
$jurist_page_meta= get_post_meta(get_the_ID(),'case_study_page_sections',true);
$jurist_section= get_post($page_id);
$jurist_section_title= $jurist_section->post_title;
$jurist_section_description= $jurist_section->post_content;
?>
<?php get_header(); ?>

<?php get_template_part("/page-templates/common/hero");
?>
<?php get_header(); ?>

<?php get_template_part("/page-templates/common/case-common");
?>

<?php 

    get_template_part("/page-templates/common/email");
    ?>

<?php get_footer();?>