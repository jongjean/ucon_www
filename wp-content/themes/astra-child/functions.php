<?php
// Enqueue child styles
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('astra-child', get_stylesheet_uri(), ['astra-theme-css'], '0.1.0');
});
