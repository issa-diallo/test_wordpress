<?php
/**
 * Plugin Name: Test plugin
 */

register_activation_hook(__FILE__, function () {
    touch(__DIR__ . '/voiture');
});

register_deactivation_hook(__FILE__, function () {
    unlink(__DIR__ . '/voiture');
});

add_action('init', function () {
    register_post_type('voiture', [
        'label' => 'voiture',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-car',
    ]);
});
