<?php

add_action('customize_register', function ($wp_customize) {

    

    // ✅ SECTION (identity site )
    $wp_customize->add_section('site_identity', [
        'title' => __('Site Identity', 'sage'),
        'panel' => 'general_options',
        'priority' => 10,
    ]);

    // Setting logo
    $wp_customize->add_setting('site_logo', [
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'site_logo', [
            'label' => __('Logo', 'sage'),
            'section' => 'site_identity',
        ])
    );

    // Nom du site
    $wp_customize->add_setting('site_name', [
        'default' => get_bloginfo('name'),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('site_name', [
        'label' => __('Nom du site', 'sage'),
        'section' => 'site_identity',
        'type' => 'text',
    ]);

    // Slogan
    $wp_customize->add_setting('site_slogan', [
        'default' => 'Mon slogan',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('site_slogan', [
        'label' => __('Slogan du site', 'sage'),
        'section' => 'site_identity',
        'type' => 'text',
    ]);

    // Description
    $wp_customize->add_setting('site_description', [
        'default' => 'Description du site',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('site_description', [
        'label' => __('Description du site', 'sage'),
        'section' => 'site_identity',
        'type' => 'textarea',
    ]);

    
// ✅ SECTION (colors )
$wp_customize->add_section('theme_colors', [
    'title' => __('Colors', 'sage'),
    'panel' => 'general_options',
    'priority' => 20,
]);

//primary color
$wp_customize->add_setting('primary_color', [
    'default' => '#0073aa',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'primary_color', [
        'label' => __('Primary Color', 'sage'),
        'section' => 'theme_colors',
    ])
);


//second color
$wp_customize->add_setting('secondary_color', [
    'default' => '#6c757d',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'secondary_color', [
        'label' => __('Secondary Color', 'sage'),
        'section' => 'theme_colors',
    ])
);
$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'secondary_color', [
        'label' => __('Secondary Color', 'sage'),
        'section' => 'theme_colors',
    ])
);

//text color
$wp_customize->add_setting('text_color', [
    'default' => '#333333',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'text_color', [
        'label' => __('Text Color', 'sage'),
        'section' => 'theme_colors',
    ])
);

//link color 
$wp_customize->add_setting('link_color', [
    'default' => '#0073aa',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'link_color', [
        'label' => __('Link Color', 'sage'),
        'section' => 'theme_colors',
    ])
);

//link hover color 
$wp_customize->add_setting('link_hover_color', [
    'default' => '#005177',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'link_hover_color', [
        'label' => __('Link Hover Color', 'sage'),
        'section' => 'theme_colors',
    ])
);


//title color 
$wp_customize->add_setting('title_color', [
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'title_color', [
        'label' => __('Title Color', 'sage'),
        'section' => 'theme_colors',
    ])
);


//meta info color 
$wp_customize->add_setting('meta_color', [
    'default' => '#888888',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'meta_color', [
        'label' => __('Meta Info Color', 'sage'),
        'section' => 'theme_colors',
    ])
);

//background color 
$wp_customize->add_setting('background_color_custom', [
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
]);

$wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'background_color_custom', [
        'label' => __('Background Color', 'sage'),
        'section' => 'theme_colors',
    ])
);

// ✅ SECTION (Fonts)
$wp_customize->add_section('theme_fonts', [
    'title' => __('Typography', 'sage'),
    'panel' => 'general_options',
    'priority' => 30,
]);

// text font 
$wp_customize->add_setting('text_font', [
    'default' => 'Arial',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('text_font', [
    'label' => __('Text Font', 'sage'),
    'section' => 'theme_fonts',
    'type' => 'select',
    'choices' => [
        'Arial' => 'Arial',
        'Roboto' => 'Roboto',
        'Open Sans' => 'Open Sans',
        'Lato' => 'Lato',
        'Poppins' => 'Poppins',
    ],
]);


//title font
$wp_customize->add_setting('title_font', [
    'default' => 'Poppins',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('title_font', [
    'label' => __('Title Font', 'sage'),
    'section' => 'theme_fonts',
    'type' => 'select',
    'choices' => [
        'Arial' => 'Arial',
        'Roboto' => 'Roboto',
        'Montserrat' => 'Montserrat',
        'Playfair Display' => 'Playfair Display',
        'Poppins' => 'Poppins',
    ],
]);


// SECTION FONT SIZES
$wp_customize->add_section('theme_font_sizes', [
    'title' => __('Font Sizes', 'sage'),
    'panel' => 'general_options',
    'priority' => 40,
]);

// Liste des tailles
$font_sizes = [
    'body_font_size' => ['Body', '16px'],
    'h1_font_size' => ['H1', '36px'],
    'h2_font_size' => ['H2', '30px'],
    'h3_font_size' => ['H3', '24px'],
    'h4_font_size' => ['H4', '20px'],
    'h5_font_size' => ['H5', '18px'],
    'h6_font_size' => ['H6', '16px'],
];

// Loop pour créer settings + controls
foreach ($font_sizes as $id => [$label, $default]) {

    $wp_customize->add_setting($id, [
        'default' => $default,
        'sanitize_callback' => function ($value) {
            return preg_match('/^\d+(px|em|rem|%)$/', $value) ? $value : '16px';
        },
    ]);

    $wp_customize->add_control($id, [
        'label' => __($label . ' Font Size', 'sage'),
        'section' => 'theme_font_sizes',
        'type' => 'text', // tu peux changer en 'number' si tu veux gérer autrement
    ]);
}



// SECTION CONTACT DETAILS
$wp_customize->add_section('contact_details', [
    'title' => __('Contact Details', 'sage'),
    'panel' => 'contact_info_panel',
]);

// Liste des champs
$contacts = [
    'contact_phone'   => ['Phone', '+216 00 000 000'],
    'contact_email'   => ['Email', 'example@email.com'],
    'contact_address' => ['Address', 'Votre adresse ici'],
];

// Loop
foreach ($contacts as $id => [$label, $default]) {

    $wp_customize->add_setting($id, [
        'default' => $default,
        'sanitize_callback' => function ($value) {
            return sanitize_text_field($value);
        },
    ]);

    $wp_customize->add_control($id, [
        'label' => __($label, 'sage'),
        'section' => 'contact_details',
        'type' => 'text',
    ]);
}



$wp_customize->add_section('social_media_links', [
    'title' => __('Social Media Links', 'sage'),
    'panel' => 'contact_info_panel',
    'priority' => 20,
]);

$socials = [
    'facebook_url'  => ['Facebook', 'https://facebook.com/'],
    'instagram_url' => ['Instagram', 'https://instagram.com/'],
    'twitter_url'   => ['Twitter / X', 'https://x.com/'],
    'linkedin_url'  => ['LinkedIn', 'https://linkedin.com/'],
    'youtube_url'   => ['YouTube', 'https://youtube.com/'],
];

foreach ($socials as $id => [$label, $default]) {

    $wp_customize->add_setting($id, [
        'default' => $default,
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control($id, [
        'label' => __($label . ' URL', 'sage'),
        'section' => 'social_media_links',
        'type' => 'url',
    ]);
}

});

add_action('wp_head', function () {
?>
<style>


    .tag {
        font-size: <?php echo get_theme_mod('tag_font_size', '14px'); ?>;
    }

    .meta {
        font-size: <?php echo get_theme_mod('meta_font_size', '12px'); ?>;
    }

    a {
        font-size: <?php echo get_theme_mod('link_font_size', '16px'); ?>;
    }

    h1 { font-size: <?php echo get_theme_mod('h1_font_size', '36px'); ?>; }
    h2 { font-size: <?php echo get_theme_mod('h2_font_size', '30px'); ?>; }
    h3 { font-size: <?php echo get_theme_mod('h3_font_size', '24px'); ?>; }
    h4 { font-size: <?php echo get_theme_mod('h4_font_size', '20px'); ?>; }
    h5 { font-size: <?php echo get_theme_mod('h5_font_size', '18px'); ?>; }
    h6 { font-size: <?php echo get_theme_mod('h6_font_size', '16px'); ?>; }
</style>
<?php
});

add_action('wp_head', function () {
    ?>
    <style>
        body {
            font-size: <?php echo get_theme_mod('body_font_size', '16px'); ?>;
            font-family: '<?php echo get_theme_mod('text_font', 'Arial'); ?>', sans-serif;
            background-color: var(--color-background);

         }

        h1, h2, h3, h4, h5, h6 {
            font-family: '<?php echo get_theme_mod('title_font', 'Poppins'); ?>', sans-serif;
        }
    </style>
    <?php
});

add_action('wp_head', function () {
    ?>
    <style>
        :root {
        
            --color-primary: <?php echo get_theme_mod('primary_color', '#0073aa'); ?>;
            --color-secondary: <?php echo get_theme_mod('secondary_color', '#6c757d'); ?>;
            --color-text: <?php echo get_theme_mod('text_color', '#333'); ?>;
            --color-link: <?php echo get_theme_mod('link_color', '#0073aa'); ?>;
            --color-link-hover: <?php echo get_theme_mod('link_hover_color', '#005177'); ?>;
            --color-background: <?php echo get_theme_mod('background_color_custom', '#ffffff'); ?>;
        }
        p , a , label , span {
             color: var(--color-text);
        }
        h1, h2, h3, h4, h5, h6 {
            color: var(--color-primary);
        }
        button{
            background-color: var(--color-primary);
            color: white;
        }
        a:hover{
            color: var(--color-link-hover);
        }

    </style>
    <?php
});