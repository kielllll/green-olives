<?php
/**
 * Title: What We Do
 * Slug: green-olives/what-we-do
 * Description: What we do section.
 *
 * @package GreenOlives
 * @subpackage Green_Olives_Theme
 * @since Green Olives 1.0
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group">
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
        WHAT WE DO
      </h2>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"fontSize":"medium"} -->
    <p class="has-medium-font-size">
      At Green Olives, we transform nature's bounty into liquid gold. Our
      mission is to produce premium quality olive oil that preserves the essence
      of the olives and the land they come from. We carefully cultivate,
      harvest, and press olives to create a range of olive oils that cater to
      diverse culinary needs. From extra virgin olive oil, perfect for drizzling
      and dipping, to robust blends ideal for cooking, each bottle is a
      testament to our dedication to excellence.
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:image {"sizeSlug":"full","linkDestination":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olive-tree-and-bottle.png"} -->
    <figure class="wp-block-image size-full">
      <img
        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/olive-tree-and-bottle.png"
        alt=""
      />
    </figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->