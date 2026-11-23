<?php

function bs_wanderlust_assets() {

    if ( is_page_template( array( 'lumecca-ipl-bs.php', 'morpheus-landing-page-bs.php' ) ) ) {

        // Load Lumecca stylesheet on Lumecca and Morpheus landing pages
        wp_enqueue_style(
            'wanderlust-lumecca',
            get_template_directory_uri() . '/assets/css/lumecca.css',
            [],
            '1.0'
        );

    } else {

        // Load general assets on all other pages
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

}
add_action( 'wp_enqueue_scripts', 'bs_wanderlust_assets' );



// The Below enqueue function was preventing our CTA buttons to scroll to the form section and was reloading page so i added a if condition to not enqueue this on our tempalte pages.


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
// How did i find this?
// i checked the network tab after the clicking the cta button. so when it reloaded and fetched the document again. I checked the initiator who initiated the request and found this ajax function
// Enqueue AJAX script
// add_action('wp_enqueue_scripts', 'enqueue_treatment_ajax_scripts');
// function enqueue_treatment_ajax_scripts() {

//     // Don't load on Blare Studio landing pages
//     if (
//         is_page_template('templates/radiesse-landing-page-bs.php') ||
//         is_page_template('templates/lip_filler_landing_bs.php') ||
//         is_page_template('templates/botox-landing-page-bs.php')
//     ) {
//         return;
//     }

//     wp_enqueue_script('treatment-ajax-filter', get_template_directory_uri() . '/assets/script/treatment-ajax-filter.js', array('jquery'), '1.0', true);
    
//     wp_localize_script('treatment-ajax-filter', 'treatment_ajax', array(
//         'ajaxurl' => admin_url('admin-ajax.php'),
//         'nonce' => wp_create_nonce('treatment_filter_nonce')
//     ));
    
//     // Add loading spinner CSS
//     wp_add_inline_style('your-theme-style', '
//         .treatment-grid-flex.loading {
//             min-height: 300px;
//             position: relative;
//         }
//         .loading-spinner {
//             text-align: center;
//             padding: 50px;
//             grid-column: 1 / -1;
//         }
//         .spinner {
//             border: 4px solid #f3f3f3;
//             border-top: 4px solid #3498db;
//             border-radius: 50%;
//             width: 40px;
//             height: 40px;
//             animation: spin 1s linear infinite;
//             margin: 0 auto 20px;
//         }
//         @keyframes spin {
//             0% { transform: rotate(0deg); }
//             100% { transform: rotate(360deg); }
//         }
//         .ajax-error {
//             text-align: center;
//             padding: 50px;
//             grid-column: 1 / -1;
//             color: #e74c3c;
//         }
//     ');
// }