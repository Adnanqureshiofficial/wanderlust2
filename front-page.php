<?php 
/*
Template Name: Lip Filler Landing Page
*/
get_header();

// Define your (Props) Array for Hero Section
$lip_filler_hero_args = [
    'badge_text'       => 'Limited Time Offer',
    'heading'          => 'Fuller lips,<br><em>naturally</em> you.',
    'description'      => 'Lip filler creates soft, natural-looking volume and definition that feels effortless — mapped to your face, delivered by a physician.',
    'main_cta_text'    => 'BOOK MY LIP FILLER CONSULTATION',
    'main_cta_url'     => '#CTAForm',
    'voucher_text'     => 'Only <span>50 vouchers</span> available this week',
    'trust_bullets'    => [
        'LICENSED PROFESSIONALS',
        'MEDICAL-GRADE FILLER',
        'NATURAL RESULTS'
    ],
    'package_title'    => 'Lip Filler Package',
    'package_subtitle' => 'Physician-led | Personalized | Minimal downtime',
    'pricing_tiers'    => [
        [ 'label' => 'Half Syringe', 'price' => '$300' ],
        [ 'label' => 'Full Syringe', 'price' => '$450' ]
    ],
    'package_features' => [
        'Natural Results',
        'Medical Grade Botox',
        'Licensed Professionals'
    ],
    'card_cta_text'    => 'CLAIM MY VOUCHER',
    'card_cta_url'     => '#CTAForm'
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


//Social Proof Section
$lip_filler_social_args = [
    // Build the dynamic theme asset URL path here
    'image_url'     => get_template_directory_uri() . '/assets/images/bs_social_proof.png',
    'image_alt'     => 'Lip Filler Results Presentation',
    'section_tag'   => 'SOCIAL PROOF',
    'section_title' => 'Are you noticing<br>these signs?',
    'sign_list'     => [
        'Thinning or flattened lips',
        'Loss of natural lip definition',
        'Uneven shape or asymmetry',
        'Fine lines around the mouth',
        'Lips that feel less full with age'
    ],
    'cta_text'      => 'SEE IF YOU QUALIFY',
    'cta_url'       => '#CTAForm'
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
    'section_tag'          => 'BEFORE / AFTER',
    'section_title'        => 'Real, natural results.',
    'section_description'  => 'Add subtle volume, restore symmetry and enhance your natural lip shape with expert physician-led filler.',
    'after_image_url'      => get_template_directory_uri() . '/assets/images/bs_after_lipfill.png',
    'after_image_alt'      => 'Lip Filler Treatment After Results',
    'before_image_url'     => get_template_directory_uri() . '/assets/images/bs_before_lipfill.png',
    'before_image_alt'     => 'Lip Filler Treatment Before Condition',
    'before_label'         => 'Before', // Fallback defaults handled in template code
    'after_label'          => 'After',
    'drag_hint_text'       => '← Drag Left & Right To Compare →',
    'cta_text'             => 'BOOK MY APPOINTMENT',
    'cta_url'              => '#CTAForm'
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
