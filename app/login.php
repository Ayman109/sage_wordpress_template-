<?php
// Modifier le style de la page de connexion
add_filter('login_headerurl', function () {
    return home_url();
});
add_filter('login_headertext', function () {
    return get_bloginfo('name');
});

add_action('login_enqueue_scripts', function () {
    ?>
    <style>


        #login h1 a {
            background-image: url('<?php echo get_theme_mod('site_logo'); ?>');
            background-size: contain;
            width: 100%;
        }

        .login form {
            border-radius: 10px;
        }

        .wp-core-ui .button-primary {
            background: #3b82f6;
            border: none;
        }
    </style>
    <?php
});