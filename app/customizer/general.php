<?php
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
