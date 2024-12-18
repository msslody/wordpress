<?php
 /**
  * Title: Main Header
  * Slug: cafe-eatery/main-header
  */
?>

<!-- wp:group {"className":"main-header","layout":{"type":"default"}} -->
<div class="wp-block-group main-header"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-text-color"}}}},"textColor":"secondary-text-color","fontSize":"medium"} -->
<p class="has-text-align-center has-secondary-text-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor sit amet','cafe-eatery'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"className":"lower-header","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group lower-header" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"inner-lower-header","fontFamily":"inter"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-lower-header has-inter-font-family" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"header-logo "} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"logo","layout":{"type":"default"}} -->
<div class="wp-block-group logo" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"header-nav"} -->
<div class="wp-block-column is-vertically-aligned-center header-nav" style="flex-basis:50%"><!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"background","overlayTextColor":"heading","className":"head-menu-right","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Menu","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Page","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact US","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Book Table","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-info"} -->
<div class="wp-block-column is-vertically-aligned-center header-info" style="flex-basis:20%"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"className":"header-cart"} -->
<div class="wp-block-columns are-vertically-aligned-center header-cart"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","textColor":"white","fontSize":"tiny","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:55%"><!-- wp:woocommerce/mini-cart {"hasHiddenPrice":false,"priceColor":{"slug":"white","color":"#ffffff","name":"Background","class":"has-white-price-color"},"iconColor":{"slug":"white","color":"#ffffff","name":"Background","class":"has-white-price-color"},"fontSize":"extra-small","style":{"typography":{"fontWeight":"700"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->