<?php
//admin only access
add_action('template_redirect', function () {
    if (is_page('admin-area') && !current_user_can('administrator')) {
        wp_die('Accès refusé');
    }
});