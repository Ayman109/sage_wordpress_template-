<?php
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