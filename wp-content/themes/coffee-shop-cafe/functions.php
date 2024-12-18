<?php

    add_action( 'wp_enqueue_scripts', 'wpdevart_coffee_shop_cafe_theme_css' );
    function wpdevart_coffee_shop_cafe_theme_css() {

        wp_enqueue_style( 
            'wpdevart_coffee_shop_cafe_css', 
            get_stylesheet_uri(),
            ( get_template_directory_uri() ) . 'style.css',
        ); 

        $childWpdevartCoffeeShopMain = 'wpdevart-child-coffee-shop-cafe-main-styles';
        wp_enqueue_style( $childWpdevartCoffeeShopMain,
        get_stylesheet_directory_uri() . '/assets/css/front-end/index.css',
        );

        $childWpdevartCoffeeShopWoo = 'wpdevart-child-coffee-shop-cafe-woo-style';
        wp_enqueue_style( $childWpdevartCoffeeShopWoo,
        get_stylesheet_directory_uri() . '/assets/css/front-end/wpdevart-woocommerce.css',
        );

    }

    ##################------ Removing Parent Theme Style Files ------##################

    function wpdevart_coffee_shop_remove_parent_theme_scripts() {
        wp_dequeue_style( 'wpdevart_ecommerce_modern_store_styles' );
        wp_deregister_style( 'wpdevart_ecommerce_modern_store_styles' );
        wp_dequeue_style( 'wpdevart_ecommerce_modern_store_woocommerce_styles' );
        wp_deregister_style( 'wpdevart_ecommerce_modern_store_woocommerce_styles' );
    }
    add_action( 'wp_enqueue_scripts', 'wpdevart_coffee_shop_remove_parent_theme_scripts', 11 );

    ##################------ INCLUDING DEFAULT OPTIONS ------##################

    require( get_theme_file_path() . '/inc/admin/wpdevart-coffee-shop-cafe-add-default-options.php' );
		
    ##################------ DEFAULT CUSTOMIZER ------##################
	
    add_filter( 'parent_wpdevart_ecommerce_modern_store_woo_search_bar_categories_text_hover_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
    add_filter( 'parent_wpdevart_ecommerce_modern_store_main_header_sub_menu_top_border_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_header_mobile_menu_button_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
    add_filter( 'parent_wpdevart_ecommerce_modern_store_header_search_button_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
    add_filter( 'parent_wpdevart_ecommerce_modern_store_header_descktop_search_button_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
    add_filter( 'parent_wpdevart_ecommerce_modern_store_single_post_banner_entry_link_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_single_page_banner_entry_link_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_blog_settings_title_hover_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_blog_settings_metas_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_custom_homepage_banner_sliding_text_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_homepage_sections_description_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_custom_homepage_achievements_second_text_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_custom_homepage_advantages_second_icon_title_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_custom_homepage_latest_posts_title_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_woocommerce_account_icon_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_woocommerce_cart_icon_color', 'coffee_shop_cafe_wpdevart_customizer_default_main_color' );
    function coffee_shop_cafe_wpdevart_customizer_default_main_color(){
        return '#db9457';
    }

    add_filter( 'parent_wpdevart_ecommerce_modern_store_header_logo_text_color', 'coffee_shop_cafe_wpdevart_customizer_default_second_color' );
    add_filter( 'parent_wpdevart_ecommerce_modern_store_header_logo_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_second_color' );
    function coffee_shop_cafe_wpdevart_customizer_default_second_color(){
        return '#000000';
    }
	
    add_filter( 'parent_wpdevart_ecommerce_modern_store_woo_search_bar_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_top_header_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_top_header_bg_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_top_header_social_icons_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_header_mobile_menu_background_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_mobile_menu_bg_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_blog_settings_category_bg_hover_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_pagination_buttons_bg_hover_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_woo_pagination_buttons_bg_hover_color', 'coffee_shop_cafe_wpdevart_customizer_default_third_color' );
    function coffee_shop_cafe_wpdevart_customizer_default_third_color(){
        return '#f6ede6';
    }

	add_filter( 'parent_wpdevart_ecommerce_modern_store_single_post_banner_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_single_post_banner_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_single_page_banner_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_single_page_banner_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_archive_banner_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_archive_banner_bg_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_search_banner_bg_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
	add_filter( 'parent_wpdevart_ecommerce_modern_store_search_banner_bg_gradient_color', 'coffee_shop_cafe_wpdevart_customizer_default_fourth_color' );
    function coffee_shop_cafe_wpdevart_customizer_default_fourth_color(){
        return '#fffdfb';
    }
	
    add_filter( 'parent_wpdevart_ecommerce_modern_store_premium_features_url', 'coffee_shop_cafe_wpdevart_customizer_pro_link' );
    function coffee_shop_cafe_wpdevart_customizer_pro_link(){
        return 'https://wpdevart.com/wordpress-coffee-shop-cafe-theme';
    }
	add_filter( 'parent_wpdevart_child_demo_url', 'coffee_shop_cafe_wpdevart_child_demo_url' );
	function coffee_shop_cafe_wpdevart_child_demo_url(){
		return 'https://coffeeshopcafe.wpdevart.com';
	}
	add_filter( 'parent_wpdevart_child_wp_support_url', 'coffee_shop_cafe_wpdevart_demo_url' );
	function coffee_shop_cafe_wpdevart_demo_url(){
		return 'https://wordpress.org/support/theme/coffee-shop-cafe';
	}
	add_filter( 'parent_wpdevart_child_wp_page_url', 'coffee_shop_cafe_wpdevart_wp_page_url' );
	function coffee_shop_cafe_wpdevart_wp_page_url(){
		return 'https://wordpress.org/themes/coffee-shop-cafe';
	}
	add_filter( 'parent_wpdevart_child_footer_url_title', 'coffee_shop_cafe_wpdevart_footer_url_title' );
	function coffee_shop_cafe_wpdevart_footer_url_title(){
		return __( 'WordPress Coffee Shop: Cafe Theme', 'coffee-shop-cafe' );
	}
	add_filter( 'parent_wpdevart_child_footer_url_text', 'coffee_shop_cafe_wpdevart_footer_url_text' );
	function coffee_shop_cafe_wpdevart_footer_url_text(){
		return __( 'Coffee Shop: Cafe', 'coffee-shop-cafe' );
	}
	add_filter( 'parent_wpdevart_child_description_text', 'coffee_shop_cafe_wpdevart_description_text' );
	function coffee_shop_cafe_wpdevart_description_text(){
		return __( 'Coffee Shop: Cafe is a WordPress theme integrated with WooCommerce and is very suitable for cafe or coffee shop websites. The theme has a modern design and a variety of layouts to choose from. All the settings are customizable, so you can change or even hide any part of the site. For example, if you don’t need to display the top bar/header, then no problem, just go to the Top Header settings page and disable the section (by the way, you can hide any social media icon or phone/email/address). WordPress Coffee Shop: Cafe theme allows you to have full control over the design of your site. The main header has two styles, from which you can choose the one you like. In the main header, all elements, from the logo color to the button style, are also customizable.', 'coffee-shop-cafe' );
	}
		
    ##################------ CHILD FEATURES ------##################

    function wpdevart_coffee_shop_cafe_theme_features() {
        register_nav_menu('primary_menu', esc_html__( 'Primary Menu', 'coffee-shop-cafe'));
        load_theme_textdomain( 'coffee-shop-cafe', get_template_directory() . '/languages' ); 
        add_theme_support( 'custom-logo' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('wp-block-styles');
        add_theme_support('widgets');
        add_theme_support('widgets-block-editor');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );
        add_editor_style( 'editor-style.css' );
        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    add_action('after_setup_theme', 'wpdevart_coffee_shop_cafe_theme_features');
  
    ##################------ REGISTERING WIDGETS ------##################

    function wpdevart_coffee_shop_cafe_widgets_init() {
        $defaults = array(
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_blog_sidebar',
            'name'        => esc_html__( 'Blog Sidebar', 'coffee-shop-cafe'),
            'description' => esc_html__( 'Default sidebar for blog/archive and post/page.', 'coffee-shop-cafe'),
        ) ) );	
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_footer_large_widget',
            'name'        => esc_html__( 'Footer Large Widget', 'coffee-shop-cafe'),
            'description' => esc_html__( 'Large footer widget.', 'coffee-shop-cafe'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_footer_widget_01',
            'name'        => esc_html__( 'Footer Widget 1', 'coffee-shop-cafe'),
            'description' => esc_html__( 'A regular footer widget.', 'coffee-shop-cafe'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_footer_widget_02',
            'name'        => esc_html__( 'Footer Widget 2', 'coffee-shop-cafe'),
            'description' => esc_html__( 'A regular footer widget.', 'coffee-shop-cafe'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_footer_widget_03',
            'name'        => esc_html__( 'Footer Widget 3', 'coffee-shop-cafe'),
            'description' => esc_html__( 'A regular footer widget.', 'coffee-shop-cafe'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_footer_widget_04',
            'name'        => esc_html__( 'Footer Widget 4', 'coffee-shop-cafe'),
            'description' => esc_html__( 'A regular footer widget.', 'coffee-shop-cafe'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'wpdevart_ecommerce_modern_store_woocommerce_sidebar',
            'name'        => esc_html__( 'WooCommerce Sidebar', 'coffee-shop-cafe'),
            'description' => esc_html__( 'Sidebar for WooCommerce store pages.', 'coffee-shop-cafe'),
        ) ) );        
    }
    add_action( 'widgets_init', 'wpdevart_coffee_shop_cafe_widgets_init' );