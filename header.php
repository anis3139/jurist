<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid jurist-menu px-md-5 p-2">
            
                <a class="navbar-brand" href="index.html"> <?php if(has_custom_logo()){
                  the_custom_logo();
                }else{
                    echo "<h1><a href='".home_url("/")."'>".get_bloginfo('name')."</a></h1>";
                }
                ?></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> <?php _e('MENU','jurist');?>
                </button>
           
            <div class="collapse navbar-collapse justify-content-xl-end" id="ftco-nav">

                <?php
		             wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 3,
                            'menu_class'      => 'navbar-nav ml-auto text-center',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'         => new WP_Bootstrap_Navwalker(),
                        ) );
		           ?>

            </div>
        </div>
    </nav>
    <!-- END nav -->
