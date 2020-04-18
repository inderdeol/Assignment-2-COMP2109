<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/bootstrap.min.css">
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/assets/javascript/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/font-awesome.min.css">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/assets/css/style.css" rel="stylesheet" type="text/css" />

	<?php wp_head(); ?>
    
    <style>
        .blog-header {
            background-color: #d7d7d7 !important; 
            width: 100%;
            position: relative !important;
            z-index: 9999;
            border-bottom:5px solid #e57200;
        }
    </style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead">
        <div class="widescreen">
            
            <div class="site-header blog-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="logo">
                                <a href="<?php echo site_url();?>">
                                    <img src="<?php header_image(); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php
                                wp_nav_menu( array(
                                    'container_class' => 'nav',
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smallscreennav">
            <div class="col-xs-6">
                <a class="logo-image" href="<?php echo site_url();?>">
                    <img src="<?php header_image(); ?>">
                </a>
            </div>
            <div class="col-xs-6">
                <div>
                    <a href="javascript:void(0)" onClick="openLeftMenu()"><span class="smallscreen"><img src="<?php echo get_bloginfo( 'template_directory' );?>/image/menuAditiya.png"></span></a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="left-nav">
            <div class="menu-navbar-close"><a href="javascript:void(0)" onClick="closediv(this)"><img src="<?php echo get_bloginfo( 'template_directory' );?>/image/close.png"></div>
            <?php	
                wp_nav_menu( array(
                    'container_class' => 'menu-navbar',
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    
                ) );
            ?>
        </div>
    </header>
    <div class="clearfix"></div>
	<div id="content" class="site-content">
