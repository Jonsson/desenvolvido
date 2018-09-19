<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php wp_title();?></title>
        
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css" />
        
        <?php wp_head();?>
        
        <div class="container geral">
            <div class="row">
                <div class="col-md-3 logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" class="logo">
                    <git /a>
                </div>
                <div class="col-md-9 titulo">
                    <h1><?php bloginfo('name')?></h1>
                    <p><?php bloginfo('description')?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                $args = array(
                'theme_location' => 'header-menu',
                'menu' => 'Menu 1'
                );
                wp_nav_menu( $args );
            ?>
            </div>
        </div>
    </head>
    <body>
