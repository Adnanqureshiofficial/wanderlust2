
<?php
/*
Template Name: Lumecca IPL Landing Page
*/

get_header("lumecca");

/*
|--------------------------------------------------------------------------
| 01. HERO SECTION
|--------------------------------------------------------------------------
*/

$lumecca_hero_args = [
    'badge_text' => 'WANDERLUST AESTHETICS | ADVANCED SKIN TREATMENTS',

    'heading' => 'Reveal Brighter,<br><em>Clearer-Looking Skin.</em>',

    'description' => 'Lumecca IPL Photofacial uses advanced Intense Pulsed Light technology to target visible pigmentation and certain types of facial redness, helping your skin look clearer, brighter and more even.',

    'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/lumecca-hero.jpeg',
    'image_alt' => 'Lumecca IPL photofacial treatment at Wanderlust Aesthetics',

    'main_cta_text' => 'APPLY NOW',
    'main_cta_url' => '#CTAForm',

    'trust_bullets' => [
        'Non-invasive Treatment',
        'Minimal Downtime for Many Patients',
        'Customized Treatment Plans',
        'Professional Skin Assessment',
    ],

    'offer_title' => 'Your First 3 Lumecca IPL Sessions',

    'offer_description' => 'Say goodbye to the look of sun damage, dark spots and uneven skin tone.',

    'card_cta_text' => 'APPLY NOW',
    'card_cta_url' => '#CTAForm',
];


/*
|--------------------------------------------------------------------------
| 02. PROBLEM SECTION
|--------------------------------------------------------------------------
*/

$lumecca_problem_args = [
    'section_tag' => 'THE PROBLEM',

    'section_title' => 'Is Your Skin Showing Signs of Sun Damage?',

    'section_description' => 'Sun exposure, pigmentation and visible redness can make your complexion look uneven, even when you follow a skincare routine.',

    'cards' => [
        [
            'number' => '01',
            'title' => 'Sunspots & Sun Damage',
            'description' => "Visible spots and pigmentation that affect your skin's natural-looking clarity.",
            'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/problem-sunspots.jpg',
            'image_alt' => 'Visible sunspots and sun damage on facial skin',
        ],
        [
            'number' => '02',
            'title' => 'Stubborn Dark Spots',
            'description' => 'Pigmentation that may not improve with your regular skincare routine alone.',
            'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/problem-dark-spots.jpg',
            'image_alt' => 'Facial skin showing visible pigmentation and dark spots',
        ],
        [
            'number' => '03',
            'title' => 'Facial Redness',
            'description' => 'Visible redness and certain vascular concerns that can affect your complexion.',
            'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/problem-redness.jpg',
            'image_alt' => 'Facial skin showing visible redness',
        ],
    ],

    'bottom_text' => "Your skincare routine deserves a little extra help. It's time to explore a treatment designed to target visible skin concerns.",
];


/*
|--------------------------------------------------------------------------
| 03. HOW LUMECCA IPL WORKS
|--------------------------------------------------------------------------
*/

$lumecca_how_args = [
    'section_tag' => 'HOW LUMECCA IPL WORKS',

    'section_title' => "Meet Your Skin's New Glow-Up.",

    'section_description' => 'Lumecca IPL Photofacial is a non-invasive treatment that uses Intense Pulsed Light (IPL) technology to target visible pigmentation, sunspots, uneven skin tone and certain types of facial redness.',

    'process_title' => 'How It Works',

    'treatment_image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/how-lumecca-works.jpg',
    'treatment_image_alt' => 'Lumecca IPL photofacial treatment being performed',

    'steps' => [
        [
            'number' => '01',
            'title' => 'Light Energy',
            'description' => 'IPL delivers controlled pulses of light to targeted areas.',
        ],
        [
            'number' => '02',
            'title' => 'Targets Concerns',
            'description' => 'The light energy targets visible pigmentation and certain redness-related concerns.',
        ],
        [
            'number' => '03',
            'title' => 'Skin Improvement',
            'description' => 'Treated areas gradually improve in appearance as your skin responds to treatment.',
        ],
    ],
];


/*
|--------------------------------------------------------------------------
| 04. WHY WANDERLUST
|--------------------------------------------------------------------------
*/

$lumecca_why_args = [
    'section_tag' => 'WHY WANDERLUST',

    'section_title' => 'Your Skin Deserves Professional Care.',

    'section_description' => 'At Wanderlust, we combine professional expertise with advanced aesthetic technology to create treatment experiences tailored to your skin.',

    'cards' => [
        [
            'number' => '1.',
            'title' => 'Personalized Skin Assessment',
            'description' => 'We evaluate your skin concerns before recommending a treatment plan.',
        ],
        [
            'number' => '2.',
            'title' => 'Advanced IPL Technology',
            'description' => 'Lumecca uses Intense Pulsed Light technology to target visible pigmentation and certain types of redness.',
        ],
        [
            'number' => '3.',
            'title' => 'Professional Treatment',
            'description' => 'Your treatment is performed by trained professionals using customized settings.',
        ],
    ],
];


/*
|--------------------------------------------------------------------------
| 05. AREAS & SKIN CONCERNS
|--------------------------------------------------------------------------
*/

$lumecca_areas_args = [
    'section_tag' => 'AREAS & SKIN',

    'section_title' => 'AREAS AND SKIN CONCERNS<br>WE ADDRESS',

    'images' => [
        [
            'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/areas-sunspots.jpg',
            'image_alt' => 'Lumecca IPL treatment for visible sunspots',
        ],
        [
            'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/areas-pigmentation.jpg',
            'image_alt' => 'Professional facial treatment for pigmentation',
        ],
        [
            'image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/areas-redness.jpg',
            'image_alt' => 'Professional IPL treatment for facial redness',
        ],
    ],

    'content_title' => 'Target The Concerns That Matter To You.',

    'table_headers' => [
        'concern' => 'Skin concern',
        'goal' => 'Treatment goal',
    ],

    'concerns' => [
        [
            'concern' => 'Sunspots',
            'goal' => 'Improve visible sun damage',
        ],
        [
            'concern' => 'Pigmentation',
            'goal' => 'Improve uneven-looking skin',
        ],
        [
            'concern' => 'Facial redness',
            'goal' => 'Target certain types of redness',
        ],
        [
            'concern' => 'Uneven skin tone',
            'goal' => 'Promote a more uniform appearance',
        ],
    ],
];


/*
|--------------------------------------------------------------------------
| 06. RESULTS
|--------------------------------------------------------------------------
*/


$results_section = [

    'section_tag' => 'RESULTS',

    'section_title' => 'See the Difference.',

    'section_description' =>
        'Real results from Lumecca IPL treatments.',

    'results' => [

        [
            'before_image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/before-01.jpg',
            'after_image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/after-01.jpg',

            'before_image_alt' => 'Skin before Lumecca IPL treatment',
            'after_image_alt' => 'Skin after Lumecca IPL treatment',

            'caption' => 'Visible improvement in skin appearance.',
        ],

        [
            'before_image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/before-02.jpg',
            'after_image_url' => get_template_directory_uri() . '/images/bs_assets/lumecca/after-02.jpg',

            'before_image_alt' => 'Skin before IPL treatment',
            'after_image_alt' => 'Skin after IPL treatment',

            'caption' => 'A more even-looking skin tone.',
        ],

       

    ],

    'disclaimer' =>
        'Every skin journey is unique, and results may vary.',

];


/*=========================================================
= FINAL CTA
=========================================================*/

$lumecca_final_cta_args = [

    'section_tag' => 'BOOK YOUR CONSULTATION',

    'section_title' => 'Ready For A More Radiant-Looking Complexion?',

    'section_description' =>
    'Take the next step towards clearer, more even-looking skin. Discover how Lumecca IPL can help address visible pigmentation, sun damage and redness with a personalized treatment approach at Wanderlust Aesthetics.',

    'service_name' => 'Lumecca IPL Treatment',

    'form_shortcode' => '[contact-form-7 id="7d8ba4f" title="BS Landing Page Contact Form"]'

];

/*
|--------------------------------------------------------------------------
| RENDER LANDING PAGE SECTIONS
|--------------------------------------------------------------------------
*/

get_template_part('template-parts/lumecca-hero', null, $lumecca_hero_args);

get_template_part('template-parts/lumecca-problem', null, $lumecca_problem_args);

get_template_part('template-parts/lumecca-how-it-works', null, $lumecca_how_args);

get_template_part('template-parts/lumecca-why-wanderlust', null, $lumecca_why_args);

get_template_part('template-parts/lumecca-areas', null, $lumecca_areas_args);

get_template_part('template-parts/lumecca-results',null, $results_section );

get_template_part(
    'template-parts/lumecca-final-cta',
    null,
    $lumecca_final_cta_args
);
get_footer("lumecca");
