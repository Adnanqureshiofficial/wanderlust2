<?php
/**
 * Template Name: Botox Landing Page
 */

get_header();

/* ======================================================
   HERO
====================================================== */

$botox_hero_args = [

    'badge_text' => 'LIMITED-TIME MODEL CALL',

    'heading' => 'Be One of Our Selected<br><em>Botox Models.</em>',

    'description' =>
        'Natural results. Exclusive pricing.',

    'support_text' =>
        'We\'re looking for a limited number of qualified Botox model patients to receive physician-led Botox treatment at a special promotional rate in exchange for allowing us to document your results.',

    'main_cta_text' => 'APPLY FOR THE BOTOX MODEL CALL',

    'main_cta_url' => '#CTAForm',

    'trust_bullets' => [

        'Physician-Led Care',

        'Natural Results',

        'FDA-Approved Botox®',

        'Limited-Time Pricing'

    ],

    'card' => [

        'title' => 'Botox Model Call Offer',

        'subtitle' => 'Exclusive Pricing for Qualified Model Patients',

        'pricing' => [

            [

                'label' => '$7 / Unit',

                'price' => '$7',

                'regular_price' => '$14 / Unit'

            ]

        ],

        'features' => [

            'Physician-Led Treatment',

            'Medical-Grade Botox®',

            'Before & After Documentation',

            'Results in 3 to 7 Days'

        ],

        'cta_text' => 'APPLY FOR THE BOTOX MODEL CALL',

        'cta_url' => '#CTAForm'

    ]

];


/* ======================================================
   WHY WANDERLUST
====================================================== */

$botox_why_args = [

    'section_badge' => 'WHY WANDERLUST',

    'section_title' => 'Confidence should look effortless.',

    'section_subtitle' =>
        'Every treatment is carefully mapped to your facial muscles, helping soften wrinkles while preserving the expressions that make you look like you.',

    'cards' => [

        [
            'number' => 'I.',
            'title' => 'Personalized Facial Assessment',
            'description' =>
                'Every face ages differently. Your treatment plan should too.'
        ],

        [
            'number' => 'II.',
            'title' => 'Natural, Balanced Results',
            'description' =>
                'Look refreshed, rested, and confident, never stiff or overdone.'
        ],

        [
            'number' => 'III.',
            'title' => 'Physician-Led Precision',
            'description' =>
                'Botox is a medical treatment. Every injection is performed with clinical expertise for safe, consistent results.'
        ]

    ]

];


/* ======================================================
   PAIN POINTS
====================================================== */

$botox_pain_points_args = [

    'section_tag' => 'COMMON CONCERNS',

    'section_title' => 'Do any of these sound familiar?',

    'items' => [

        'You notice forehead lines even when you are relaxed.',

        'Makeup settles into fine lines.',

        'People ask if you look tired.',

        'Your frown lines make you look stressed.',

        'You want prevention before wrinkles become permanent.'

    ],

    'cta_text' => 'SEE IF YOU\'RE A CANDIDATE',

    'cta_url' => '#CTAForm'

];


/* ======================================================
   SOCIAL PROOF
====================================================== */

$botox_social_proof_args = [

    'section_tag' => 'PATIENT STORY',

    'section_title' =>
        'Real Results.<br>Natural Confidence.',

    'video_url' => get_template_directory_uri() . '/assets/images/BOTOX_VO.mp4',

    'image_alt' => 'Botox Patient',

    'content'=> "I had been thinking about Botox for months before finally booking my appointment. The process was quick, and the provider answered every question I had. The results are subtle, natural, and exactly what I was hoping for. I wish I had done it sooner.",

    'cta_text' => 'BOOK MY CONSULTATION',

    'cta_url' => '#CTAForm'

];


/* ======================================================
   TRUST
====================================================== */

$botox_trust_args = [

    'columns' => [

        [

            'section_tag' => 'WHY PATIENTS CHOOSE US',

            'section_title' => 'Why patients choose Wanderlust',

            'trust_list' => [

                'Physician-Led Botox Treatments',

                'FDA-Approved Botox®',

                'Customized Injection Mapping',

                'Natural Facial Movement'

            ],

            'cta_text' => 'BOOK TODAY',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn trust-btn'

        ],

        [

            'section_tag' => 'YOUR EXPERIENCE',

            'section_title' => 'Comfortable, Safe & Professional',

            'trust_list' => [

                'Quick 15–20 Minute Appointments',

                'Little To No Downtime',

                'Comfortable Private Experience',

                'Results That Still Look Like You'

            ],

            'cta_text' => 'BOOK MY APPOINTMENT',

            'cta_url' => '#CTAForm',

            'cta_class' => 'btn btn-outline'

        ]

    ]

];


/* ======================================================
   BEFORE / AFTER
====================================================== */

$botox_before_after_args = [

    'section_tag' => 'BEFORE & AFTER',

    'section_title' => 'Refresh Your Look. Keep Your Expressions.',

    'section_description' =>
        'Smooth forehead lines, soften crow\'s feet and relax frown lines while maintaining natural movement.',

    'gallery_images' => [

        [
            'url' => get_template_directory_uri() . '/assets/images/B_ABotox/1.png',
            'alt' => 'Botox Treatment Result 1'
        ],

        [
            'url' => get_template_directory_uri() . '/assets/images/B_ABotox/2.png',
            'alt' => 'Botox Treatment Result 2'
        ],

        [
            'url' => get_template_directory_uri() . '/assets/images/B_ABotox/3.png',
            'alt' => 'Botox Treatment Result 3'
        ],

        [
            'url' => get_template_directory_uri() . '/assets/images/B_ABotox/4.png',
            'alt' => 'Botox Treatment Result 4'
        ],

    ],

    'cta_text' => 'BOOK MY APPOINTMENT',

    'cta_url' => '#CTAForm'

];


/* ======================================================
   EDUCATION (NEW COMPONENT)
====================================================== */

$botox_education_args = [

    'section_tag' => 'HOW BOTOX WORKS',

    'section_title' => "Botox doesn't change your face.",

    'description' =>
        'It relaxes the muscles responsible for expression lines, helping your skin appear smoother while still allowing you to smile, laugh and express yourself naturally.',

    'points' => [

        'Targets the muscles responsible for dynamic wrinkles.',

        'Softens lines without changing your facial identity.',

        'Natural-looking results that still feel like you.',

        'Treatment takes around 15–20 minutes.'

    ],

    'image_url' =>
        get_template_directory_uri() . '/assets/images/How_Botox_Work.jpg',

    'image_alt' => 'Botox Treatment'

];


/* ======================================================
   PRICING OFFER (NEW COMPONENT)
====================================================== */

$botox_pricing_offer_args = [

    'section_tag' => 'LIMITED TIME BOTOX SPECIAL',

    'section_title' => 'Only $7 Per Unit',

    'section_description' =>
        'Limited physician appointments available this month.',

    'regular_price' => '$14 /Unit',

    'offer_price' => '$7 /Unit',

    'offer_note' =>
        'Only a limited number of promotional consultations are available this month.',

    'cta_text' => 'APPLY FOR MY MODEL CALL PRICING',

    'cta_url' => '#CTAForm'

];

/* ======================================================
   RESULTS TIMELINE (NEW COMPONENT)
====================================================== */
$botox_results_timeline_args = [

    'section_tag' => 'RESULTS TIMELINE',

    'section_title' => 'What happens after treatment?',

    'section_description' =>
        'Know exactly what to expect after your Botox appointment.',

    'timeline_items' => [

        [

            'day' => 'Day 1',

            'title' => 'Treatment Complete',

            'description' =>
                'Tiny injection points usually disappear within a few hours.',

            'icon' => '✓'

        ],

        [

            'day' => 'Days 3–5',

            'title' => 'Muscles Begin Relaxing',

            'description' =>
                'You will begin noticing smoother movement and softer expression lines.',

            'icon' => '✓'

        ],

        [

            'day' => 'Days 7–14',

            'title' => 'Full Results',

            'description' =>
                'Your refreshed appearance develops naturally while preserving facial expression.',

            'icon' => '✓'

        ],

        [

            'day' => '3–4 Months',

            'title' => 'Maintenance',

            'description' =>
                'Schedule your next appointment to maintain consistent results.',

            'icon' => '✓'

        ]

    ]

];


/* ======================================================
   FAQ
====================================================== */

$botox_faq_args = [

    'section_tag' => 'FAQ',

    'section_title' => 'Frequently Asked Questions',

    'open_first' => true,

    'faq_items' => [

        [
            'question' => 'Will I look frozen?',
            'answer' =>
                'No. Our philosophy is subtle enhancement. We treat just enough to soften lines while keeping your natural expressions.'
        ],

        [
            'question' => 'When will I see results?',
            'answer' =>
                'Most patients begin noticing improvement within 3 to 5 days, with full results in about two weeks.'
        ],

        [
            'question' => 'Does Botox hurt?',
            'answer' =>
                'Most patients describe it as a quick pinch lasting only a few seconds.'
        ],

        [
            'question' => 'How long does Botox last?',
            'answer' =>
                'Typically 3 to 4 months.'
        ],

        [
            'question' => 'Who performs my treatment?',
            'answer' =>
                'Every Botox treatment is performed by a licensed physician.'
        ],

        [
            'question' => 'Can Botox prevent wrinkles?',
            'answer' =>
                'Yes. Starting Botox before deep lines form can help slow wrinkle development over time.'
        ]

    ]

];


/* ======================================================
   FINAL CTA
====================================================== */

$botox_final_cta_args = [

    'section_tag' => 'LIMITED TIME',

    'section_title' =>
        'Lock In Your $7 Per Unit Pricing',

    'section_description' =>
        'Once this promotion ends, Botox returns to its regular price of $14 per unit. Reserve your consultation today.',

    'form_shortcode' =>
        '[contact-form-7 id="7d8ba4f" title="CTA Landing Page"]'

];

?>


<?php get_template_part('template-parts/bs-hero', null, $botox_hero_args); ?>

<?php get_template_part('template-parts/bs-why-mobile', null, $botox_why_args); ?>

<?php get_template_part('template-parts/bs-pain-points', null,  $botox_pain_points_args); ?>

<?php get_template_part('template-parts/bs-social-proof', null, $botox_social_proof_args); ?>

<?php get_template_part('template-parts/bs-trust', null, $botox_trust_args); ?>

<?php get_template_part('template-parts/bs-before-after', null, $botox_before_after_args); ?>

<?php get_template_part('template-parts/bs-education', null, $botox_education_args); ?>

<?php get_template_part('template-parts/bs-pricing-offer', null, $botox_pricing_offer_args); ?>

<?php get_template_part('template-parts/bs-results-timeline', null, $botox_results_timeline_args); ?>

<?php get_template_part('template-parts/bs-faq', null, $botox_faq_args); ?>

<?php get_template_part('template-parts/bs-final-cta', null, $botox_final_cta_args); ?>

<?php get_footer(); ?>