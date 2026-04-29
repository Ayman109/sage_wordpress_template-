<?php 
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