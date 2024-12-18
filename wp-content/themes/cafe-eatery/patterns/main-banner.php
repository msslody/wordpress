<?php

/**
 * Title: Header Media
 * Slug: cafe-eatery/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.jpg' ); ?>","id":9,"dimRatio":80,"overlayColor":"primary","minHeight":700,"isDark":false,"className":"alignfull bannerimg","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover is-light alignfull bannerimg" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-9" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":57,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"50px","bottomRight":"50px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo get_parent_theme_file_uri( '/assets/images/slide-img.jpg' ); ?>" alt="" class="wp-image-57" style="border-top-left-radius:50px;border-bottom-right-radius:50px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-text-color"}}}},"textColor":"secondary-text-color","fontFamily":"jockey-one"} -->
<h1 class="wp-block-heading has-text-align-center has-secondary-text-color-color has-text-color has-link-color has-jockey-one-font-family" style="font-size:60px"><?php esc_html_e('Supreme Delights','cafe-eatery'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"16px"}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor sit amet','cafe-eatery'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary-text-color","textColor":"background","style":{"border":{"radius":{"topRight":"0px","bottomLeft":"0px","topLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-secondary-text-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-top-left-radius:20px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Order Online','cafe-eatery'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->