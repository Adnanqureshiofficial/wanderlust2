<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {
        if(f.fbq) return;

        n = f.fbq = function()
        {
            n.callMethod
                ? n.callMethod.apply(n, arguments)
                : n.queue.push(arguments);
        };

        if(!f._fbq) f._fbq = n;

        n.push = n;
        n.loaded = true;
        n.version = '2.0';
        n.queue = [];

        t = b.createElement(e);
        t.async = true;
        t.src = v;

        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);

    }(
        window,
        document,
        'script',
        'https://connect.facebook.net/en_US/fbevents.js'
    );

    fbq('init', '988178817541676');
    fbq('track', 'PageView');
    </script>
    <!-- End Meta Pixel Code -->
     <script 
  src="https://link.msgsndr.com/js/external-tracking.js"
  data-tracking-id="tk_5b1d02b0a2e74264a61cebb282946a32">
</script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <noscript>
    <img
        height="1"
        width="1"
        style="display:none"
        src="https://www.facebook.com/tr?id=988178817541676&ev=PageView&noscript=1"
        alt=""
    />
</noscript>

<header class="site-header">

    <div class="container header-wrapper">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">

            <img
                src="<?php echo get_template_directory_uri(); ?>/images/bs_assets/bs-logo.svg"
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

            <li><a href="/lip-filler-bs">Lip Filler</a></li>

            <li><a href="/botox-bs">Botox</a></li>

            <li><a href="/radiesse-treatment-bs">Radiesse</a></li>

        </ul>

        <a href="#CTAForm" class="btn " id="mobile-btn" >

            Book Now

        </a>

    </nav>

</div>