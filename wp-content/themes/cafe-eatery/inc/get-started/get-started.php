<?php
add_action( 'admin_menu', 'cafe_eatery_getting_started' );
function cafe_eatery_getting_started() {
	add_theme_page( esc_html__('Get Started', 'cafe-eatery'), esc_html__('Get Started', 'cafe-eatery'), 'edit_theme_options', 'cafe-eatery-guide-page', 'cafe_eatery_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function cafe_eatery_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'cafe_eatery_admin_theme_style');

//guidline for about theme
function cafe_eatery_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'cafe-eatery' );
?>
	<div class="wrapper-outer">
		<div class="intro">
			<h3><?php echo esc_html( $theme->Name ); ?></h3>
			<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'cafe-eatery' ); ?></p>
			<div class="banner-buttons">
				<a href="<?php echo esc_url( CAFE_EATERY_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Theme Documentation', 'cafe-eatery'); ?></a>
			</div>
		</div>
		<div class="left-main-box">
			<div class="about-wrapper">
				<div class="col-left">
					<p><?php echo esc_html( $theme->get( 'Description' ) ); ?></p>
				</div>
				<div class="col-right">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
				</div>
			</div>
			<div class="support-wrapper">
				<div class="review-box">
					<i class="dashicons dashicons-star-filled"></i>
					<h4><?php esc_html_e('Leave Us A Review', 'cafe-eatery'); ?></h4>
					<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'cafe-eatery'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( CAFE_EATERY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate Us', 'cafe-eatery'); ?></a>
					</div>
				</div>
				<div class="support-box">
					<i class="dashicons dashicons-microphone"></i>
					<h4><?php esc_html_e('Need Help?', 'cafe-eatery'); ?></h4>
					<p><?php esc_html_e('Go to our support forum to help you out in case of queries.', 'cafe-eatery'); ?></p>
					<div class="support-button">
						<a class="button button-primary" href="<?php echo esc_url( CAFE_EATERY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Get Support', 'cafe-eatery'); ?></a>
					</div>
				</div>
				<div class="editor-box">
					<i class="dashicons dashicons-admin-appearance"></i>
					<h4><?php esc_html_e('Theme Customization', 'cafe-eatery'); ?></h4>
					<p><?php esc_html_e('Effortlessly modify and maintain your site using editor.', 'cafe-eatery'); ?></p>
					<div class="support-button">
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" target="_blank"><?php esc_html_e('Site Editor', 'cafe-eatery'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="right-main-box">
			<div class="pro-box">
				<i class="dashicons dashicons-cover-image"></i>
				<h4><?php esc_html_e('Go For Premium', 'cafe-eatery'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Proceed for pro version of theme.', 'cafe-eatery'); ?></p>
				<div class="pro-buttons">
					<a class="button button-primary doc-btn" href="<?php echo esc_url( CAFE_EATERY_PRO_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'cafe-eatery'); ?></a>
					<a class="button button-primary buy-btn" href="<?php echo esc_url( CAFE_EATERY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'cafe-eatery'); ?></a>
					<a class="button button-primary demo-btn" href="<?php echo esc_url( CAFE_EATERY_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Pro Demo', 'cafe-eatery'); ?></a>
				</div>
				<ul class="pro-list">
					<li><?php esc_html_e('Responsive Design', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Demo Content Import', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Aditional plugins', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Background sliders', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Video popups', 'cafe-eatery');?></li>
					<li><?php esc_html_e('More Fonts and Colors', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Multiple templates', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Multiple front page sections', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Woocommerce support', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Premium support', 'cafe-eatery');?></li>
					<li><?php esc_html_e('SEO optimization', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Speed optimization', 'cafe-eatery');?></li>
					<li><?php esc_html_e('Browser compatibility', 'cafe-eatery');?></li>
			</div>
		</div>
	</div>
<?php } ?>