<?php
/*
Template Name: Radiesse Landing Page
*/

get_header();

/*=========================================================
= HERO
=========================================================*/

$radiesse_hero_args = [

    'heading' => 'Lift. Restore.<br><em>Rejuvenate.</em> Naturally.',

    'description' =>
        'Rediscover firmer, smoother, more youthful-looking skin with physician-led Radiesse treatments that restore lost volume and stimulate your body\'s natural collagen production.',

    'main_cta_text' => 'BOOK MY RADIESSE CONSULTATION',

    'main_cta_url' => '#CTAForm',

    'voucher_text' =>
        '✨ <span>Limited-Time Offer</span>',

    'trust_bullets' => [

        'Physician-Led Care',

        'FDA-Approved Radiesse®',

        'Natural Collagen Builder',

        'Long-Lasting Results'

    ],

    'package_title' => 'Radiesse Rejuvenation Package',

    'pricing_tiers' => [

        [

            'label' => 'Special Offer',

            'price' => '$599',

            'class' => 'price-large'

        ],

        [

            'label' => 'Regularly',

            'price' => '$750',

            'class' => 'price-old'

        ],

        [

            'label' => '',

            'price' => 'Save $150 Today',

            'class' => 'price-highlight'

        ]

    ],

    'package_features' => [

        'Physician-Led Treatment',

        'Long-Lasting Results',

        'Natural Collagen Stimulation'

    ],

    'card_cta_text' => 'BOOK MY CONSULTATION',

    'card_cta_url' => '#CTAForm'

];


/*=========================================================
= WHY RADIESSE
=========================================================*/

$radiesse_why_args = [

    'section_tag' => 'WHY RADIESSE',

    'section_title' => "Aging isn't just about wrinkles.",

    'section_description' =>
        'Over time, your skin loses collagen, elasticity, and support. Radiesse doesn\'t simply fill what\'s missing. It helps your body rebuild what time has taken away, creating natural volume and firmer skin that continues improving over time.',

    'cards' => [

        [

            'number' => 'I.',

            'title' => 'Immediate Lift',

            'description' =>
                'Restore lost facial volume the moment treatment is complete.'

        ],

        [

            'number' => 'II.',

            'title' => 'Stimulates Your Own Collagen',

            'description' =>
                'Radiesse continues working beneath the skin long after your appointment, encouraging your body to produce natural collagen.'

        ],

        [

            'number' => 'III.',

            'title' => 'Physician-Led Precision',

            'description' =>
                'Every treatment is carefully customized to restore balance, structure, and youthful contours while maintaining a natural appearance.'

        ]

    ]

];

/*=========================================================
= TRUST
=========================================================*/

$radiesse_trust_args = [

    'columns' => [

        [

            'section_tag' => 'WHY PATIENTS CHOOSE US',

            'section_title' => 'Why patients choose Wanderlust',

            'trust_list' => [

                'Physician-Led Injections',

                'FDA-Approved Radiesse®',

                'Natural Collagen Stimulation',

                'Immediate Volume Restoration'

            ],

            'cta_text' => 'BOOK TODAY',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn trust-btn'

        ],

        [

            'section_tag' => 'YOUR EXPERIENCE',

            'section_title' => 'Comfortable, Safe & Professional',

            'trust_list' => [

                'Long-Lasting Results',

                'Personalized Facial Mapping',

                'Comfortable, Private Treatment',

                'Designed Around Your Natural Features'

            ],

            'cta_text' => 'BOOK MY CONSULTATION',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn btn-outline'

        ]

    ]

];
/*=========================================================
= BEFORE & AFTER
=========================================================*/
$radiesse_before_after_args = [

    'section_tag' => 'BEFORE & AFTER',

    'section_title' => 'Subtle Changes. Beautiful Difference.',

    'section_description' =>
        'Restore youthful contours, improve skin firmness, and enhance facial structure with results that continue improving over time.',

    'before_image_url' =>
        get_template_directory_uri() . '/assets/images/before_radiesse.png',

    'after_image_url' =>
        get_template_directory_uri() . '/assets/images/after_radiesse.png',

    'before_image_alt' => 'Before Radiesse',

    'after_image_alt' => 'After Radiesse',

    'before_label' => 'Before',

    'after_label' => 'After',

    'drag_hint_text' => 'Drag the slider to compare.',

    'cta_text' => 'BOOK MY APPOINTMENT',

    'cta_url' => '#CTAForm'

];


/*=========================================================
= EDUCATION
=========================================================*/

$radiesse_education_args = [

    'section_tag' => 'HOW RADIESSE WORKS',

    'section_title' => 'Radiesse is more than a filler.',

    'description' =>
        'Unlike traditional fillers that simply add volume, Radiesse works as a collagen biostimulator, helping your body naturally rebuild support beneath the skin. That means immediate improvement today and continued rejuvenation in the months ahead.',

    'points' => [

        'Provides immediate facial volume.',

        'Stimulates your body’s natural collagen.',

        'Improves skin firmness over time.',

        'Long-lasting rejuvenation with natural-looking results.'

    ],

    'image_url' =>
        get_template_directory_uri() .
        '/assets/images/how_radiesse_works.png',

    'image_alt' =>
        'Radiesse Treatment'

];


/*=========================================================
= TREATMENT AREAS
=========================================================*/

$radiesse_treatment_areas_args = [

    'section_tag' => 'COMMON TREATMENT AREAS',

    'section_title' => 'Where Radiesse Works Best',

    'section_description' =>
        'Restore lost volume and improve facial structure in the areas where aging is most noticeable.',

    'areas' => [

        'Cheeks',

        'Jawline',

        'Chin',

        'Smile Lines',

        'Marionette Lines',

        'Hands'

    ],

    'image_url' =>
        get_template_directory_uri() .
        '/assets/images/radiesse-treatment-areas.webp',

    'image_alt' =>
        'Radiesse Treatment Areas'

];

/*=========================================================
= PAIN POINTS
=========================================================*/

$radiesse_pain_points_args = [

    'section_tag' => 'IS RADIESSE RIGHT FOR YOU?',

    'section_title' => 'Have you started noticing these changes?',

    'items' => [

        'Your cheeks look flatter than they used to.',

        'Your jawline isn’t as defined.',

        'Smile lines appear deeper.',

        'Your face looks tired, even after resting.',

        'You want natural rejuvenation without surgery.'

    ],

    'cta_text' => 'SEE IF RADIESSE IS RIGHT FOR YOU',

    'cta_url' => '#CTAForm'

];


/*=========================================================
= SOCIAL PROOF
=========================================================*/

    $radiesse_social_proof_args = [

    'section_tag'   => 'PATIENT STORY',

    'section_title' => 'Real Patients. Real Confidence.',

    'image_url' => get_template_directory_uri() .
        '/assets/images/bs_social_proof_radiesse.png',

    'image_alt' => 'Radiesse patient testimonial',

    'sign_list' => [

        "“I didn't want to look different. I just wanted to look like myself again. Radiesse gave me exactly that.”",

        '⭐⭐⭐⭐⭐ Google Review',

        

    ],

    'cta_text' => 'BOOK MY CONSULTATION',

    'cta_url' => '#CTAForm'

];

/*=========================================================
= RESULTS TIMELINE
=========================================================*/

$radiesse_results_timeline_args = [

    'section_tag' => 'RESULTS TIMELINE',

    'section_title' => 'What to expect after treatment',

    'section_description' =>
        'Know what happens after your Radiesse treatment and how your results continue to improve over time.',

    'timeline_items' => [

        [

            'day' => 'Immediately',

            'title' => 'Instant Volume',

            'description' =>
                'Enjoy immediate improvement in facial volume and contour.',

            'icon' => '✓'

        ],

        [

            'day' => 'Weeks 4–8',

            'title' => 'Collagen Production Begins',

            'description' =>
                'Your body naturally begins producing new collagen beneath the skin.',

            'icon' => '✓'

        ],

        [

            'day' => 'Months 2–6',

            'title' => 'Continued Rejuvenation',

            'description' =>
                'Skin becomes firmer, smoother and naturally refreshed as collagen develops.',

            'icon' => '✓'

        ],

        [

            'day' => 'Up to 18 Months',

            'title' => 'Long-Lasting Results',

            'description' =>
                'Enjoy long-lasting rejuvenation with continued collagen support.',

            'icon' => '✓'

        ]

    ]

];


/*=========================================================
= PRICING OFFER
=========================================================*/

$radiesse_pricing_offer_args = [

    'section_tag' => 'LIMITED-TIME OFFER',

    'section_title' => 'Save $150 Today.',

    'section_description' =>
        'Limited promotional appointments available. Reserve your physician-led consultation before this offer ends.',

    'regular_price' => '$750',

    'offer_price' => '$599',

    'offer_note' =>
        'Luxury results. Limited availability.',

    'cta_text' => 'CLAIM MY $599 OFFER',

    'cta_url' => '#CTAForm'

];


/*=========================================================
= COMPARISON TABLE
=========================================================*/

$radiesse_comparison_args = [

    'section_tag' => 'WHY RADIESSE IS DIFFERENT',

    'section_title' => 'Traditional Fillers vs Radiesse',

    'left_heading' => 'Traditional Filler',

    'right_heading' => 'Radiesse',

    'rows' => [

        [

            'left'  => 'Adds temporary volume',

            'right' => 'Restores volume while stimulating collagen'

        ],

        [

            'left'  => 'Immediate results',

            'right' => 'Immediate + long-term improvement'

        ],

        [

            'left'  => 'Doesn’t improve skin quality',

            'right' => 'Improves skin firmness and elasticity'

        ],

        [

            'left'  => 'Shorter duration',

            'right' => 'Results can last up to 18 months'

        ]

    ],

    'cta_text' => 'BOOK MY CONSULTATION',

    'cta_url'  => '#CTAForm'

];


/*=========================================================
= FAQ
=========================================================*/

$radiesse_faq_args = [

    'section_tag' => 'FAQ',

    'section_title' => 'Frequently Asked Questions',

    'faq_items' => [

        [

            'question' =>
                'What makes Radiesse different from traditional fillers?',

            'answer' =>
                'Radiesse not only restores lost volume but also stimulates your body\'s natural collagen production for longer-lasting rejuvenation.'

        ],

        [

            'question' =>
                'How long do results last?',

            'answer' =>
                'Many patients enjoy results lasting up to 18 months depending on the treatment area and individual response.'

        ],

        [

            'question' =>
                'Is there downtime?',

            'answer' =>
                'Most patients return to normal activities the same day with only mild swelling or bruising.'

        ],

        [

            'question' =>
                'Who performs the treatment?',

            'answer' =>
                'Every Radiesse treatment is performed by a licensed physician.'

        ],

        [

            'question' =>
                'When will I see results?',

            'answer' =>
                'You will notice immediate improvement after treatment with continued collagen production enhancing results over the following months.'

        ],

        [

            'question' =>
                'Does Radiesse look natural?',

            'answer' =>
                'Yes. Our philosophy focuses on restoring youthful structure while preserving your natural facial appearance.'

        ]

    ]

];


/*=========================================================
= FINAL CTA
=========================================================*/

$radiesse_final_cta_args = [

    'section_tag' => 'LIMITED-TIME OFFER',

    'section_title' => 'Luxury Results. Limited-Time Pricing.',

    'section_description' =>
        'Experience the collagen-stimulating treatment trusted for natural-looking rejuvenation while enjoying $150 in savings. Appointments are limited.',

     'form_shortcode' => '[contact-form-7 id="7d8ba4f" title="CTA Landing Page"]'

];

?>

<?php

get_template_part(
    'template-parts/bs-hero',
    null,
    $radiesse_hero_args
);

get_template_part(
    'template-parts/bs-why-mobile',
    null,
    $radiesse_why_args
);

get_template_part(
    'template-parts/bs-pain-points',
    null,
    $radiesse_pain_points_args
);

get_template_part(
    'template-parts/bs-social-proof',
    null,
    $radiesse_social_proof_args
);


get_template_part(
    'template-parts/bs-trust',
    null,
    $radiesse_trust_args
);

get_template_part(
    'template-parts/bs-before-after',
    null,
    $radiesse_before_after_args
);

get_template_part(
    'template-parts/bs-education',
    null,
    $radiesse_education_args
);

get_template_part(
    'template-parts/bs-treatment-areas',
    null,
    $radiesse_treatment_areas_args
);


get_template_part(
    'template-parts/bs-results-timeline',
    null,
    $radiesse_results_timeline_args
);

get_template_part(
    'template-parts/bs-pricing-offer',
    null,
    $radiesse_pricing_offer_args
);


get_template_part(
    'template-parts/bs-comparison-table',
    null,
    $radiesse_comparison_args
);

get_template_part(
    'template-parts/bs-faq',
    null,
    $radiesse_faq_args
);

get_template_part(
    'template-parts/bs-final-cta',
    null,
    $radiesse_final_cta_args
);

get_footer();
?>