<?php
function ecovoyage_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('after_setup_theme', 'ecovoyage_theme_setup');
?>
