<?php
if (!defined('ABSPATH')) {
  exit;
}

function custom_enqueue_scripts() {
  // STYLES

  // Bootstrap 5
  wp_register_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', false, '5.1.0', null);
  wp_enqueue_style('bootstrap5');

  // FontAwesome 4
  wp_register_style('font-awesome4', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', null);
  wp_enqueue_style('font-awesome4');

  // Main Style
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', false, '1.0.0', null);
  wp_enqueue_style('main');

  // Responsive Style
  wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', false, '1.0.0', null);
  wp_enqueue_style('responsive');

  // SCRIPTS

  // JQuery
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, '3.6.0', false);
  wp_enqueue_script('jquery');

  // Bundle Bootstrap 5
  wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', false, '5.1.0', true);
  wp_enqueue_script('bootstrap5');

  // Custom Scripts
  wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, '1.0.0', true);
  wp_enqueue_script('custom');
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts', 100 );