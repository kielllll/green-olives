<?php
/**
 * Title: Header with Banner
 * Slug: green-olives/header-with-banner
 * Description: Header with navigation and hero banner.
 *
 * @package GreenOlives
 * @subpackage Green_Olives_Theme
 * @since Green Olives 1.0
 */

 ?>

<!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-background.png"},"backgroundSize":"cover","backgroundAttachment":"scroll","backgroundPosition":"100% 0%"},"dimensions":{"minHeight":"100vh"},"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div
  class="wp-block-group"
  style="
    min-height: 100vh;
    padding-right: var(--wp--preset--spacing--80);
    padding-left: var(--wp--preset--spacing--80);
  "
>
  <!-- wp:template-part {"slug":"header","theme":"green-olives","area":"uncategorized"} /-->

  <!-- wp:columns {"verticalAlignment":null,"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
  <div class="wp-block-columns" style="margin-top: 0; margin-bottom: 0">
    <!-- wp:column {"verticalAlignment":"center","width":"","layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-column is-vertically-aligned-center">
      <!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
      <h6
        class="wp-block-heading has-accent-2-color has-text-color has-link-color"
      >
        Natural product
      </h6>
      <!-- /wp:heading -->

      <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
      <h2
        class="wp-block-heading has-accent-2-color has-text-color has-link-color"
      >
        <mark
          style="background-color: rgba(0, 0, 0, 0)"
          class="has-inline-color has-accent-1-color"
          >Let's do business</mark
        >
        together
      </h2>
      <!-- /wp:heading -->

      <!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
      <h6
        class="wp-block-heading has-accent-2-color has-text-color has-link-color"
      >
        Experience the purity of nature with every drop
      </h6>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
