<?php
// ✅ PANEL (General option)
$wp_customize->add_panel('general_options', [
    'title' => __('Options Générales', 'sage'),
    'priority' => 30,
]);

// PANEL CONTACT INFO
$wp_customize->add_panel('contact_info_panel', [
    'title' => __('Contact Info', 'sage'),
    'priority' => 50,
]);
