<?php
/**
 * News card
 * Args: title, excerpt, url, thumb
 * @package astra-child
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$title = isset($args['title']) ? $args['title'] : '';
$excerpt = isset($args['excerpt']) ? $args['excerpt'] : '';
$url = isset($args['url']) ? $args['url'] : '';
$thumb = isset($args['thumb']) ? $args['thumb'] : '';
?>
<article class="ucon-card">
  <?php if ( $thumb ) : ?>
    <div class="ucon-card__thumb"><img src="<?php echo esc_url( $thumb ); ?>" alt=""></div>
  <?php endif; ?>
  <?php if ( $title ) : ?>
    <h3 class="ucon-card__title"><?php echo esc_html( $title ); ?></h3>
  <?php endif; ?>
  <?php if ( $excerpt ) : ?>
    <p class="ucon-card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
  <?php endif; ?>
  <?php if ( $url ) : ?>
    <a class="ucon-btn" href="<?php echo esc_url( $url ); ?>"><?php esc_html_e('More','astra-child'); ?></a>
  <?php endif; ?>
</article>
