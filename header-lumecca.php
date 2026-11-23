<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

    <!-- msgsndr analytics Go High Level Tracker  -->
     <script 
  src="https://link.msgsndr.com/js/external-tracking.js"
  data-tracking-id="tk_5b1d02b0a2e74264a61cebb282946a32">
</script>


<!-- Microsoft Clarity Tracking -->
<?php if ( is_page_template( 'botox-landing-page-bs.php' ) ) : ?>

<script type="text/javascript">
(function(c,l,a,r,i,t,y){
    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window, document, "clarity", "script", "xy3v9ni58t");
</script>

<?php elseif ( is_page_template( 'radiesse-landing-page-bs.php' ) ) : ?>

<script type="text/javascript">
(function(c,l,a,r,i,t,y){
    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window, document, "clarity", "script", "xy4k6m80dv");
</script>

<?php elseif ( is_page_template( 'laser-hair-removal-bs.php' ) ) : ?>

<script type="text/javascript">
(function(c,l,a,r,i,t,y){
    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window, document, "clarity", "script", "xy4kpkyitp");
</script>

<?php elseif ( is_page_template( 'lip_filler_landing_bs.php' ) ) : ?>

<script type="text/javascript">
(function(c,l,a,r,i,t,y){
    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window, document, "clarity", "script", "xy4jloc0nx");
</script>

<?php endif; ?>


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

            <li><a href="/botox-bs">Xeomin</a></li>

            <li><a href="/radiesse-treatment-bs">Radiesse</a></li>
            <li><a href="/laser-hair-removal-bs">Laser Hair Removal</a></li>
            <li><a href="/weightloss-bs">Weight Loss Program</a></li>

        </ul>

        <a href="#CTAForm" class="btn " id="mobile-btn" >

            Book Now

        </a>

    </nav>

</div>

<script>
    const menuToggle = document.querySelector(".menu-toggle");
const mobileMenu = document.querySelector(".mobile-menu");
const closeBtn = document.querySelector(".menu-close");

function openMenu() {
    mobileMenu.classList.add("active");
    menuToggle.classList.add("active");
    document.body.style.overflow = "hidden";
}

function closeMenu() {
    mobileMenu.classList.remove("active");
    menuToggle.classList.remove("active");
    document.body.style.overflow = "";
}

menuToggle.addEventListener("click", () => {

    if (mobileMenu.classList.contains("active")) {
        closeMenu();
    } else {
        openMenu();
    }

});

closeBtn.addEventListener("click", closeMenu);

document.querySelectorAll(".mobile-menu a").forEach(link => {

    link.addEventListener("click", closeMenu);

});


</script>