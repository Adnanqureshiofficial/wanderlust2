<?php
/**
 * Template Name: Laser Hair Removal Landing Page By BS
 *
 * Scaffold template generated from the existing Blare Studio architecture.
 * Populate image paths and the three new components as they are implemented.
 */

get_header('landing');

/*-------------------
Pop Up Form
--------------------*/


$laser_popup_args = [

    'section_tag' => 'LIMITED TIME OFFER',

    'popup_title' => 'Ready to Say Goodbye to Shaving?',

    'popup_description' =>
        'Claim your complimentary consultation and receive a personalized laser hair removal treatment plan from our medical professionals.',

     'form_shortcode'=>'[contact-form-7 id="6f75418" title="BS Landing Page Contact Form"]'

];

/*-------------------
Hero Banner
--------------------*/
$laser_banner_args = [

    'offer_headline' => 'Free Consultation + Personalized Treatment Plan',

    'image' => get_template_directory_uri() . '/images/bs_assets/LASER_HAIR_REMOVAL._BANNER.jpg',

    'image_alt' => 'Laser Hair Removal Treatment'

];



/* ======================================================
   HERO
====================================================== */

$laser_hero_args = [
    'badge_text' => 'PERSONALIZED TREATMENT PLAN',
    'heading' => 'Stop Shaving.<br><em>Start Living Smooth.</em>',
    'description' => 'Permanent laser hair reduction that helps eliminate unwanted hair, razor bumps, and ingrown hairs with safe, physician-guided treatments.',
    'support_text' => 'Safe for all skin types using advanced cooling technology.',
    'main_cta_text' => 'REQUEST FREE CONSULTATION',
    'main_cta_url' => '#CTAForm',
    'trust_bullets' => [
        'Permanent Hair Reduction',
        'Safe For All Skin Types',
        'Zero Downtime',
        'Medical Professionals',
        'Advanced Cooling Technology'
    ],
    'card' => [
        'title' => 'Limited Time Consultation',
        'subtitle' => 'Book your personalized treatment plan.',
        'pricing' => [],
        'features' => [
            'Permanent Hair Reduction',
            'Safe Treatment',
            'Advanced Cooling',
            'Medical Professionals'
        ],
        'cta_text' => 'BOOK YOUR SESSION',
        'cta_url' => '#CTAForm'
    ]
];

/* ======================================================
   PAIN POINTS
====================================================== */
$laser_problem_args = [

    'section_tag' => 'COMMON CONCERNS',

    'section_title' => 'Still Shaving Every Week?',

    'cards' => [

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Constant Shaving',
            'description' => 'Hair grows back within days.'
        ],

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Razor Burns',
            'description' => 'Redness, irritation, and sensitive skin after every shave.'
        ],

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Ingrown Hairs',
            'description' => 'Painful bumps that leave marks and discomfort.'
        ],

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Endless Waxing Costs',
            'description' => 'Monthly appointments that never actually solve the problem.'
        ]

    ],

    'bottom_title' => "You don't have a hair problem.",

    'bottom_description' => "You have a temporary solution problem.",

    'cta_text' => 'BOOK MY CONSULTATION',

    'cta_url' => '#CTAForm'

];


/* ======================================================
   WHY WANDERLUST
====================================================== */
$laser_why_args = [
    'section_badge' => 'WHY WANDERLUST',
    'section_title' => 'Why Patients Choose Wanderlust',
    'section_subtitle' => 'Safe physician-guided laser hair removal tailored to your skin and hair type.',
    'cards' => [
        ['number'=>'I.','title'=>'Licensed Medical Professionals','description'=>'Every treatment is performed safely using physician-approved protocols.'],
        ['number'=>'II.','title'=>'Advanced Cooling Technology','description'=>'Comfort-focused treatments designed to minimize discomfort.'],
        ['number'=>'III.','title'=>'Treats Every Area','description'=>'Face, Underarms, Legs Arms, Chest, Back, Bikini, Brazilian.']
    ]
];


$hair_removal_before_after_args = [

    'section_tag' => 'BEFORE & AFTER',

    'section_title' => 'Smooth Skin. Visible Results.',

    'section_description' =>
        'See the transformation with professional laser hair removal. Reduce unwanted hair, minimize ingrown hairs, and enjoy smoother skin after a series of treatments.',

    'gallery_images' => [

        [
            'url' => get_template_directory_uri() . '/images/bs_assets/B_AHair/1.jpg',
            'alt' => 'Laser Hair Removal Before and After Result 1',
             'review' => [
            'name'   => 'Sarah M.',
            'rating' => 5,
            'text'   => 'I started noticing a visible reduction in hair growth after just a few sessions. The treatments were quick, comfortable, and the staff made me feel at ease throughout.'
        ]
        ],

        [
            'url' => get_template_directory_uri() . '/images/bs_assets/B_AHair/2.jpg',
            'alt' => 'Laser Hair Removal Before and After Result 2',
            'review' => [
            'name'   => 'Emily R.',
            'rating' => 5,
            'text'   => 'No more shaving every other day! My skin feels smoother, I have fewer ingrown hairs, and the results look very natural. I only wish I had started sooner.'
        ]
        ],

        [
            'url' => get_template_directory_uri() . '/images/bs_assets/B_AHair/3.jpg',
            'alt' => 'Laser Hair Removal Before and After Result 3',
             'review' => [
            'name'   => 'Jessica T.',
            'rating' => 5,
            'text'   => 'The entire experience was professional from consultation to treatment. The sessions were much faster than I expected, and the results have been fantastic.'
        ]
        ],

        [
            'url' => get_template_directory_uri() . '/images/bs_assets/B_AHair/4.jpg',
            'alt' => 'Laser Hair Removal Before and After Result 4',
             'review' => [
            'name'   => 'Olivia K.',
            'rating' => 5,
            'text'   => 'I love how much confidence this has given me. My skin stays smooth for weeks, and I barely have to think about unwanted hair anymore. Highly recommended!'
        ]
        ],

    ],

    'cta_text' => 'BOOK MY APPOINTMENT',

    'cta_url' => '#CTAForm'

];

/* ----------------------
Treatment Areas
---------------------------*/
$areas_args = [

    'variant' => 'compact',

    'section_tag'         => 'TREATMENT AREAS',

    'section_title'       => 'Areas We Treat',

    'section_description' => 'From facial hair to full body treatments, we customize every session.',

    'columns' => [

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Face',
        ],

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Upper Lip',
        ],

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Chin',
        ],

        [
            'icon' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',
            'title' => 'Neck',
        ],

      

    ],

    'cta_text' => 'BOOK CONSULTATION',

    'cta_url' => '#CTAForm'

];

$laser_benefits_args = [
     'chat_background' => get_template_directory_uri() . '/images/bs_assets/hair_trust_us.jpg',
    'columns' => [

        [

            'section_tag' => 'BENEFITS OF TREATMENT',

            'section_title' => "What You'll Love After Laser Hair Removal",

            'trust_list' => [

                'Smooth Skin Year-Round',

                'Say Goodbye To Daily Shaving',

                'No More Painful Ingrown Hairs',

                'Long-Term Hair Reduction'

            ],

            'cta_text' => 'BOOK MY CONSULTATION',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn trust-btn'

        ],

        [

            'section_tag' => 'WHY IT\'S WORTH IT',

            'section_title' => 'More Than Just Hair Removal',

            'trust_list' => [

                'Save Time Every Week',

                'Spend Less On Waxing & Razors',

                'Fast, Comfortable Treatments',

                'Little To No Downtime',

                'Suitable For Multiple Body Areas',

                'Feel Confident In Your Skin'

            ],

            'cta_text' => 'BOOK MY APPOINTMENT',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn btn-outline'

        ]

    ]

];
/* ======================================================
   FAQ
====================================================== */
$laser_faq_args = [
    'section_tag'=>'FAQ',
    'section_title'=>'Frequently Asked Questions',
    'open_first'=>True,
    'faq_items'=>[
        ['question'=>'Is laser hair removal permanent?','answer'=>'Laser provides long-term hair reduction after a treatment series.'],
        ['question'=>'Does it hurt?','answer'=>'Cooling technology helps keep treatments comfortable.'],
        ['question'=>'How many sessions?','answer'=>'Most patients require 6–8 sessions.'],
        ['question'=>'Is there downtime?','answer'=>'No, you can return to daily activities immediately.'],
        ['question'=>'Can all skin tones be treated?','answer'=>'Yes, settings are customized.'],
        ['question'=>'Can I shave between sessions?','answer'=>'Yes, but avoid waxing or plucking.']
    ]
];

/* ======================================================
 * How Laser Hair Removal Works
 * ====================================================== */

$laser_treatment_process_args = [

    'section_tag' => 'HOW IT WORKS',

    'section_title' => 'How Laser Hair Removal Works',

    'section_description' => '',

    /*
    |--------------------------------------------------------------------------
    | Illustration
    |--------------------------------------------------------------------------
    | If illustration_video is supplied it takes priority over image.
    */

    'illustration_image' => get_template_directory_uri() . '/images/bs_assets/Img_Placeholder.png',

    // 'illustration_video' => get_template_directory_uri() . '/images/bs_assets/laser-hair-removal/process/laser-process.mp4',

    'bullet_points' => [

        'The laser delivers concentrated light directly into the hair follicle.',

        'The follicle absorbs the laser energy while the surrounding skin remains unharmed.',

        'With each treatment session, hair grows back finer, lighter, and significantly reduced until long-term hair reduction is achieved.'

    ],

    

];

$laser_recovery_args = [

    'section_tag' => 'RECOVERY TIMELINE',

    'section_title' => 'What To Expect After Treatment',

    'section_description' =>
        'Recovery is quick and simple. Here is what you can typically expect after each laser hair removal session.',

    'timeline_items' => [

        [

            'day' => 'Day 0',

            'title' => 'Immediately After Treatment',

            'description' =>
                'Mild redness or warmth may occur. Most patients return to normal daily activities immediately. Avoid direct sun exposure and always use sunscreen.',

            'icon' => '✓'

        ],

        [

            'day' => 'Days 1–7',

            'title' => 'Hair Begins Shedding',

            'description' =>
                'Treated hairs naturally begin shedding from the follicles. This is a normal part of the treatment process and indicates the laser has successfully targeted the hair.',

            'icon' => '✓'

        ],

        [

            'day' => 'Week 6+',

            'title' => 'Ready For Your Next Session',

            'description' =>
                'New hair returns finer and lighter than before. Your next treatment continues reducing hair growth until long-term results are achieved.',

            'icon' => '✓'

        ]

    ],

    'bottom_badge' => 'No Downtime'

];
$laser_treatment_journey_args = [

    'section_tag' => 'TREATMENT PROCESS',

    'section_title' => 'Your Treatment Journey',

    'steps' => [

        [

            'step' => 'STEP 1',

            'title' => 'Consultation',

            'description' => 'We assess your skin and hair type.'

        ],

        [

            'step' => 'STEP 2',

            'title' => 'Treatment Plan',

            'description' => 'Personalized settings for your goals.'

        ],

        [

            'step' => 'STEP 3',

            'title' => 'Laser Session',

            'description' => '15 to 60 minutes depending on the treatment area.'

        ],

        [

            'step' => 'STEP 4',

            'title' => 'Hair Sheds Naturally',

            'description' => 'Over the next 1 to 2 weeks.'

        ],

        [

            'step' => 'STEP 5',

            'title' => 'Repeat Sessions',

            'description' => 'Hair becomes thinner after every visit.'

        ],

        [

            'step' => 'STEP 6',

            'title' => 'Smooth Results',

            'description' => 'Long-lasting hair reduction.'

        ]

    ]

];

/* ======================================================
 * Meet the Aesthetic Experts
 * ====================================================== */

$team_args = [

    'section_tag' => 'OUR TEAM',

    'section_title' => 'Meet the Aesthetic Experts',

    'section_description' =>
        'Our team brings together experienced specialists from aesthetics, skin health, and advanced beauty services, all focused on providing safe, effective, and highly personalized treatments in a relaxed environment.',

    'members' => [

        [

            'image' => get_template_directory_uri() . '/images/bs_assets/team/Dr. Gulrez Sayed.jpg',

            'name'  => 'Dr. Gulrez Sayed'

        ],

        [

            'image' => get_template_directory_uri() . '/images/bs_assets/team/Tahmina Ahmad.jpg',

            'name'  => 'Tahmina Ahmad'

        ],

        [

            'image' => get_template_directory_uri() . '/images/bs_assets/team/Katie Haines.jpg',

            'name'  => 'Katie Haines'

        ],

        [

            'image' => get_template_directory_uri() . '/images/bs_assets/team/Bilgi McKenzie.jpg',

            'name'  => 'Bilgi McKenzie'

        ],

        [

            'image' => get_template_directory_uri() . '/images/bs_assets/team/Abigail Winland.jpg',

            'name'  => 'Abigail Winland'

        ],

        [

            'image' => get_template_directory_uri() . '/images/bs_assets/team/Sheila Parker.jpg',

            'name'  => 'Sheila Parker'

        ]

    ]

];

/* ======================================================
   FINAL CTA
====================================================== */
$laser_final_cta_args = [
    'section_tag'=>'READY?',
    'section_title'=>'Ready To Stop Shaving Forever?',
    'section_description'=>'Book your personalized laser hair removal treatment today and begin your journey toward long-lasting hair reduction.',
    'form_shortcode'=>'[contact-form-7 id="6f75418" title="BS Landing Page Contact Form"]'
];


get_template_part('template-parts/bs-hero-banner', null, $laser_banner_args);
get_template_part('template-parts/bs-popup-form', null, $laser_popup_args);
get_template_part('template-parts/bs-hero', null, $laser_hero_args);
get_template_part('template-parts/bs-problem-section',null, $laser_problem_args);
get_template_part('template-parts/bs-treatment-process', null, $laser_treatment_process_args);
get_template_part('template-parts/bs-treatment-journey', null, $laser_treatment_journey_args);
get_template_part('template-parts/bs-before-after', null,   $hair_removal_before_after_args); 
get_template_part('template-parts/bs-results-timeline', null, $laser_recovery_args);
get_template_part('template-parts/bs-why-mobile', null, $laser_why_args);
get_template_part('template-parts/bs-trust', null, $laser_benefits_args);

get_template_part('template-parts/bs-icon-grid', null, $areas_args);
get_template_part('template-parts/bs-team', null, $team_args);

get_template_part('template-parts/bs-faq', null, $laser_faq_args);
get_template_part('template-parts/bs-final-cta', null, $laser_final_cta_args);

get_footer('landing');
