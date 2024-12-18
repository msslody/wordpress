<?php

add_action( 'admin_menu', 'restaurant_chef_gettingstarted' );
function restaurant_chef_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'restaurant-chef'), esc_html__('Begin Installation', 'restaurant-chef'), 'edit_theme_options', 'restaurant-chef-guide-page', 'restaurant_chef_guide');
}

function restaurant_chef_admin_theme_style() {
   wp_enqueue_style('restaurant-chef-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'restaurant_chef_admin_theme_style');

if ( ! defined( 'RESTAURANT_CHEF_SUPPORT' ) ) {
define('RESTAURANT_CHEF_SUPPORT',__('https://wordpress.org/support/theme/restaurant-chef/','restaurant-chef'));
}
if ( ! defined( 'RESTAURANT_CHEF_REVIEW' ) ) {
define('RESTAURANT_CHEF_REVIEW',__('https://wordpress.org/support/theme/restaurant-chef/reviews/','restaurant-chef'));
}
if ( ! defined( 'RESTAURANT_CHEF_LIVE_DEMO' ) ) {
define('RESTAURANT_CHEF_LIVE_DEMO',__('https://trial.ovationthemes.com/restaurant-chef-pro/','restaurant-chef'));
}
if ( ! defined( 'RESTAURANT_CHEF_BUY_PRO' ) ) {
define('RESTAURANT_CHEF_BUY_PRO',__('https://www.ovationthemes.com/products/chef-wordpress-theme','restaurant-chef'));
}
if ( ! defined( 'RESTAURANT_CHEF_PRO_DOC' ) ) {
define('RESTAURANT_CHEF_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-restaurant-chef-pro-doc/','restaurant-chef'));
}
if ( ! defined( 'RESTAURANT_CHEF_FREE_DOC' ) ) {
define('RESTAURANT_CHEF_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-restaurant-chef-free-doc/','restaurant-chef'));
}
if ( ! defined( 'RESTAURANT_CHEF_THEME_NAME' ) ) {
define('RESTAURANT_CHEF_THEME_NAME',__('Premium Restaurant Chef Theme','restaurant-chef'));
}

/**
 * Theme Info Page
 */
function restaurant_chef_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'restaurant-chef'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( RESTAURANT_CHEF_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'restaurant-chef'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( RESTAURANT_CHEF_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'restaurant-chef'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','restaurant-chef'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','restaurant-chef'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','restaurant-chef'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','restaurant-chef'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','restaurant-chef'); ?></h4>
					<p><?php esc_html_e('To check your website click here','restaurant-chef'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','restaurant-chef'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','restaurant-chef'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','restaurant-chef'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( RESTAURANT_CHEF_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','restaurant-chef'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(RESTAURANT_CHEF_THEME_NAME); ?></h3>
				<img class="restaurant_chef_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( RESTAURANT_CHEF_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'restaurant-chef'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( RESTAURANT_CHEF_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'restaurant-chef'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( RESTAURANT_CHEF_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'restaurant-chef'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'restaurant-chef');?> </li>                 
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'restaurant-chef');?> </li>
					<li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'restaurant-chef');?> </li>
               <li class="upsell-restaurant_chef"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'restaurant-chef');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>