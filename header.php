<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <div class="container header-wrapper">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">

            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/bs-logo.svg"
                alt="<?php bloginfo('name'); ?>">

        </a>

        <!-- <nav class="main-nav">

            <ul>

                <li><a href="/">Lip Filler</a></li>

                <li><a href="/botox">Botox</a></li>

                <li><a href="/radiesse-treatment">Radiesse</a></li>

            </ul>

        </nav> -->

        <a href="#CTAForm" class="btn " id="desktop-btn" >

            Book Now

        </a>

        <!-- Mobile Hamburger -->

        <button class="menu-toggle" aria-label="Toggle Menu">

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>


<!-- Mobile Navigation -->

<div class="mobile-menu">

    <button class="menu-close" aria-label="Close Menu">

        &times;

    </button>

    <nav>

        <ul>

            <li><a href="/">Lip Filler</a></li>

            <li><a href="/botox">Botox</a></li>

            <li><a href="/radiesse-treatment">Radiesse</a></li>

        </ul>

        <a href="#CTAForm" class="btn " id="mobile-btn" >

            Book Now

        </a>

    </nav>

</div>