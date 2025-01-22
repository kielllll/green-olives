<?php
/**
 * Title: Quote
 * Slug: green-olives/quote
 * Description: Quote section.
 *
 * @package GreenOlives
 * @subpackage Green_Olives_Theme
 * @since Green Olives 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div
  class="wp-block-group"
  style="margin-top: 0; margin-bottom: 0; padding-right: 0; padding-left: 0"
>
  <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olive-color-background.png","dimRatio":0,"overlayColor":"base","isUserOverlayColor":true,"minHeight":689,"isDark":false,"layout":{"type":"constrained"}} -->
  <div class="wp-block-cover is-light" style="min-height: 689px">
    <span
      aria-hidden="true"
      class="wp-block-cover__background has-base-background-color has-background-dim-0 has-background-dim"
    ></span
    ><img
      class="wp-block-cover__image-background"
      alt=""
      src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olive-color-background.png"
      data-object-fit="cover"
    />
    <div class="wp-block-cover__inner-container">
      <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2","fontSize":"xx-large"} -->
      <h2
        class="wp-block-heading has-text-align-center has-accent-2-color has-text-color has-link-color has-xx-large-font-size"
      >
        ❝Health is wealth,<br />is it always better when it is natural❞
      </h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
      <p
        class="has-text-align-center has-accent-2-color has-text-color has-link-color"
      >
        - anonymous
      </p>
      <!-- /wp:paragraph -->
    </div>
  </div>
  <!-- /wp:cover -->
</div>
<!-- /wp:group -->


