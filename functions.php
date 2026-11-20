<?php

function bs_wanderlust_assets() {

    // Load the existing landing page CSS and JS on other pages only
    if ( ! is_page_template('lummeca-ipl-bs.php') ) {

        wp_enqueue_style(
            'wanderlust-bs-main',
            get_template_directory_uri() . '/assets/css/bs-style.css',
            [],
            '1.0'
        );

        wp_enqueue_script(
            'wanderlust-script',
            get_template_directory_uri() . '/assets/js/bs-script.js',
            [],
            '1.0',
            true
        );

    }

    // Load only the Lumecca stylesheet on the Lumecca template
    if ( is_page_template('lummeca-ipl-bs.php') ) {

        wp_enqueue_style(
            'wanderlust-lumecca',
            get_template_directory_uri() . '/assets/css/lumecca.css',
            [],
            '1.0'
        );

    }

}

add_action('wp_enqueue_scripts', 'bs_wanderlust_assets');


// to be used iin live env
// function bs_wanderlust_assets() {
//     // Only load these assets if the page is using one of your 3 templates
//     if ( is_page_template('lip-filler-page.php') || is_page_template('template-landing-two.php') || is_page_template('template-landing-three.php') ) {
        
//         wp_enqueue_style(
//             'wanderlust-bs-main',
//             get_template_directory_uri() . '/assets/css/bs-style.css',
//             [],
//             '1.0'
//         );

//         wp_enqueue_script(
//             'wanderlust-script',
//             get_template_directory_uri() . '/assets/js/bs-script.js',
//             [],
//             '1.0',
//             true
//         );

//         wp_enqueue_script(
//             'before-after',
//             get_template_directory_uri() . '/assets/js/bs-before-after.js',
//             array(),
//             '1.0',
//             true
//         );
//     }
// }  
// add_action('wp_enqueue_scripts', 'bs_wanderlust_assets');
