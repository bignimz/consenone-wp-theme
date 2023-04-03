<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Right Arrow Image -->
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-transformed.png" alt="" class="img-fluid home-arrow-right">

<div id="page" class="site-page">

    <!-- Topbar -->
    <section class="topbar-home py-3 text-light">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="topbar-left">Consen One IT Consultancy.</div>
                <div class="topbar-right">Follow Us: 
                    <span class="top-icon">fb</span>
                    <span class="top-icon">ig</span>
                    <span class="top-icon">lk</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Site Header -->
    <header class="home-header site-header py-3" id="masthead" role="banner">
        <div class="container header-container">
                <!-- Site Logo -->
            <div class="site-branding">
                <?php 
                    if(function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    }
                ?>
                <?php if($logo): ?>	
                    <a href="<?php bloginfo('url'); ?>" class="logo"><img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo" ></a>
                <?php else: ?>
                    <h2 class="site-title">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                </h2>
                <?php endif; ?>

            </div>

            <!-- Add Nav Menu -->
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                    $args = [
                        'menu'              => 'main-menu',
                        'theme_location'    => 'main-menu',
                        'container'         => '',
                        'items_wrap'        => '<ul id="%1$s" class="nav">%3$s</ul>'
                    ];
                    
                    wp_nav_menu($args); 
                ?>
            
                <a href="#" class="btn nav-btn">Request a Quote</a>

                <button id="menu" class="menu-btn" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </nav>
        </div>
    </header>
    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <!-- Site Logo -->
            <div class="site-branding">
                <?php 
                    if(function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    }
                ?>
                <?php if($logo): ?>	
                    <a href="<?php bloginfo('url'); ?>" class="logo"><img class="mb-3 mx-auto logo" src="<?php echo $logo[0]; ?>" alt="logo" ></a>
                <?php else: ?>
                    <h4 class="site-title">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h4>
                <?php endif; ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php
                $args = [
                    'menu'              => 'main-menu',
                    'theme_location'    => 'main-menu',
                    'container'         => '',
                    'items_wrap'        => '<ul id="%1$s" class="mobile-nav">%3$s</ul>'
                ];
                
                wp_nav_menu($args); 
            ?>
        
            <a href="#" class="btn nav-btn">Request a Quote</a>
        </div>
    </div>

    <div class="home-header-image" 
    style="
    background-image: linear-gradient(to right, rgba(5,10,30,1), rgba(5,10,30,.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.jpg')
    ">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title mb-4">The Technology Planning <span class="highlight">Guide</span></h1>
            <p class="hero-text my-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam dolorum mollitia ipsum ut quaerat.</p>
            <a href="" class="btn nav-btn">
                <i class="fa fa-cog" aria-hidden="true"></i> Discover More</a>
        </div>
    </div>
    </div>
    <!-- Site Content -->
    <div class="site-content py-5">