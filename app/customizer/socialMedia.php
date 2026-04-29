
<?php
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