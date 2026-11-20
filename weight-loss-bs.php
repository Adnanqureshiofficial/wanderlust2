<?php
/**
 * Template Name: Medical Weight Loss Landing Page By BS
 *
 * Built using the current Blare Studio landing-page architecture.
 */

get_header('landing');


/* ======================================================
   POP UP FORM
====================================================== */

$weight_loss_popup_args = [

    'section_tag' => 'LIMITED TIME OFFER',

    'popup_title' => 'Medical Weight Loss — 3 Months for $297/Month',

    'popup_description' =>
        'Claim your complimentary consultation and receive a personalized weight loss treatment plan from our medical professionals.',

    'form_shortcode' =>
        '[contact-form-7 id="6f75418" title="BS Landing Page Contact Form"]'

];


/* ======================================================
   HERO BANNER
====================================================== */

$weight_loss_banner_args = [

    'offer_headline' => 'Medical Weight Loss — 3 Months for $297/Month. Get Started!',

    'image' =>
        get_template_directory_uri() .
        '/images/bs_assets/Banner_Header/weightloss_header.png',

    'image_alt' => 'Medical Weight Loss Program'

];


/* ======================================================
   HERO
====================================================== */

$weight_loss_hero_args = [

    'badge_text' => 'LIMITED TIME OFFER',

    'heading' =>
        'Medical Weight Loss<br><em>3 Months for $297/Month</em>',

    'description' =>
        'Claim your complimentary consultation and receive a personalized weight loss treatment plan from our medical professionals.',

    'support_text' =>
        'Be one of our selected Weight Loss Program Members. Real results. Physician-led. Exclusive pricing.',

    'main_cta_text' => 'APPLY FOR THE PROGRAM',

    'main_cta_url' => '#CTAForm',

    'trust_bullets' => [

        'PHYSICIAN-LED CARE',

        'REAL, SUSTAINABLE RESULTS',

        'CLINICALLY GUIDED TREATMENT',

        'LIMITED-TIME PRICING'

    ],

    'card' => [

        'title' => 'Exclusive Pricing for Qualified Program Members',

        'subtitle' => '3-Month Medical Weight Loss Program',

        'pricing' => [

            [

                'label' => '3-Month Program',

                'price' => '$297/mo',

                'regular_price' => '$1,200 total'

            ]

        ],

        'features' => [

            'Physician-Guided Care',

            'Monthly Physician Monitoring',

            'Personalized Treatment Planning',

            'Ongoing Support'

        ],

        'cta_text' => 'APPLY FOR PROGRAM PRICING',

        'cta_url' => '#CTAForm'

    ]

];


/* ======================================================
   COMMON CONCERNS / PROBLEM SECTION
====================================================== */

$weight_loss_problem_args = [

    'section_tag' => 'COMMON CONCERNS',

    'section_title' => 'Do Any Of These Sound Familiar?',

    'cards' => [

        [

            'icon' =>
                get_template_directory_uri() .
                '/images/bs_assets/weight_loss_icons/You_re exhausted.png',

            'title' => 'Diet & Exercise Aren\'t Enough',

            'description' =>
                'You\'ve tried diet and exercise but the weight still won\'t budge.'

        ],

        [

            'icon' =>
                get_template_directory_uri() .
                '/images/bs_assets/weight_loss_icons/You_ve_tried diet_.png',

            'title' => 'Tired Of Yo-Yo Dieting',

            'description' =>
                'Quick fixes may work temporarily, but the weight keeps coming back.'

        ],

        [

            'icon' =>
                get_template_directory_uri() .
                '/images/bs_assets/weight_loss_icons/You_want_real accountability.png',

            'title' => 'You Want Real Accountability',

            'description' =>
                'You need consistent medical guidance and support, not another generic program.'

        ],

        [

            'icon' =>
                get_template_directory_uri() .
                '/images/bs_assets/weight_loss_icons/You_want_a plan.png',

            'title' => 'Generic Plans Don\'t Fit',

            'description' =>
                'You want a plan built around your body, your labs, and your individual goals.'

        ]

    ],

    'bottom_title' =>
        'You don\'t need another crash diet.',

    'bottom_description' =>
        'You need a personalized medical weight loss plan built around you.',

    'cta_text' => 'SEE IF YOU\'RE A CANDIDATE',

    'cta_url' => '#CTAForm'

];


/* ======================================================
   HOW THE PROGRAM WORKS
====================================================== */

$weight_loss_treatment_process_args = [

    'section_tag' => 'HOW THE PROGRAM WORKS',

    'section_title' => 'This Isn\'t A Crash Diet.',

    'section_description' =>
        'It\'s a structured, physician-guided program that supports your body\'s natural ability to lose weight steadily without extreme restriction or guesswork.',

    'illustration_image' =>
        get_template_directory_uri() .
        '/images/bs_assets/how_weightloss_works.jpg',

    'illustration_video' => '',

    'bullet_points' => [

        'Begins with a full medical evaluation and lab review.',

        'Treatment is introduced gradually and monitored monthly.',

        'Weekly coaching reinforces nutrition and movement habits.',

        'Ongoing support helps you stay consistent and accountable throughout your journey.'

    ]

];


/* ======================================================
   TREATMENT JOURNEY
====================================================== */

$weight_loss_treatment_journey_args = [

    'section_tag' => 'YOUR WEIGHT LOSS JOURNEY',

    'section_title' => 'A Structured Plan From Start To Finish',

    'steps' => [

        [

            'step' => 'STEP 1',

            'title' => 'Medical Evaluation',

            'description' =>
                'Begin with a medical intake, assessment, and baseline lab review.'

        ],

        [

            'step' => 'STEP 2',

            'title' => 'Personalized Plan',

            'description' =>
                'Your physician develops a treatment plan around your body, labs, and goals.'

        ],

        [

            'step' => 'STEP 3',

            'title' => 'Treatment Begins',

            'description' =>
                'Treatment is introduced gradually with physician-guided care.'

        ],

        [

            'step' => 'STEP 4',

            'title' => 'Weekly Accountability',

            'description' =>
                'Nutrition and exercise check-ins help reinforce sustainable habits.'

        ],

        [

            'step' => 'STEP 5',

            'title' => 'Monthly Monitoring',

            'description' =>
                'Your progress is reviewed and your treatment plan is adjusted as needed.'

        ],

        [

            'step' => 'STEP 6',

            'title' => 'Long-Term Success',

            'description' =>
                'After the initial program, maintenance options are available to support continued progress.'

        ]

    ]

];


/* ======================================================
   BEFORE / AFTER
====================================================== */

$weight_loss_before_after_args = [

    'section_tag' => 'BEFORE & AFTER',

    'section_title' => 'Real Progress. Real People.',

    'section_description' =>
        'Steady, healthy weight loss supported by monthly physician monitoring and weekly coaching.',

    'gallery_images' => [

        [

            'url' =>
                get_template_directory_uri() .
                '/images/bs_assets/B_AWeightLoss/1.png',

            'alt' => 'Medical Weight Loss Result 1',

            'review' => [

                'name' => 'Patient Result',

                'rating' => 5,

                'text' =>
                    'Replace this testimonial with an approved patient testimonial.'

            ]

        ],

        [

            'url' =>
                get_template_directory_uri() .
                '/images/bs_assets/B_AWeightLoss/2.png',

            'alt' => 'Medical Weight Loss Result 2',

            'review' => [

                'name' => 'Patient Result',

                'rating' => 5,

                'text' =>
                    'Replace this testimonial with an approved patient testimonial.'

            ]

        ],

        [

            'url' =>
                get_template_directory_uri() .
                '/images/bs_assets/B_AWeightLoss/3.png',

            'alt' => 'Medical Weight Loss Result 3',

            'review' => [

                'name' => 'Patient Result',

                'rating' => 5,

                'text' =>
                    'Replace this testimonial with an approved patient testimonial.'

            ]

        ],

        [

            'url' =>
                get_template_directory_uri() .
                '/images/bs_assets/B_AWeightLoss/4.png',

            'alt' => 'Medical Weight Loss Result 4',

            'review' => [

                'name' => 'Patient Result',

                'rating' => 5,

                'text' =>
                    'Replace this testimonial with an approved patient testimonial.'

            ]

        ]

    ],

    'cta_text' => 'BOOK MY APPOINTMENT',

    'cta_url' => '#CTAForm'

];

/* ==================================
Patient Story
=====================================*/
$weight_loss_social_proof_args = [

    'section_tag' => 'PATIENT STORY',

    'section_title' =>
        'Real Results.<br>Real Confidence.',

    'video_url' => get_template_directory_uri() . '/images/bs_assets/weightloss_patient_story.mp4',

    'image_alt' => 'Medical Weight Loss Patient',

    'content' =>
        "I'd tried everything before this program. Having a doctor actually monitor my progress each month made all the difference. The weight loss has been steady, and for the first time it feels sustainable.",

    'cta_text' => 'BOOK MY CONSULTATION',

    'cta_url' => '#CTAForm'

];
/* ======================================================
   URGENCY
====================================================== */

$weight_loss_urgency_args = [

    'section_tag' => 'URGENT UPDATE',

    'section_title' => 'Limited Time Weight Loss Offer',

    'section_description' =>
        'Only <strong>7 Program Slots</strong> left this month.',

    // Replace with the actual campaign expiration date.
    'countdown_date' => '2026-12-31T23:59:59',

    'label_days' => 'DAYS',

    'label_hours' => 'HOURS',

    'label_minutes' => 'MINUTES',

    'label_seconds' => 'SECONDS',

    'cta_text' => 'CLAIM MY SPOT NOW',

    'cta_url' => '#CTAForm'

];


/* ======================================================
   RESULTS TIMELINE
====================================================== */

$weight_loss_results_timeline_args = [

    'section_tag' => 'RESULTS TIMELINE',

    'section_title' => 'What Happens During Your Program?',

    'section_description' =>
        'Your three-month program is structured around medical evaluation, treatment, accountability, and ongoing progress.',

    'timeline_items' => [

        [

            'day' => 'MONTH 1',

            'title' => 'Foundation',

            'description' =>
                'Medical intake, baseline labs, and gradual treatment introduction.',

            'icon' => '✓'

        ],

        [

            'day' => 'MONTH 2',

            'title' => 'Momentum',

            'description' =>
                'Dosing adjustments and weekly accountability check-ins help maintain progress.',

            'icon' => '✓'

        ],

        [

            'day' => 'MONTH 3',

            'title' => 'Results',

            'description' =>
                'Continued progress, habit reinforcement, and a review of your treatment plan.',

            'icon' => '✓'

        ],

        [

            'day' => 'AFTER 3 MONTHS',

            'title' => 'Maintenance',

            'description' =>
                'Transition to an optional maintenance plan designed to support long-term success.',

            'icon' => '✓'

        ]

    ],

    'bottom_badge' => 'PHYSICIAN GUIDED'

];


/* ======================================================
   WHY WANDERLUST
====================================================== */

$weight_loss_why_args = [

    'section_badge' => 'WHY WANDERLUST',

    'section_title' =>
        'Confidence Should Look Effortless — From The Inside Out.',

    'section_subtitle' =>
        'Every plan is built around your body, your labs, and your goals, helping you lose weight steadily while protecting your health and energy along the way.',

    'cards' => [

        [

            'number' => 'I.',

            'title' => 'Personalized Medical Assessment',

            'description' =>
                'Every body responds differently. Your treatment plan should too.'

        ],

        [

            'number' => 'II.',

            'title' => 'Steady, Sustainable Results',

            'description' =>
                'Real progress you can maintain, not a crash diet you\'ll rebound from.'

        ],

        [

            'number' => 'III.',

            'title' => 'Physician-Led Precision',

            'description' =>
                'This is a medical program. Every dose and every visit is guided by clinical expertise.'

        ]

    ]

];


/* ======================================================
   BENEFITS / PATIENT EXPERIENCE
====================================================== */

$weight_loss_benefits_args = [

    'chat_background' =>
        get_template_directory_uri() .
        '/images/bs_assets/hair_trust_us.jpg',

    'columns' => [

        [

            'section_tag' => 'WHY PATIENTS CHOOSE US',

            'section_title' =>
                'Why Patients Choose Wanderlust',

            'trust_list' => [

                'Physician-Led Weight Loss Program',

                'Direct Primary Care Membership Included',

                'Personalized Treatment Planning',

                'Ongoing Monthly Monitoring'

            ],

            'cta_text' => 'BOOK MY CONSULTATION',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn trust-btn'

        ],

        [

            'section_tag' => 'YOUR EXPERIENCE',

            'section_title' =>
                'Comfortable, Safe & Professional',

            'trust_list' => [

                'Monthly In-Person or Virtual Visits',

                'Weekly Nutrition & Exercise Check-Ins',

                'Private, One-on-One Support',

                'A Plan That Fits Your Real Life'

            ],

            'cta_text' => 'BOOK MY APPOINTMENT',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn btn-outline'

        ]

    ]

];


/* ======================================================
   TEAM
====================================================== */

$team_args = [

    'section_tag' => 'OUR TEAM',

    'section_title' => 'Meet Your Medical Team',

    'section_description' =>
        'Our team brings together experienced physicians and healthcare professionals focused on providing safe, effective, and highly personalized care.',

    'members' => [

        [

            'image' =>
                get_template_directory_uri() .
                '/images/bs_assets/team/Dr. Gulrez Sayed.jpg',

            'name' => 'Dr. Gulrez Syed',

            'bio' =>
                'Board-certified Family Medicine physician with over 18 years of experience, dedicated to providing compassionate, patient centered care focused on lifelong health and wellness.'

        ],

        [

            'image' =>
                get_template_directory_uri() .
                '/images/bs_assets/team/Tahmina Ahmad.jpg',

            'name' => 'Tahmina Ahmad',

            'bio' =>
                'Board-certified Family medicine physician with over six years of experience, providing whole person care through a personalized approach rooted in osteopathic medicine and wellness.'

        ],

        [

            'image' =>
                get_template_directory_uri() .
                '/images/bs_assets/team/Katie Haines.jpg',

            'name' => 'Katie Haines',

            'bio' =>
                'Aesthetic Nurse Practitioner with 22 years of nursing experience, delivering safe, evidence based care focused on aesthetics, wellness, and healthy aging.'

        ],

        [

            'image' =>
                get_template_directory_uri() .
                '/images/bs_assets/team/Bilgi McKenzie.jpg',

            'name' => 'Bilgi McKenzie',

            'bio' =>
                'Registered Nurse and aesthetic injector with nearly a decade of clinical experience, dedicated to delivering safe, natural looking results that inspire confidence.'

        ],

        [

            'image' =>
                get_template_directory_uri() .
                '/images/bs_assets/team/Abigail Winland.jpg',

            'name' => 'Abigail Winland',

            'bio' =>
                'Registered Nurse injector with a background in pediatric intensive care, specializing in neurotoxins and dermal fillers for natural, personalized results.'

        ],

        [

            'image' =>
                get_template_directory_uri() .
                '/images/bs_assets/team/Sheila Parker.jpg',

            'name' => 'Sheila Parker',

            'bio' =>
                'Registered Nurse with a background in Labor & Delivery and NICU, blending clinical expertise with aesthetic artistry to enhance natural beauty and confidence.'

        ]

    ]

];


/* ======================================================
   FAQ
====================================================== */

$weight_loss_faq_args = [

    'section_tag' => 'FAQ',

    'section_title' => 'Frequently Asked Questions',

    'open_first' => true,

    'faq_items' => [

        [

            'question' => 'Will I need to be on this forever?',

            'answer' =>
                'No. The 3-month program is designed to build lasting habits, with an optional maintenance plan available afterward.'

        ],

        [

            'question' => 'When will I start seeing results?',

            'answer' =>
                'Most patients notice steady progress within the first few weeks, with continued results building month over month.'

        ],

        [

            'question' => 'Is this program safe?',

            'answer' =>
                'Every patient is medically evaluated, and treatment is monitored monthly by a physician.'

        ],

        [

            'question' => 'What\'s included in the $297/month price?',

            'answer' =>
                'Your program includes physician-guided weight-loss care, monthly physician visits, and ongoing support to help you stay on track.'

        ],

        [

            'question' => 'Who oversees my treatment?',

            'answer' =>
                'Every patient\'s plan is reviewed and monitored by a licensed physician.'

        ],

        [

            'question' => 'What happens after the 3 months?',

            'answer' =>
                'Continuation and maintenance plans are available for patients who want to keep building on their progress.'

        ]

    ]

];


/* ======================================================
   FINAL CTA
====================================================== */

$weight_loss_final_cta_args = [

    'section_tag' => 'LIMITED TIME',

    'section_title' =>
        'Lock In Your $297/Month Pricing',

    'section_description' =>
        'Once this promotion ends, the program returns to its regular price. Reserve your consultation today.',

    'form_shortcode' =>
        '[contact-form-7 id="6f75418" title="BS Landing Page Contact Form"]',

    'service_name' => 'Medical Weight Loss'

];


/* ======================================================
   TEMPLATE COMPONENTS
====================================================== */

get_template_part(
    'template-parts/bs-hero-banner',
    null,
    $weight_loss_banner_args
);

get_template_part(
    'template-parts/bs-popup-form',
    null,
    $weight_loss_popup_args
);

get_template_part(
    'template-parts/bs-hero',
    null,
    $weight_loss_hero_args
);

get_template_part(
    'template-parts/bs-problem-section',
    null,
    $weight_loss_problem_args
);

get_template_part(
    'template-parts/bs-treatment-process',
    null,
    $weight_loss_treatment_process_args
);

 get_template_part('template-parts/bs-social-proof', null, $weight_loss_social_proof_args);

get_template_part(
    'template-parts/bs-treatment-journey',
    null,
    $weight_loss_treatment_journey_args
);

get_template_part(
    'template-parts/bs-before-after',
    null,
    $weight_loss_before_after_args
);

get_template_part(
    'template-parts/bs-urgency',
    null,
    $weight_loss_urgency_args
);

get_template_part(
    'template-parts/bs-results-timeline',
    null,
    $weight_loss_results_timeline_args
);

get_template_part(
    'template-parts/bs-trust',
    null,
    $weight_loss_benefits_args
);

get_template_part(
    'template-parts/bs-why-mobile',
    null,
    $weight_loss_why_args
);



get_template_part(
    'template-parts/bs-team',
    null,
    $team_args
);

get_template_part(
    'template-parts/bs-faq',
    null,
    $weight_loss_faq_args
);

get_template_part(
    'template-parts/bs-final-cta',
    null,
    $weight_loss_final_cta_args
);


get_footer('landing');