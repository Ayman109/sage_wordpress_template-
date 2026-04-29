<?php
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