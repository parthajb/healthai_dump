<?php
/**
 * Theme sidebars
 */

$cryptibit_theme_options = cryptibit_get_theme_options();

/**
 * Theme sidebars
 */
if (!function_exists('cryptibit_sidebars_init')) :
function cryptibit_sidebars_init() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    register_sidebar(
      array(
        'name' => esc_html__( 'Blog sidebar', 'cryptibit' ),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in the left or right site column for blog related pages.', 'cryptibit' )
      )
    );
    register_sidebar(
      array(
        'name' => esc_html__( 'Page sidebar', 'cryptibit' ),
        'id' => 'page-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in the left or right site column for pages.', 'cryptibit' )
      )
    );
    register_sidebar(
      array(
        'name' => esc_html__( 'Portfolio sidebar', 'cryptibit' ),
        'id' => 'portfolio-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in the left or right site column for portfolio items pages.', 'cryptibit' )
      )
    );
    register_sidebar(
      array(
        'name' => esc_html__( 'WooCommerce sidebar', 'cryptibit' ),
        'id' => 'woocommerce-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in the left or right site column for woocommerce pages.', 'cryptibit' )
      )
    );
    register_sidebar(
      array(
        'name' => esc_html__( 'Offcanvas Right sidebar', 'cryptibit' ),
        'id' => 'offcanvas-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in the right floating offcanvas menu sidebar that can be opened by toggle button in header. You can enable this sidebar in theme control panel.', 'cryptibit' )
      )
    );

    register_sidebar(
      array(
        'name' => esc_html__( 'Bottom sidebar (4 column)', 'cryptibit' ),
        'id' => 'bottom-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown below site content in 4 column.', 'cryptibit' )
      )
    );

    register_sidebar(
      array(
        'name' => esc_html__( 'Footer sidebar (1-5 columns)', 'cryptibit' ),
        'id' => 'footer-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in site footer in 4 column below Bottom sidebar.', 'cryptibit' )
      )
    );

    register_sidebar(
      array(
        'name' => esc_html__( 'Header Left Sidebar', 'cryptibit' ),
        'id' => 'header-left-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown in the left header below menu if you use Left side header.', 'cryptibit' )
      )
    );

    // Mega Menu sidebars
    if(isset($cryptibit_theme_options['megamenu_sidebars_count']) && ($cryptibit_theme_options['megamenu_sidebars_count'] > 0)) {
        for ($i = 1; $i <= $cryptibit_theme_options['megamenu_sidebars_count']; $i++) {
            register_sidebar(
              array(
                'name' => esc_html__( 'MegaMenu sidebar #', 'cryptibit' ).$i,
                'id' => 'megamenu_sidebar_'.$i,
                'description' => esc_html__( 'You can use this sidebar to display widgets inside megamenu items in menus.', 'cryptibit' )
              )
            );
        }
    }

}
endif;
add_action( 'widgets_init', 'cryptibit_sidebars_init' );

?>
