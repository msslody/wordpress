<?php
/**
 * Restaurant Chef: Customizer
 *
 * @subpackage Restaurant Chef
 * @since 1.0
 */

function restaurant_chef_customize_register( $wp_customize ) {

    wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

    // Pro Section
    $wp_customize->add_section('restaurant_chef_pro', array(
        'title'    => __('RESTAURANT PREMIUM', 'restaurant-chef'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('restaurant_chef_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Restaurant_Chef_Pro_Control($wp_customize, 'restaurant_chef_pro', array(
        'label'    => __('RESTAURANT PREMIUM', 'restaurant-chef'),
        'section'  => 'restaurant_chef_pro',
        'settings' => 'restaurant_chef_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'restaurant_chef_customize_register' );


define('RESTAURANT_CHEF_PRO_LINK',__('https://www.ovationthemes.com/products/chef-wordpress-theme','restaurant-chef'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Restaurant_Chef_Pro_Control')):
    class Restaurant_Chef_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( RESTAURANT_CHEF_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE RESTAURANT PREMIUM','restaurant-chef');?> </a>
            </div>
            <div class="col-md">
                <img class="restaurant_chef_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
            <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( RESTAURANT_CHEF_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE RESTAURANT PREMIUM','restaurant-chef');?> </a>
            </div>
        </label>
    <?php } }
endif;