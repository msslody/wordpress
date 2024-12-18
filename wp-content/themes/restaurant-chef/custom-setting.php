<?php 

function restaurant_chef_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'restaurant-chef-theme-settings', // Menu slug
        'restaurant_chef_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'restaurant_chef_add_admin_menu' );

function restaurant_chef_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'restaurant-chef' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'restaurant_chef_settings_group' );
            do_settings_sections( 'restaurant-chef-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function restaurant_chef_register_settings() {
    register_setting( 'restaurant_chef_settings_group', 'restaurant_chef_enable_animations' );

    add_settings_section(
        'restaurant_chef_settings_section',
        __( 'Animation Settings', 'restaurant-chef' ),
        null,
        'restaurant-chef-theme-settings'
    );

    add_settings_field(
        'restaurant_chef_enable_animations',
        __( 'Enable Animations', 'restaurant-chef' ),
        'restaurant_chef_enable_animations_callback',
        'restaurant-chef-theme-settings',
        'restaurant_chef_settings_section'
    );
}
add_action( 'admin_init', 'restaurant_chef_register_settings' );

function restaurant_chef_enable_animations_callback() {
    $checked = get_option( 'restaurant_chef_enable_animations', true );
    ?>
    <input type="checkbox" name="restaurant_chef_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

