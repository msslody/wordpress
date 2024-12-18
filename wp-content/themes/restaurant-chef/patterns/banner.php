<?php
/**
 * Title: Banner
 * Slug: restaurant-chef/banner
 * Categories: restaurant-chef, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":21,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.29},"minHeight":730,"minHeightUnit":"px","align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignwide banner-image-cover" style="min-height:730px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-21" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" style="object-position:50% 29%" data-object-fit="cover" data-object-position="50% 29%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"","className":"is-vertically-aligned-center"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"55%","className":"banner-content wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-top banner-content wow zoomIn" style="flex-basis:55%"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"80px"}},"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:80px"><?php esc_html_e("Savor Chef's Delight", 'restaurant-chef'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0"}}},"textColor":"white","className":"banner-text"} -->
<p class="banner-text has-white-color has-text-color has-link-color" style="margin-top:0"><?php esc_html_e('Culinary Creations Crafted with Passion Unleash the Artistry of Flavor with Our Masterful Chef','restaurant-chef'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn"} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"style":{"border":{"radius":"0px"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"regular","fontFamily":"outfit"} -->
<div class="wp-block-button has-custom-font-size has-outfit-font-family has-regular-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php esc_html_e('View Menu','restaurant-chef'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->