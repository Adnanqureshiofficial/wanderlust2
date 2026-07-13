<?php 
/*
Template Name: Lip Filler Landing Page
*/
get_header();

// Define your (Props) Array for Hero Section
$lip_filler_hero_args = [

    'badge_text' => 'LIMITED-TIME MODEL CALL',

    'heading' => 'Be One of Our <em>Selected Lip Filler Models.</em>',

    'description' => 'Natural enhancement. Physician-led treatment. Exclusive pricing for a limited number of qualified patients.',

    'support_text' => 'We\'re looking for a select group of model patients to receive premium lip filler at a special promotional rate while allowing us to document their beautiful results.',

    'main_cta_text' => 'APPLY FOR THE LIP FILLER MODEL CALL',

    'main_cta_url' => '#CTAForm',

    'trust_bullets' => [

        'Physician-Led Treatment',

        'Premium Medical-Grade Fillers',

        'Personalized Lip Mapping',

        'Natural-Looking Results'

    ],

    'card' => [

        'title' => 'Limited-Time Model Call Offer',

        'subtitle' => 'Exclusive Pricing for Qualified Model Patients',

        'pricing' => [

            [

                'label' => 'Half Syringe',

                'price' => '$250',

                'regular_price' => '$300'

            ],

            [

                'label' => 'Full Syringe',

                'price' => '$399',

                'regular_price' => '$450'

            ]

        ],

        'cta_text' => 'APPLY NOW',

        'cta_url' => '#CTAForm'

    ]

];


// Define your (Props) Array for Hero Section
$lip_filler_why_args = [
    'section_badge'    => 'WHY MOBILE',
    'section_title'    => 'Care that adapts to your lifestyle.',
    'section_subtitle' => 'EVERY DETAIL IS DESIGNED TO FEEL CALM, PRIVATE, AND INTENTIONAL — BROUGHT DIRECTLY TO YOU.',
    'cards'            => [
        [
            'number'      => 'I.',
            'title'       => 'Private & Seamless',
            'description' => "Treatment in a space that's already yours — no waiting rooms, no rushing."
        ],
        [
            'number'      => 'II.',
            'title'       => 'Elevated Experience',
            'description' => 'A spa-grade visit with the comfort and pace of a trusted house call.'
        ],
        [
            'number'      => 'III.',
            'title'       => 'Physician-Led Expertise',
            'description' => 'Every injection guided by clinical training, not guesswork.'
        ]
    ]
];



// Social Proof / Image Slider Section
$lip_filler_social_args = [

  'video_url' => get_template_directory_uri() .
        '/assets/images/RADIESSE_VO.mp4',

    'section_tag'   => 'SOCIAL PROOF',

    'section_title' => 'Are you noticing<br>these signs?',

    'sign_list' => [

        'Thinning or flattened lips',

        'Loss of natural lip definition',

        'Uneven shape or asymmetry',

        'Fine lines around the mouth',

        'Lips that feel less full with age'

    ],

    'cta_text' => 'SEE IF YOU QUALIFY',

    'cta_url' => '#CTAForm'

];

// Trust Section
$lip_filler_trust_args = [
    'columns' => [
        // Left Card Configuration
        [
            'section_tag'   => 'TRUST INDICATORS',
            'section_title' => 'Why clients trust us.',
            'trust_list'    => [
                'Experienced, Physician-Led Injectors',
                'Natural, Soft-Volume Results',
                'Premium, Medical-Grade Filler',
                'Comfortable, Private Environment',
                'Personalized Lip Mapping'
            ],
            'cta_text'      => 'BOOK MY APPOINTMENT',
            'cta_url'       => '#CTAForm',
            'cta_class'     => 'btn trust-btn' // Filled primary style classes
        ],
        // Right Card Configuration
        [
            'section_tag'   => 'TRUST INDICATORS',
            'section_title' => 'Effortless, natural volume.',
            'trust_list'    => [
                'Experienced, Physician-Led Injectors',
                'Balanced, Defined Lip Shape',
                'Minimal Downtime',
                'Comfortable, Quick Treatment',
                'Results Tailored To Your Face'
            ],
            'cta_text'      => 'REVEAL YOUR NEW LIPS',
            'cta_url'       => '#CTAForm',
            'cta_class'     => 'btn btn-outline' // Outline layout style class
        ]
    ]
];  



// Define data for the Before/After component
$lip_filler_compare_args = [

    'section_tag'         => 'BEFORE / AFTER',

    'section_title'       => 'Real, natural results.',

    'section_description' => 'Add subtle volume, restore symmetry and enhance your natural lip shape with expert physician-led filler.',

    'gallery_images' => [

        [
            'url' => get_template_directory_uri().'/assets/images/B_ALip/3.png',
            'alt' => 'Lip Filler Result 1'
        ],

        [
            'url' => get_template_directory_uri().'/assets/images/B_ALip/4.png',
            'alt' => 'Lip Filler Result 2'
        ],

        [
            'url' => get_template_directory_uri().'/assets/images/B_ALip/5.png',
            'alt' => 'Lip Filler Result 3'
        ],

        [
            'url' => get_template_directory_uri().'/assets/images/B_ALip/6.png',
            'alt' => 'Lip Filler Result 4'
        ],

    ],

    'cta_text' => 'BOOK MY APPOINTMENT',

    'cta_url'  => '#CTAForm'

];

//Urgency Section
$lip_filler_urgency_args = [
    'section_tag'         => 'URGENT UPDATE',
    'section_title'       => 'Limited Time Lip Filler Offer',
    'section_description' => 'Only <strong>50 vouchers</strong> available this week',
    
    // Developer Property: Pass an ISO Date String for your JS clock parsing engine
    'countdown_date'      => '2026-12-31T23:59:59', 
    
    'label_days'          => 'DAYS',
    'label_hours'         => 'HOURS',
    'label_minutes'       => 'MINUTES',
    'label_seconds'       => 'SECONDS',
    'cta_text'            => 'CLAIM MY VOUCHER NOW',
    'cta_url'             => '#CTAForm'
];


// Define data for the FAQ component
$lip_filler_faq_args = [
    'section_tag'   => 'FAQ',
    'section_title' => 'Frequently asked questions',
    'open_first'    => true, // Configuration parameter to auto-open the first panel
    'faq_items'     => [
        [
            'question' => 'How long does lip filler last?',
            'answer'   => 'Most clients enjoy their results for 6–12 months, depending on the product used, metabolism and lifestyle.'
        ],
        [
            'question' => 'Will my lips look natural?',
            'answer'   => 'Absolutely. Our philosophy is subtle enhancement that complements your facial proportions rather than creating an overfilled appearance.'
        ],
        [
            'question' => 'Is there downtime?',
            'answer'   => 'Most people return to normal activities immediately. Mild swelling usually settles within 24–48 hours.'
        ],
        [
            'question' => "Who performs the injections?",
            'answer'   => 'Every treatment is performed by experienced, physician-led injectors using premium medical-grade products.'
        ],
        [
            'question' => "Half syringe or full syringe — what's the difference?",
            'answer'   => "A half syringe offers subtle enhancement, while a full syringe provides greater volume and definition. During your consultation we'll recommend the best option."
        ]
    ]
];


//  
$lip_filler_cta_args = [
    'section_tag'         => 'CLAIM YOUR LAUNCH SPECIAL',
    'section_title'       => '100% Free Consultation',
    'section_description' => 'Plus physician-led lip mapping with your treatment.',
    
    // Developer Property: Keep the CF7 shortcode string flexible per landing page
    'form_shortcode'      => '[contact-form-7 id="7d8ba4f" title="CTA Landing Page"]'
];
?>


<main>
<?php get_header(); ?>


    <?php  get_template_part( 'template-parts/bs-hero', null, $lip_filler_hero_args ); ?>
        <?php get_template_part( 'template-parts/bs-why-mobile', null, $lip_filler_why_args ); ?>
  <?php get_template_part( 'template-parts/bs-social-proof', null, $lip_filler_social_args ); ?>
<?php get_template_part( 'template-parts/bs-trust', null, $lip_filler_trust_args ); ?>
<?php get_template_part( 'template-parts/bs-before-after', null, $lip_filler_compare_args ); ?>
<?php get_template_part( 'template-parts/bs-urgency', null, $lip_filler_urgency_args );  ?>
<?php get_template_part( 'template-parts/bs-faq', null, $lip_filler_faq_args ); ?>
<?php get_template_part( 'template-parts/bs-final-cta', null, $lip_filler_cta_args ); ?>



</main>

<?php get_footer(); ?>
