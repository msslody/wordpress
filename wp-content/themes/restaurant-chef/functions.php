<?php
/**
 * Restaurant Chef functions and definitions
 *
 * @package Restaurant Chef
 */

if ( ! function_exists( 'restaurant_chef_setup' ) ) :
function restaurant_chef_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'restaurant-chef', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
	
}
endif; // restaurant_chef_setup
add_action( 'after_setup_theme', 'restaurant_chef_setup' );

function restaurant_chef_scripts() {
	wp_enqueue_style( 'restaurant-chef-basic-style', get_stylesheet_uri() );

	$restaurant_chef_enable_animations = get_option( 'restaurant_chef_enable_animations', true );

    if ( $restaurant_chef_enable_animations ) {
        //animation
	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('restaurant-chef-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'restaurant_chef_scripts' );

// Get start function

function restaurant_chef_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('restaurant-chef-admin-js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
    wp_localize_script(
        'restaurant-chef-admin-js',
        'restaurant_chef',
        array(
            'admin_ajax'    =>  admin_url('admin-ajax.php'),
            'wpnonce'           =>  wp_create_nonce('restaurant_chef_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('restaurant-chef-admin-js');

    wp_localize_script( 'restaurant-chef-admin-js', 'restaurant_chef_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'restaurant_chef_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_restaurant_chef_dismissed_notice_handler', 'restaurant_chef_ajax_notice_dismiss_fuction' );

function restaurant_chef_ajax_notice_dismiss_fuction() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'restaurant_chef_dismissed_notice_nonce')) {
        exit;
    }
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

//get start box
function restaurant_chef_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $restaurant_chef_current_screen = get_current_screen();
        if ($restaurant_chef_current_screen && $restaurant_chef_current_screen->id !== 'appearance_page_restaurant-chef-guide-page') {
            $restaurant_chef_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php echo esc_html($restaurant_chef_theme->get('Name')); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'restaurant-chef'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( RESTAURANT_CHEF_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'restaurant-chef'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( RESTAURANT_CHEF_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'restaurant-chef'); ?></a>
                        <a class="button-primary theme-install" href="themes.php?page=restaurant-chef-guide-page"><?php _e('Theme Installation', 'restaurant-chef'); ?></a> 
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'restaurant_chef_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'restaurant_chef_after_switch_theme');
function restaurant_chef_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}

//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );

require get_template_directory() .'/inc/TGM/tgm.php';