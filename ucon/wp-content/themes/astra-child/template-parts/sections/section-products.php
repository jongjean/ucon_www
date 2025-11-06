<?php
/**
 * Products section (3 primary offerings)
 * @package astra-child
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$items = [
  [
    'title' => __('AI 랜툴박스', 'astra-child'),
    'desc'  => __('카메라 기반 공구 생애주기·대여반납 통합관리 (조선소/공장/공공)', 'astra-child'),
    'chip'  => 'UCONAI Vision'
  ],
  [
    'title' => __('공구반장', 'astra-child'),
    'desc'  => __('100개 이하 공구를 스마트폰 하나로 AI 통합 유지관리', 'astra-child'),
    'chip'  => 'Mobile AI'
  ],
  [
    'title' => __('AI 서포터 시리즈', 'astra-child'),
    'desc'  => __('AI-ESG 코디네이터 · AI 도슨트 · AI 농부 · AI 공장장', 'astra-child'),
    'chip'  => 'Domain AI'
  ],
];
?>
<section class="ucon-products">
  <div class="ucon-container">
    <h2 class="ucon-card__title"><?php esc_html_e('Our Products','astra-child'); ?></h2>
    <div class="ucon-products__grid">
      <?php foreach ( $items as $it ) : ?>
        <div class="ucon-product">
          <span class="ucon-chip"><?php echo esc_html( $it['chip'] ); ?></span>
          <h3 class="ucon-card__title" style="margin-top:10px"><?php echo esc_html( $it['title'] ); ?></h3>
          <p class="ucon-card__excerpt"><?php echo esc_html( $it['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
