<?php

function bs_wanderlust_assets() {

    // Only load assets on landing page templates
    if (
        ! is_page_template( 'templates/lip_filler_landing_bs.php' ) &&
        ! is_page_template( 'templates/botox-landing-page-bs.php' ) &&
        ! is_page_template( 'templates/radiesse-landing-page-bs.php' )
    ) {
        return;
    }

    wp_enqueue_style(
        'wanderlust-bs-main',
        get_template_directory_uri() . '/assets/css/bs-style.css',
        [],
        '1.0'
    );  

    wp_enqueue_script(
        'wanderlust-script',
        get_template_directory_uri() . '/assets/script/bs-script.js',
        [],
        '1.0',
        true
    );

}

add_action( 'wp_enqueue_scripts', 'bs_wanderlust_assets' );