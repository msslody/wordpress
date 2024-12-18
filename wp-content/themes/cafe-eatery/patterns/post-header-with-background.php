<?php
 /**
  * Title: Post Header With Background
  * Slug: cafe-eatery/post-header-with-background
  */
?>
<!-- wp:group {"align":"full","className":"banner alignfull","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignfull banner" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/banner.jpg' ); ?>","dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"isDark":false,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover is-light" style="margin-bottom:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/banner.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"alignwide"} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->