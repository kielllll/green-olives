<?php
/**
 * Title: Header
 * Slug: green-olives/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site title and navigation.
 *
 * @package GreenOlives
 * @subpackage Green_Olives_Theme
 * @since Green Olives 1.0
 */

?>

<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header
  class="wp-block-group"
  style="
    padding-top: var(--wp--preset--spacing--20);
    padding-bottom: var(--wp--preset--spacing--20);
  "
>
  <!-- wp:site-logo {"width":121,"shouldSyncIcon":false,"className":"is-style-default"} /-->

  <!-- wp:buttons {"style":{"border":{"radius":"0px","width":"0px","style":"none"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
  <div
    class="wp-block-buttons"
    style="border-style: none; border-width: 0px; border-radius: 0px"
  >
    <!-- wp:button {"textColor":"accent-2","width":100,"className":"is-style-outline","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"fontSize":"medium"} -->
    <div
      class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size"
    >
      <a
        class="wp-block-button__link has-accent-2-color has-text-color has-background has-link-color wp-element-button"
        href="#who-we-are"
        style="
          border-style: none;
          border-width: 0px;
          border-radius: 0px;
          background-color: #00000000;
        "
        >Who we are</a
      >
    </div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent-2","width":100,"className":"is-style-outline","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"fontSize":"medium"} -->
    <div
      class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size"
    >
      <a
        class="wp-block-button__link has-accent-2-color has-text-color has-background has-link-color wp-element-button"
        href="#what-we-do"
        style="
          border-style: none;
          border-width: 0px;
          border-radius: 0px;
          background-color: #00000000;
        "
        >What we do</a
      >
    </div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent-2","width":100,"className":"is-style-outline","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"fontSize":"medium"} -->
    <div
      class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size"
    >
      <a
        class="wp-block-button__link has-accent-2-color has-text-color has-background has-link-color wp-element-button"
        href="#the-product"
        style="
          border-style: none;
          border-width: 0px;
          border-radius: 0px;
          background-color: #00000000;
        "
        >The product</a
      >
    </div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent-2","width":100,"className":"is-style-outline","style":{"border":{"radius":"0px","width":"0px","style":"none"},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|accent-2"}}}},"fontSize":"medium"} -->
    <div
      class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size"
    >
      <a
        class="wp-block-button__link has-accent-2-color has-text-color has-background has-link-color wp-element-button"
        href="#health"
        style="
          border-style: none;
          border-width: 0px;
          border-radius: 0px;
          background-color: #00000000;
        "
        >Health</a
      >
    </div>
    <!-- /wp:button -->

    <!-- wp:button {"textColor":"accent-1","width":100,"className":"is-style-outline","style":{"border":{"radius":"5px"},"color":{"background":"#ffffff61"},"elements":{"link":{"color":{"text":"var:preset|color|accent-1"}}}},"fontSize":"medium","borderColor":"accent-1"} -->
    <div
      class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-outline has-medium-font-size"
    >
      <a
        class="wp-block-button__link has-accent-1-color has-text-color has-background has-link-color has-border-color has-accent-1-border-color wp-element-button"
        href="#contact-us"
        style="border-radius: 5px; background-color: #ffffff61"
        >LET'S DO BUSINESS</a
      >
    </div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</header>
<!-- /wp:group -->
