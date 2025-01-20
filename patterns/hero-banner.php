<?php
/**
 * Title: Hero Banner
 * Slug: green-olives/hero-banner
 * Categories: banner
 * Keywords: hero, banner
 * Description: Hero banner with a title and subtitle.
 *
 * @package GreenOlives
 * @subpackage Green_Olives_Theme
 * @since Green Olives 1.0
 */

?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/hero-background.png","dimRatio":50,"customOverlayColor":"#f2e8c8","isUserOverlayColor":false,"isDark":false,"style":{"dimensions":{"aspectRatio":"3/2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#f2e8c8"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Olives and olive oil', 'greenolives' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/hero-background.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">natural product</h6>
<!-- /wp:heading -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Let's do business together!</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">Experience the purity of nature with every drop.<br></h6>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->