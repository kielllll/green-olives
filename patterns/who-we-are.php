<?php
/**
 * Title: Who We Are
 * Slug: green-olives/who-we-are
 * Description: Who we are section.
 *
 * @package GreenOlives
 * @subpackage Green_Olives_Theme
 * @since Green Olives 1.0
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:media-text {"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olive-oil-portrait.png","mediaType":"image","mediaWidth":40,"imageFill":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}}} -->
  <div
    class="wp-block-media-text is-stacked-on-mobile"
    style="
      padding-top: 0;
      padding-right: var(--wp--preset--spacing--80);
      padding-bottom: 0;
      padding-left: var(--wp--preset--spacing--80);
      grid-template-columns: 40% auto;
    "
  >
    <figure class="wp-block-media-text__media">
      <img
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olive-oil-portrait.png"
        alt=""
      />
    </figure>
    <div class="wp-block-media-text__content">
      <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        <!-- wp:image {"sizeSlug":"full","linkDestination":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brush.png"} -->
        <figure class="wp-block-image size-full">
          <img
            src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/brush.png"
            alt=""
          />
        </figure>
        <!-- /wp:image -->

        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"textColor":"accent-2"} -->
        <h2
          class="wp-block-heading has-accent-2-color has-text-color has-link-color"
        >
          WHO WE ARE
        </h2>
        <!-- /wp:heading -->
      </div>
      <!-- /wp:group -->

      <!-- wp:paragraph {"fontSize":"medium"} -->
      <p class="has-medium-font-size">
        At Green Olives, we are dedicated to bringing the finest, purest olive
        oil to your table. Our commitment to quality means every bottle of Green
        Olives embodies the rich flavors and health benefits of the
        Mediterranean. We pride ourselves on sustainable practices and a deep
        respect for tradition, ensuring that our olive oil is not only delicious
        but also responsibly produced.
      </p>
      <!-- /wp:paragraph -->
    </div>
  </div>
  <!-- /wp:media-text -->
</div>
<!-- /wp:group -->
