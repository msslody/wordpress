<?php
/**
 * Cafe Eatery functions and definitions
 *
 * @package cafe_eatery
 * @since 1.0
 */

if ( ! function_exists( 'cafe_eatery_support' ) ) :
	function cafe_eatery_support() {

		load_theme_textdomain( 'cafe-eatery', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'cafe_eatery_support' );

if ( ! function_exists( 'cafe_eatery_styles' ) ) :
	function cafe_eatery_styles() {
		// Register theme stylesheet.
		$cafe_eatery_theme_version = wp_get_theme()->get( 'Version' );

		$cafe_eatery_version_string = is_string( $cafe_eatery_theme_version ) ? $cafe_eatery_theme_version : false;
		wp_enqueue_style(
			'cafe-eatery-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$cafe_eatery_version_string
		);

		wp_enqueue_script( 'cafe-eatery-custom-script', get_theme_file_uri( '/assets/custom-script.js' ), array( 'jquery' ), true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'cafe_eatery_styles' );

/* Theme Credit link */
define('CAFE_EATERY_BUY_NOW',__('https://www.cretathemes.com/products/cafeteria-wordpress-theme','cafe-eatery'));
define('CAFE_EATERY_PRO_DEMO',__('https://pattern.cretathemes.com/cafe-eatery/','cafe-eatery'));
define('CAFE_EATERY_THEME_DOC',__('https://pattern.cretathemes.com/free-guide/cafe-eatery/','cafe-eatery'));
define('CAFE_EATERY_PRO_THEME_DOC',__('https://pattern.cretathemes.com/pro-guide/cafe-eatery/','cafe-eatery'));
define('CAFE_EATERY_SUPPORT',__('https://wordpress.org/support/theme/cafe-eatery','cafe-eatery'));
define('CAFE_EATERY_REVIEW',__('https://wordpress.org/support/theme/cafe-eatery/reviews/#new-post','cafe-eatery'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// TGM plugin
require get_template_directory() . '/inc/tgm-plugin/plugin-activation.php';


// Add Getstart admin notice
function cafe_eatery_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'cafe_eatery_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_cafe-eatery-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing Cafe Eatery Theme!', 'cafe-eatery'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=cafe-eatery-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'cafe-eatery'); ?></a> <a class="button button-primary site-edit" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e('Site Editor', 'cafe-eatery'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?cafe_eatery_admin_notice=1"><?php esc_html_e( 'Dismiss', 'cafe-eatery' ); ?></a></strong></p>
	    </div>
	    <?php }?>
	    <?php
	}
}

add_action( 'admin_notices', 'cafe_eatery_admin_notice' );

if( ! function_exists( 'cafe_eatery_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function cafe_eatery_update_admin_notice(){
    if ( isset( $_GET['cafe_eatery_admin_notice'] ) && $_GET['cafe_eatery_admin_notice'] = '1' ) {
        update_option( 'cafe_eatery_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'cafe_eatery_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'cafe_eatery_getstart_setup_options');
function cafe_eatery_getstart_setup_options () {
    update_option('cafe_eatery_admin_notice', FALSE );
}