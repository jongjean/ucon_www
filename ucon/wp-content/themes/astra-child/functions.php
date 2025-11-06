<?php
/**
 * Astra Child (UCON Creative) functions
 * @package astra-child
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_style( 'astra-child', get_stylesheet_uri(), [ 'astra-theme-css' ], '0.1.0' );
  wp_enqueue_style( 'ucon-styles', get_stylesheet_directory_uri() . '/assets/css/ucon.css', [ 'astra-child' ], '0.1.0' );
  wp_enqueue_script( 'ucon-app', get_stylesheet_directory_uri() . '/assets/js/app.js', [], '0.1.0', true );
}, 20 );

add_action( 'after_setup_theme', function() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'editor-styles' );
  add_editor_style( 'assets/css/ucon-editor.css' );
  register_nav_menus( [ 'ucon-cta' => __( 'UCON CTA Menu', 'astra-child' ) ] );
} );

function ucon_get_template_part( $slug, $name = null, $args = [] ) {
  if ( function_exists( 'get_template_part' ) ) {
    get_template_part( $slug, $name, $args );
  }
}

add_shortcode( 'ucon_news_cards', function( $atts ) {
  $atts = shortcode_atts( [ 'count' => 6 ], $atts, 'ucon_news_cards' );
  $q = new WP_Query( [ 'post_type' => 'post', 'posts_per_page' => intval( $atts['count'] ), 'no_found_rows' => true ] );
  ob_start();
  if ( $q->have_posts() ) {
    echo '<div class="ucon-grid ucon-news-grid">';
    while ( $q->have_posts() ) { $q->the_post();
      ucon_get_template_part( 'template-parts/cards/card', 'news', [
        'title'   => get_the_title(),
        'excerpt' => wp_strip_all_tags( wp_trim_words( get_the_excerpt(), 26 ) ),
        'url'     => get_permalink(),
        'thumb'   => ( has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'medium' ) : '' ),
      ] );
    }
    echo '</div>';
    wp_reset_postdata();
  }
  return ob_get_clean();
} );

add_shortcode( 'ucon_products', function() {
  ob_start();
  ucon_get_template_part( 'template-parts/sections/section', 'products', [] );
  return ob_get_clean();
} );
