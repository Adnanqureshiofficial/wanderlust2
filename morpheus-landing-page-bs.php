<?php
/*
Template Name: Morpheus Landing Page
*/

get_header("lumecca");

$theme_uri = get_template_directory_uri();


/*
|--------------------------------------------------------------------------
| 01. HERO SECTION
| Component: template-parts/lumecca-hero.php
| Accepted props follow the existing Lumecca hero component.
|--------------------------------------------------------------------------
*/

$morpheus_hero_args = [

    'badge_text' => 'WANDERLUST AESTHETICS | ADVANCED SKIN REJUVENATION',

    'heading' => 'Firmer Looking Skin<br><em>Starts Here.</em>',

    'description' => 'Ready to improve the appearance of fine lines, wrinkles and loose skin? Discover Morpheus, an advanced RF microneedling treatment that combines microneedling with radiofrequency energy to support collagen production and improve the appearance of skin texture. Reveal smoother, firmer and more refreshed-looking skin with a personalized treatment plan at Wanderlust Aesthetics.',

    // Replace with the final Morpheus hero image.
    'image_url' => $theme_uri . '/images/bs_assets/morpheus/morpheus-hero.jpeg',
    'image_alt' => 'Morpheus RF microneedling treatment at Wanderlust Aesthetics',

    'main_cta_text' => 'CLAIM YOUR MORPHEUS OFFER',
    'main_cta_url' => '#special-offer',

    'trust_bullets' => [
        'Advanced RF Microneedling',
        'Collagen Stimulation',
        'Customized Treatment',
        'Face & Neck Treatment',
    ],

    'offer_title' => 'LIMITED TIME SPECIAL OFFER $1,899',

    'offer_description' => 'Three Morpheus treatment sessions. Face and neck included.',

    'card_cta_text' => 'BOOK YOUR CONSULTATION',
    'card_cta_url' => '#CTAForm',

];


/*
|--------------------------------------------------------------------------
| 02. THE PROBLEM
| Component: template-parts/lumecca-problem.php
| Accepted props: section_tag, section_title, section_description,
| cards, bottom_text.
|--------------------------------------------------------------------------
*/

$morpheus_problem_args = [

    'section_tag' => 'THE CONCERN',

    'section_title' => 'Is Your Skin Losing Its Firmness?',

    'section_description' => 'As we age, changes in collagen production can affect how firm, smooth and youthful-looking our skin appears. You might begin to notice changes in skin firmness, texture and the appearance of fine lines.',

    'cards' => [

        [
            'number' => '01',
            'title' => 'Loose or Sagging Skin',
            'description' => 'Skin that appears less firm around your cheeks, jawline and neck.',
            'image_url' => $theme_uri . '/assets/images/morpheus/problem-loose-skin.jpg',
            'image_alt' => 'Close-up illustrating the appearance of loose or sagging facial skin',
        ],

        [
            'number' => '02',
            'title' => 'Fine Lines & Wrinkles',
            'description' => 'Visible lines that can make your skin appear less smooth.',
            'image_url' => $theme_uri . '/assets/images/morpheus/problem-fine-lines.jpg',
            'image_alt' => 'Close-up illustrating visible fine lines and wrinkles',
        ],

        [
            'number' => '03',
            'title' => 'Uneven Skin Texture',
            'description' => 'Roughness and enlarged pores that can affect the appearance of your complexion.',
            'image_url' => $theme_uri . '/assets/images/morpheus/problem-skin-texture.jpg',
            'image_alt' => 'Close-up illustrating uneven skin texture',
        ],

        [
            'number' => '04',
            'title' => 'Loss of Skin Firmness',
            'description' => 'Skin that does not look as tight or refreshed as it once did.',
            'image_url' => $theme_uri . '/assets/images/morpheus/problem-skin-firmness.jpg',
            'image_alt' => 'Close-up illustrating changes in skin firmness',
        ],

    ],

    'bottom_text' => 'Your skin deserves more than a temporary fix. Discover a treatment designed to support collagen production and improve the appearance of your skin.',

];


/*
|--------------------------------------------------------------------------
| 03. INTRODUCING MORPHEUS / HOW IT WORKS
| Component: template-parts/lumecca-how-it-works.php
| Accepted props: section_tag, section_title, section_description,
| process_title, treatment_image_url, treatment_image_alt, steps.
|--------------------------------------------------------------------------
*/

$morpheus_how_args = [

    'section_tag' => 'INTRODUCING MORPHEUS',

    'section_title' => 'Meet Morpheus. Your Next Step Towards Firmer-Looking Skin.',

    'section_description' => 'Morpheus combines microneedling with radiofrequency energy to target deeper layers of the skin and support collagen production. This advanced treatment supports skin remodeling, helping improve the appearance of fine lines, wrinkles, skin laxity and uneven texture. At Wanderlust Aesthetics, every treatment is customized according to your skin concerns, treatment area and desired results.',

    'process_title' => 'How Does Morpheus Work?',

    // Replace this placeholder with the planned animated skin-layer illustration
    // or a suitable static illustration until the animation component is ready.
    'treatment_image_url' => $theme_uri . '/images/bs_assets/morpheus/morpheus-how-it-works.jpeg',
    'treatment_image_alt' => 'Illustration showing RF microneedling delivering radiofrequency energy into targeted skin layers',

    'steps' => [

        [
            'number' => '01',
            'title' => 'Microneedling',
            'description' => 'Tiny needles create controlled micro-injuries in the skin.',
        ],

        [
            'number' => '02',
            'title' => 'Radiofrequency Energy',
            'description' => 'RF energy is delivered into targeted skin layers to support collagen remodeling.',
        ],

        [
            'number' => '03',
            'title' => 'Collagen Stimulation',
            'description' => "The treatment stimulates the body's natural collagen response.",
        ],

        [
            'number' => '04',
            'title' => 'Skin Improvement',
            'description' => 'Over time, skin may appear firmer, smoother and more refined.',
        ],

    ],

];


/*
|--------------------------------------------------------------------------
| 04. WHY CHOOSE WANDERLUST AESTHETICS?
| Component: template-parts/lumecca-why-wanderlust.php
| Accepted props: section_tag, section_title, section_description, cards.
|--------------------------------------------------------------------------
*/

$morpheus_why_args = [

    'section_tag' => 'WHY WANDERLUST',

    'section_title' => 'Advanced Technology. Personalized Skin Care.',

    'section_description' => 'At Wanderlust Aesthetics, we believe every skin journey deserves a personalized approach. Our focus is combining advanced aesthetic technology with professional expertise to create treatment experiences tailored to your individual goals.',

    'cards' => [

        [
            'number' => '01',
            'title' => 'Personalized Treatment Plans',
            'description' => 'Every treatment is customized based on your skin concerns and desired outcomes.',
        ],

        [
            'number' => '02',
            'title' => 'Advanced RF Technology',
            'description' => 'Morpheus combines radiofrequency energy with microneedling to support deeper skin remodeling.',
        ],

        [
            'number' => '03',
            'title' => 'Professional Expertise',
            'description' => 'Your treatment is planned and performed by appropriately trained professionals.',
        ],

        [
            'number' => '04',
            'title' => 'Face & Body Treatments',
            'description' => 'Morpheus can address selected skin concerns across the face and body, depending on suitability.',
        ],

    ],

];


/*
|--------------------------------------------------------------------------
| 05. WHAT CAN MORPHEUS DO FOR YOUR SKIN?
| Reuses: template-parts/lumecca-why-wanderlust.php
| The existing cards component supports this content structure.
|--------------------------------------------------------------------------
*/

$morpheus_benefits_args = [

    'section_tag' => 'POTENTIAL BENEFITS',

    'section_title' => 'What Can Morpheus Do For Your Skin?',

    'section_description' => 'Morpheus may help improve the appearance of several skin concerns. Your provider can discuss which benefits are relevant to your skin and treatment goals.',

    'cards' => [

        [
            'number' => '01',
            'title' => 'Firmer-Looking Skin',
            'description' => 'Helps improve the appearance of loose or sagging skin.',
        ],

        [
            'number' => '02',
            'title' => 'Smoother Skin Texture',
            'description' => 'Helps improve the appearance of uneven skin texture and enlarged pores.',
        ],

        [
            'number' => '03',
            'title' => 'Reduced Appearance of Fine Lines',
            'description' => 'May soften the appearance of fine lines and wrinkles.',
        ],

        [
            'number' => '04',
            'title' => 'Refined Skin Tone',
            'description' => 'Supports a smoother, more refined-looking complexion.',
        ],

        [
            'number' => '05',
            'title' => 'Collagen Stimulation',
            'description' => "Encourages the body's natural collagen response for gradual skin improvement.",
        ],

        [
            'number' => '06',
            'title' => 'Deep Skin Remodeling',
            'description' => 'Combines microneedling and RF energy to target deeper skin layers.',
        ],

    ],

];


/*
|--------------------------------------------------------------------------
| 06. TREATMENT AREAS
| Component: template-parts/lumecca-areas.php
| Accepted props: section_tag, section_title, images, content_title,
| table_headers, concerns.
|--------------------------------------------------------------------------
*/

$morpheus_areas_args = [

    'section_tag' => 'TREATMENT AREAS',

    'section_title' => 'ONE TREATMENT.<br>MULTIPLE AREAS OF FOCUS.',

    // Replace these placeholder paths with the final approved treatment images.
    'images' => [

        [
            'image_url' => $theme_uri . '/images/bs_assets/morpheus/area-face.jpg',
            'image_alt' => 'Morpheus treatment focused on the face',
        ],

        [
            'image_url' => $theme_uri . '/images/bs_assets/morpheus/area-neck.jpg',
            'image_alt' => 'Morpheus treatment focused on the neck',
        ],

        [
            'image_url' => $theme_uri . '/images/bs_assets/morpheus/area-body.jpg',
            'image_alt' => 'Morpheus treatment for a selected body area',
        ],

    ],

    'content_title' => 'A Personalized Approach To Your Treatment Areas.',

    'table_headers' => [
        'concern' => 'Treatment area',
        'goal' => 'Areas of focus',
    ],

    'concerns' => [

        [
            'concern' => 'Face',
            'goal' => 'Cheeks, jawline, around the mouth, forehead and under-chin area',
        ],

        [
            'concern' => 'Neck',
            'goal' => 'Skin laxity, fine lines and uneven skin texture',
        ],

        [
            'concern' => 'Selected Body Areas',
            'goal' => 'Customized treatment following professional assessment',
        ],

    ],

];



/*=========================================================
= FAQ
=========================================================*/

$morpheus_faq_args = [

    'section_tag' => 'FAQ',

    'section_title' => 'Everything You Need To Know About Morpheus.',

    'faq_items' => [

        [

            'question' =>
            'What is Morpheus?',

            'answer' =>
            'Morpheus is an advanced RF microneedling treatment that combines tiny needles with radiofrequency energy to stimulate collagen production and improve the appearance of skin texture and firmness.'

        ],

        [

            'question' =>
            'What skin concerns can Morpheus help improve?',

            'answer' =>
            'It can help improve the appearance of fine lines, wrinkles, skin laxity, enlarged pores and uneven skin texture.'

        ],

        [

            'question' =>
            'Is Morpheus painful?',

            'answer' =>
            'Comfort levels vary. A topical numbing cream may be used depending on the treatment protocol. Your provider will explain what to expect before treatment.'

        ],

        [

            'question' =>
            'How many sessions will I need?',

            'answer' =>
            'The number of sessions depends on your skin concerns and desired results. Your provider will recommend a personalized treatment plan.'

        ],

        [

            'question' =>
            'Is there any downtime?',

            'answer' =>
            'Recovery varies depending on treatment intensity and individual skin response. Temporary redness, swelling and sensitivity are possible.'

        ],

        [

            'question' =>
            'When will I see results?',

            'answer' =>
            'Results develop gradually as collagen remodeling takes place. Individual results and timelines vary.'

        ],

        [

            'question' =>
            'Can Morpheus be used on the neck?',

            'answer' =>
            'Yes. Morpheus can be used on selected areas of the neck, depending on individual suitability.'

        ],

        [

            'question' =>
            'Is Morpheus suitable for everyone?',

            'answer' =>
            'Not necessarily. A professional consultation is important to assess your skin, medical history and treatment suitability.'

        ],

        [

            'question' =>
            'How many treatments are included in the $1,899 offer?',

            'answer' =>
            'The special package includes three Morpheus treatment sessions for the face and neck.'

        ]

    ]

];




$morpheus_offer_args = [

    'section_tag' => 'LIMITED-TIME OFFER',

    'section_title' =>
        'Give Your Skin The Attention It Deserves.',

    'section_description' =>
        'Ready to work towards firmer-looking, smoother skin? Discover the benefits of Morpheus RF microneedling with a personalized treatment approach at Wanderlust Aesthetics.',

    'image_url' =>
        get_template_directory_uri() . '/images/bs_assets/morpheus/morpheus-offer.jpg',

    'image_alt' =>
        'Woman with glowing healthy skin gently touching her face',

    'package_items' => [
        'Three Morpheus treatment sessions',
        'Face and neck included',
        'Personalized treatment plan',
        'Advanced RF microneedling technology',
    ],

    'package_price' => '$1,899',

    'package_label' => '3 Morpheus Sessions Included',

    'package_note' => 'Face & Neck',

    'cta_text' => 'CLAIM YOUR MORPHEUS PACKAGE',

    'cta_url' => '#CTAForm',

    'disclaimer' =>
        'Treatment suitability is determined during consultation. Individual results may vary.'

];




/*=========================================================
= FINAL CTA
=========================================================*/



$morpheus_final_cta_args = [

    'section_tag' => 'LIMITED-TIME OFFER',

    'section_title' => 'Ready For A More Refreshed Version Of You?',

    'section_description' =>
    'Take the next step towards smoother, firmer-looking skin. Discover how Morpheus can fit into your skincare goals with a personalized treatment approach at Wanderlust Aesthetics.',

    'service_name' => 'Morpheus RF Microneedling',

    'offer_label' => 'LIMITED-TIME PACKAGE',

    'offer_price' => '$1,899',

    'offer_note' => 'Three Sessions | Face & Neck',

    'offer_description' =>
    'Your personalized Morpheus treatment package includes three RF microneedling sessions for the face and neck.',

    'form_shortcode' => '[contact-form-7 id="7d8ba4f" title="CTA Landing Page"]'

];




/*
|--------------------------------------------------------------------------
| RENDER EXISTING COMPONENTS
|--------------------------------------------------------------------------
*/

get_template_part(
    'template-parts/lumecca-hero',
    null,
    $morpheus_hero_args
);

get_template_part(
    'template-parts/lumecca-problem',
    null,
    $morpheus_problem_args
);

get_template_part(
    'template-parts/lumecca-how-it-works',
    null,
    $morpheus_how_args
);

get_template_part(
    'template-parts/lumecca-why-wanderlust',
    null,
    $morpheus_why_args
);

get_template_part(
    'template-parts/lumecca-why-wanderlust',
    null,
    $morpheus_benefits_args
);

get_template_part(
    'template-parts/lumecca-areas',
    null,
    $morpheus_areas_args
);

get_template_part(
    'template-parts/lumecca-faq',
    null,
    $morpheus_faq_args
);

get_template_part(
    'template-parts/lumecca-special-offer',
    null,
    $morpheus_offer_args
);

get_template_part(
    'template-parts/lumecca-final-cta',
    null,
    $morpheus_final_cta_args
);

get_footer("lumecca");
