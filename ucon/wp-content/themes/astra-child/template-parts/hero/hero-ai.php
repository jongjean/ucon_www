<?php
/**
 * Hero section for AI landing
 * @package astra-child
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$title    = ! empty( $args['title'] ) ? $args['title'] : __('AI로 연결된 창의, UCONCREATIVE', 'astra-child');
$subtitle = ! empty( $args['subtitle'] ) ? $args['subtitle'] : __('UCONAI 기반 맞춤형 AI 서비스 · 공구관리 · 산업별 AI 서포터', 'astra-child');
$cta_text = ! empty( $args['cta_text'] ) ? $args['cta_text'] : __('제품 살펴보기', 'astra-child');
$cta_url  = ! empty( $args['cta_url'] ) ? $args['cta_url'] : home_url('/products');
?>
<section class="ucon-hero">
  <div class="ucon-container">
    <h1 class="ucon-hero__title"><?php echo esc_html( $title ); ?></h1>
    <p class="ucon-hero__subtitle"><?php echo esc_html( $subtitle ); ?></p>
    <a class="ucon-btn" href="<?php echo esc_url( $cta_url ); ?>">
      <?php echo esc_html( $cta_text ); ?>
    </a>
  </div>
</section>
