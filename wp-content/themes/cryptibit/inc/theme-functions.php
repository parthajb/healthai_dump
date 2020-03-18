<?php
/**
 * Additional theme functions
 **/

$cryptibit_theme_options = cryptibit_get_theme_options();

require_once ('class-tgm-plugin-activation.php');

/**
 * Plugins installations
 */
if (!function_exists('cryptibit_register_required_plugins')) :
function cryptibit_register_required_plugins() {
    $plugins = array(

        array(
            'name'                  => esc_html__('CryptiBIT Visual Page Builder', 'cryptibit'), // The plugin name
            'slug'                  => 'js_composer', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/inc/plugins/js_composer.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '6.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        ),
        array(
            'name'                  => esc_html__('CryptiBIT Theme Addons', 'cryptibit'), // The plugin name
            'slug'                  => 'cryptibit-theme-addons', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/inc/plugins/cryptibit-theme-addons.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '1.0.1', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        ),
        array(
            'name'                  => esc_html__('CryptiBIT Custom Metaboxes', 'cryptibit'), // The plugin name
            'slug'                  => 'cmb2', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/inc/plugins/cmb2.zip', // The plugin source
            'required'              => true, // If false, the plugin is only 'recommended' instead of required
            'version'               => '2.6.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        ),
        array(
            'name'                  => esc_html__('Slider Revolution', 'cryptibit'), // The plugin name
            'slug'                  => 'revslider', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/inc/plugins/revslider.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '6.1.5', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        ),
        array(
            'name'                  => esc_html__('CryptiBIT Coins Widgets', 'cryptibit'), // The plugin name
            'slug'                  => 'virtual_coin_widgets_vc', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/inc/plugins/virtual_coin_widgets_vc.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '2.2.2', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        ),
        array(
            'name'                  => esc_html__('CryptiBIT Roadmap Timeline', 'cryptibit'), // The plugin name
            'slug'                  => 'mgroadmaptimeline', // The plugin slug (typically the folder name)
            'source'                => get_template_directory() . '/inc/plugins/mgroadmaptimeline.zip', // The plugin source
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'version'               => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
        ),
        array(
            'name'                  => esc_html__('CryptiBIT Display Widgets', 'cryptibit'), // The plugin name
            'slug'                  => 'ah-display-widgets', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'                  => esc_html__('WordPress Breadcrumbs', 'cryptibit'), // The plugin name
            'slug'                  => 'breadcrumb-navxt', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'                  => esc_html__('WordPress LightBox', 'cryptibit'), // The plugin name
            'slug'                  => 'responsive-lightbox', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'                  => esc_html__('Contact Form 7', 'cryptibit'), // The plugin name
            'slug'                  => 'contact-form-7', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'                  => esc_html__('Regenerate Thumbnails', 'cryptibit'), // The plugin name
            'slug'                  => 'regenerate-thumbnails', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
        ),
        array(
            'name'                  => esc_html__('CryptiBIT Translation Manager', 'cryptibit'), // The plugin name
            'slug'                  => 'loco-translate', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
        )

    );

    $config = array(
        'domain'            => 'cryptibit',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                          // Default absolute path to pre-packaged plugins
        'menu'              => 'install-required-plugins',  // Menu slug
        'has_notices'       => true,                        // Show admin notices or not
        'dismissable'  => true,
        'is_automatic'      => false,                       // Automatically activate plugins after installation or not
        'message'           => ''                          // Message to output right before the plugins table
    );

    tgmpa( $plugins, $config );

}
endif;
add_action( 'tgmpa_register', 'cryptibit_register_required_plugins' );

/**
 * Google Fonts Loading
 */
if (!function_exists('cryptibit_google_fonts_url')) :
function cryptibit_google_fonts_url() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    $font_url = '';
    $font_header = '';
    $font_body = '';
    $font_additional = '';

    // Demo settings
    if ( defined('DEMO_MODE') && isset($_GET['header_font']) ) {
      $cryptibit_theme_options['header_font']['font-family'] = $_GET['header_font'];
    }
    if ( defined('DEMO_MODE') && isset($_GET['body_font']) ) {
      $cryptibit_theme_options['body_font']['font-family'] = $_GET['body_font'];
    }
    if ( defined('DEMO_MODE') && isset($_GET['additional_font']) ) {
      $cryptibit_theme_options['additional_font']['font-family'] = $_GET['additional_font'];
    }
    if ( defined('DEMO_MODE') && isset($_GET['buttons_font']) ) {
      $cryptibit_theme_options['buttons_font']['font-family'] = $_GET['buttons_font'];
    }

    if(!isset($cryptibit_theme_options['font_google_disable']) || $cryptibit_theme_options['font_google_disable'] == false) {

        // Header font
        if(isset($cryptibit_theme_options['header_font'])) {
            $font_header = $cryptibit_theme_options['header_font']['font-family'];

            if(isset($cryptibit_theme_options['header_font_options'])) {
                $font_header = $font_header.':'.$cryptibit_theme_options['header_font_options'];
            }
        }
        // Body font
        if(isset($cryptibit_theme_options['body_font'])) {
            $font_body = '|'.$cryptibit_theme_options['body_font']['font-family'];

            if(isset($cryptibit_theme_options['body_font_options'])) {
                $font_body = $font_body.':'.$cryptibit_theme_options['body_font_options'];
            }
        }
        // Buttons font
        if(isset($cryptibit_theme_options['buttons_font'])) {
            $font_buttons = '|'.$cryptibit_theme_options['buttons_font']['font-family'];

            if(isset($cryptibit_theme_options['buttons_font_options'])) {
                $font_buttons = $font_buttons.':'.$cryptibit_theme_options['buttons_font_options'];
            }
        }
        // Additional font
        if(isset($cryptibit_theme_options['additional_font_enable']) && $cryptibit_theme_options['additional_font_enable']) {
            if(isset($cryptibit_theme_options['additional_font'])) {
                $font_additional = '|'.$cryptibit_theme_options['additional_font']['font-family'].'|';
            }
        }

        // Build Google Fonts request
        $font_url = add_query_arg( 'family', urlencode( $font_header.$font_body.$font_buttons.$font_additional ), "//fonts.googleapis.com/css" );

    }

    return $font_url;
}
endif;

/**
 * Social Icons display
 */
if (!function_exists('cryptibit_social_icons_show')) :
function cryptibit_social_icons_show() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    $s_count = 0;

    $social_services_html = '';

    $social_services_arr = Array("facebook", "vk","twitter", "google-plus", "behance", "linkedin", "dribbble", "instagram", "tumblr", "pinterest", "vimeo-square", "youtube", "skype", "houzz", "flickr", "odnoklassniki");

    foreach( $social_services_arr as $ss_data ){
      if(isset($cryptibit_theme_options[$ss_data]) && (trim($cryptibit_theme_options[$ss_data])) <> '') {
        $s_count++;
        $social_service_url = $cryptibit_theme_options[$ss_data];
        $social_service = $ss_data;
        $social_services_html.= '<li><a href="'.esc_url($social_service_url).'" target="_blank" class="a-'.esc_attr($social_service).'"><i class="fa fa-'.esc_attr($social_service).'"></i></a></li>';
      }
    }

    if($s_count > 0) {
        $social_services_html = '<div class="social-icons-wrapper"><ul>'.$social_services_html.'</ul></div>';

        echo wp_kses_post($social_services_html);
    }
}
endif;

/**
 * Top Menu Display
 */
if (!function_exists('cryptibit_menu_top_show')) :
function cryptibit_menu_top_show() {
    $cryptibit_theme_options = cryptibit_get_theme_options();

     // DEMO SETTINGS
    if ( defined('DEMO_MODE') && isset($_GET['disable_top_menu']) ) {
      $cryptibit_theme_options['disable_top_menu'] = true;
    }

    if(isset($cryptibit_theme_options['disable_top_menu']) && (!$cryptibit_theme_options['disable_top_menu'])): ?>

    <?php

    $header_container_class = 'container';

    $add_class = '';

    if(isset($cryptibit_theme_options['top_menu_position'])) {
         // DEMO SETTINGS
        if ( defined('DEMO_MODE') && isset($_GET['header_menu_layout']) ) {
          $cryptibit_theme_options['header_menu_layout'] = esc_html($_GET['header_menu_layout']);
        }

        // Use menu below header if you use center logo layout
        if(isset($cryptibit_theme_options['header_logo_position']) && $cryptibit_theme_options['header_logo_position'] == 'center') {
          $cryptibit_theme_options['header_menu_layout'] = 'menu_below_header';
        }

        if(isset($cryptibit_theme_options['header_fullwidth']) && $cryptibit_theme_options['header_fullwidth']) {
          $header_container_class = 'container-fluid';
        }

    }

    // Top menu align
    if(isset($cryptibit_theme_options['top_menu_align'])) {
        $add_class .= ' top-menu-align-'.$cryptibit_theme_options['top_menu_align'];
    }

    ?>
    <div class="header-menu-bg<?php echo esc_attr($add_class); ?>">
      <div class="header-menu">
        <div class="<?php echo esc_attr($header_container_class); ?>">
          <div class="row">
            <div class="col-md-12">
            <?php
            // Header top text
            if((isset($cryptibit_theme_options['header_top_text'])) && ($cryptibit_theme_options['header_top_text'] <> '')) {
              echo '<div class="header-top-text">';
              echo do_shortcode(wp_kses_post($cryptibit_theme_options['header_top_text']));
              echo '</div>';
            }

            // Social icons
            if((isset($cryptibit_theme_options['header_socialicons'])) && ($cryptibit_theme_options['header_socialicons'])) {
                cryptibit_social_icons_show();
            }

            ?>
            <?php if(has_nav_menu( 'top')): ?>
            <div class="menu-top-menu-container-toggle"></div>
            <?php endif; ?>
            <?php
            wp_nav_menu(array(
            'theme_location'  => 'top',
            'menu_class'      => 'top-menu',
            'container_class'         => 'top-menu-container',
            'fallback_cb'    => false,
            ));
            ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif;
}
endif;

/**
 * Menu Below Header Display
 */
if (!function_exists('cryptibit_menu_below_header_show')) :
function cryptibit_menu_below_header_show() {
    $cryptibit_theme_options = cryptibit_get_theme_options();

    // Use menu below header if you use center logo layout
    if(isset($cryptibit_theme_options['header_logo_position']) && $cryptibit_theme_options['header_logo_position'] == 'center') {
      $cryptibit_theme_options['header_menu_layout'] = 'menu_below_header';
    }

    // Demo settings
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_layout']) ) {
      $cryptibit_theme_options['header_menu_layout'] = esc_html($_GET['header_menu_layout']);
    }
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_color_scheme']) ) {
      $cryptibit_theme_options['header_menu_color_scheme'] = esc_html($_GET['header_menu_color_scheme']);
    }
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_align']) ) {
      $cryptibit_theme_options['header_menu_align'] = esc_html($_GET['header_menu_align']);
    }
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_text_transform']) ) {
      $cryptibit_theme_options['header_menu_text_transform'] = esc_html($_GET['header_menu_text_transform']);
    }
     if ( defined('DEMO_MODE') && isset($_GET['header_menu_width']) ) {
      $cryptibit_theme_options['header_menu_width'] = esc_html($_GET['header_menu_width']);
    }

    // MainMenu Below header position
    if((isset($cryptibit_theme_options['header_menu_layout'])) && ($cryptibit_theme_options['header_menu_layout'] == 'menu_below_header')):
    ?>
    <?php
    // Main menu below header color scheme
    if(!isset($cryptibit_theme_options['header_menu_color_scheme'])) {
        $cryptibit_theme_options['header_menu_color_scheme'] = 'dark';
    }
    if($cryptibit_theme_options['header_menu_color_scheme'] == 'menu_dark') {
        $menu_add_class = ' mainmenu-dark';
    }
    if($cryptibit_theme_options['header_menu_color_scheme'] == 'menu_light') {
        $menu_add_class = ' mainmenu-light';
    }
    if($cryptibit_theme_options['header_menu_color_scheme'] == 'menu_light_clean') {
        $menu_add_class = ' mainmenu-light mainmenu-light-clean';
    }

    // Main menu align
    if(!isset($cryptibit_theme_options['header_menu_align'])) {
        $cryptibit_theme_options['header_menu_align'] = 'menu_left';
    }

    if((isset($cryptibit_theme_options['header_menu_align'])) && ($cryptibit_theme_options['header_menu_align'] == 'menu_left')) {
        $menu_add_class .= ' menu-left';
    }

    if((isset($cryptibit_theme_options['header_menu_align'])) && ($cryptibit_theme_options['header_menu_align'] == 'menu_center')) {
        $menu_add_class .= ' menu-center';
    }

    if((isset($cryptibit_theme_options['header_menu_align'])) && ($cryptibit_theme_options['header_menu_align'] == 'menu_right')) {
        $menu_add_class .= ' menu-right';
    }

    // Menu font weight
    if((isset($cryptibit_theme_options['header_menu_font_weight'])) && ($cryptibit_theme_options['header_menu_font_weight'] == 'bold')) {
        $menu_add_class .= ' menu-font-weight-bold';
    }

    // Main menu text transform
    if((isset($cryptibit_theme_options['header_menu_text_transform'])) && ($cryptibit_theme_options['header_menu_text_transform'] == 'menu_uppercase')) {
        $menu_add_class .= ' menu-uppercase';
    }

    // Main menu width
    if((isset($cryptibit_theme_options['header_menu_width'])) && ($cryptibit_theme_options['header_menu_width'] == 'menu_boxed')) {
        $menu_add_class .= ' container';
    }

    ?>
    <div class="mainmenu-belowheader<?php echo esc_attr($menu_add_class); ?>">
    <?php
    // Main Menu

    $menu = wp_nav_menu(
        array (
            'theme_location'  => 'primary',
            'echo' => FALSE,
            'fallback_cb'    => false,
        )
    );

    if (!empty($menu)):
    ?>
      <?php
      $add_class = '';

      if(isset($cryptibit_theme_options['header_menu_style']) && $cryptibit_theme_options['header_menu_style']) {
        $add_class .= " menu-style-".$cryptibit_theme_options['header_menu_style'];
      }

      if(isset($cryptibit_theme_options['megamenu_enable']) && $cryptibit_theme_options['megamenu_enable']) {
        $add_class .= " mgt-mega-menu";
      }
      ?>
        <div id="navbar" class="navbar navbar-default clearfix<?php echo esc_attr($add_class);?>">
          <div class="navbar-inner">
              <div class="container">

              <?php
              if(isset($cryptibit_theme_options['megamenu_enable']) && $cryptibit_theme_options['megamenu_enable']) {
                wp_nav_menu(array(
                  'theme_location'  => 'primary',
                  'container_class' => 'navbar-collapse collapse',
                  'menu_class'      => 'nav',
                  'fallback_cb'    => false,
                  'walker'          => new cryptibit_megamenu_walker
                  ));
              } else {
                 wp_nav_menu(array(
                  'theme_location'  => 'primary',
                  'container_class' => 'navbar-collapse collapse',
                  'menu_class'      => 'nav',
                  'fallback_cb'    => false,
                  'walker'          => new cryptibit_mainmenu_walker
                  ));
              }

              ?>
              </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <?php
    endif;
    // MainMenu Below header position END
}
endif;

/**
 * Header Logo Display
 */
if (!function_exists('cryptibit_header_logo_show')) :
function cryptibit_header_logo_show() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    // Text logo
    if((isset($cryptibit_theme_options['logo_text_enable'])) && ($cryptibit_theme_options['logo_text_enable'])&&(isset($cryptibit_theme_options['logo_text'])) && ($cryptibit_theme_options['logo_text']!=='')) {
        ?>
        <a class="logo-link logo-text" href="<?php echo esc_url(home_url()); ?>"><?php echo wp_kses_post($cryptibit_theme_options['logo_text']);?></a>
        <?php
    // Image logo
    } else {
        ?>
        <a class="logo-link" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_header_image()); ?>" alt="<?php bloginfo('name'); ?>" class="regular-logo"><img src="<?php if ( get_theme_mod( 'cryptibit_header_transparent_logo' ) ) { echo esc_url( get_theme_mod( 'cryptibit_header_transparent_logo' )); } else { echo esc_url(get_header_image()); }  ?>" alt="<?php bloginfo('name'); ?>" class="light-logo"></a>
        <?php
    }


    if(isset($cryptibit_theme_options['header_position']) && $cryptibit_theme_options['header_position'] !== 'left') {
        // Mobile offcanvas menu toggle
        if(isset($cryptibit_theme_options['header_menu_type'])&&($cryptibit_theme_options['header_menu_type'] == 'offcanvas')) {

            echo '<div class="mobile-sidebar-trigger"><div class="st-sidebar-trigger-effects"><a class="float-sidebar-toggle-btn" data-effect="st-sidebar-effect-2"><i class="fa fa-bars"></i></a></div></div>';
        }

        // Mobile fullscreen menu toggle
        if(isset($cryptibit_theme_options['header_menu_type'])&&($cryptibit_theme_options['header_menu_type'] == 'fullscreen')) {
        echo '<div class="mobile-sidebar-trigger"><a class="header-advanced-menu-toggle-btn"><i class="fa fa-bars"></i></a></div>';

        }

        // Mobile menu toggle
        $main_menu = wp_nav_menu(
            array (
                'theme_location'  => 'primary',
                'echo' => FALSE,
                'fallback_cb'    => false,
            )
        );

        if (!empty($main_menu)) {

            echo '<div class="mobile-main-menu-toggle" data-toggle="collapse" data-target=".collapse"><i class="fa fa-bars"></i></div>';
        }

        // Mobile search toggle toggle
        if(isset($cryptibit_theme_options['enable_fullscreen_search'])&&($cryptibit_theme_options['enable_fullscreen_search'])) {

            echo '<div class="mobile-trigger-search"><a class="search-toggle-btn"><i class="fa fa-search"></i></a></div>';
        }
    }


}
endif;

/**
 * Header Info Display
 */
if (!function_exists('cryptibit_header_info_show')) :
function cryptibit_header_info_show() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    if((isset($cryptibit_theme_options['header_info_text'])) && ($cryptibit_theme_options['header_info_text'] <> '')) {
        echo '<div class="header-info-text">'.do_shortcode(wp_kses_post($cryptibit_theme_options['header_info_text'])).'</div>';
    }

}
endif;

/**
 * Header Side Info Display
 */
if (!function_exists('cryptibit_header_side_info_show')) :
function cryptibit_header_side_info_show() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    if((isset($cryptibit_theme_options['header_side_info_text'])) && ($cryptibit_theme_options['header_side_info_text'] <> '')) {
        echo '<div class="header-side-info-text">'.do_shortcode(wp_kses_post($cryptibit_theme_options['header_side_info_text'])).'</div>';
    }

}
endif;

/**
 * Header Left Side Position Display
 */
if (!function_exists('cryptibit_header_side_show')) :
function cryptibit_header_side_show() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    $header_menu_add_class = '';

    if(!isset($cryptibit_theme_options['header_side_align'])) {
        $cryptibit_theme_options['header_side_align'] = 'left';
    }
    // Align
    $header_wrapper_addclass = ' header-left-align-'.$cryptibit_theme_options['header_side_align'];

    if(!isset($cryptibit_theme_options['header_side_color_style'])) {
        $cryptibit_theme_options['header_side_color_style'] = 'light';
    }
    // Color style
    $header_wrapper_addclass .= ' header-color-style-'.$cryptibit_theme_options['header_side_color_style'];

    ?>
    <div class="header-left-wrapper<?php echo esc_attr($header_wrapper_addclass); ?>">
        <div class="header-left-logo clearfix">
            <?php cryptibit_header_logo_show(); ?>
            <div class="header-left-menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
        <?php if((isset($cryptibit_theme_options['header_side_search_enable'])) && ($cryptibit_theme_options['header_side_search_enable'])): ?>
        <div class="header-left-search">
            <?php get_template_part( 'searchform-popup' ); ?>
        </div>
        <?php endif; ?>
        <?php
        // Header left menu text transform
        if((isset($cryptibit_theme_options['header_side_menu_text_transform'])) && ($cryptibit_theme_options['header_side_menu_text_transform'] == 'menu_uppercase')) {
            $header_menu_add_class = ' menu-uppercase';
        }
        // Header left menu font weight
        if((isset($cryptibit_theme_options['header_side_menu_font_weight'])) && ($cryptibit_theme_options['header_side_menu_font_weight'] == 'bold')) {
            $header_menu_add_class .= ' menu-font-weight-bold';
        }
        ?>
        <div class="header-left-menu-wrapper<?php echo esc_attr($header_menu_add_class); ?>">
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'menu_class'      => 'header-left-menu',
            'fallback_cb'    => false,
            'walker'          => new cryptibit_megamenu_walker
            ));
        ?>
        </div>
        <?php if ( is_active_sidebar( 'header-left-sidebar' )):?>
        <div class="header-left-sidebar sidebar">
        <ul id="main-sidebar">
        <?php dynamic_sidebar('header-left-sidebar'); ?>
        </ul>
        </div>
        <?php endif; ?>

        <?php
        // Social icons
        if((isset($cryptibit_theme_options['header_socialicons'])) && ($cryptibit_theme_options['header_socialicons'])) {
            cryptibit_social_icons_show();
        }
        ?>
        <?php
        // Header info text
        cryptibit_header_side_info_show();
        ?>
    </div>
    <?php

}
endif;

/*
* WooCommerce ajax add to cart
*/
// Ensure cart contents update when products are added to the cart via AJAX
if (!function_exists('cryptibit_woocommerce_header_add_to_cart_fragment')) :
function cryptibit_woocommerce_header_add_to_cart_fragment( $fragments ) {
  $cryptibit_theme_options = cryptibit_get_theme_options();
  global $woocommerce;

  $add_class = '';

    // Main menu text transform
    if((isset($cryptibit_theme_options['header_menu_text_transform'])) && ($cryptibit_theme_options['header_menu_text_transform'] == 'menu_uppercase')) {
        $add_class .= ' menu-uppercase';
    }

    // Main menu font weight
    if((isset($cryptibit_theme_options['header_menu_font_weight'])) && ($cryptibit_theme_options['header_menu_font_weight'] == 'bold')) {
        $add_class .= ' menu-font-weight-bold';
    }

  ob_start();
  ?>
  <div class="shopping-cart" id="shopping-cart">

        <a class="cart-toggle-btn" href="<?php echo esc_url(wc_get_cart_url()); ?>"><i class="fa fa-shopping-cart"></i>
        <?php if($woocommerce->cart->cart_contents_count > 0): ?>
        <div class="shopping-cart-count"><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></div>
        <?php endif; ?>
        <span class="<?php echo esc_attr($add_class); ?>"><?php esc_html_e('Shopping cart', 'cryptibit'); ?></span>
        </a>

      <div class="shopping-cart-content">
      <?php
      $cart_products_i = 0;
      $cart_products_more = 0;
      $cart_products_count = count($woocommerce->cart->get_cart());

      if ( $woocommerce->cart->cart_contents_count > 0 ) : ?>
      <div class="shopping-cart-products">
      <?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) : $_product = $cart_item['data'];
      if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 ) continue;

      $cart_products_i++;

      if(isset($cryptibit_theme_options['woocommerce_mini_cart_limit'])) {
        $cart_products_more_limit = $cryptibit_theme_options['woocommerce_mini_cart_limit'];
      } else {
        $cart_products_more_limit = 3;
      }

      if($cart_products_i == $cart_products_more_limit + 1) {
        $cart_products_more = $cart_products_count - $cart_products_more_limit;
        break;
      }

      $product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? wc_get_price_excluding_tax($_product) : wc_get_price_including_tax($_product);
      $product_price = apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key );
      ?>
      <div class="shopping-cart-product clearfix">
        <div class="shopping-cart-product-image">
        <a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>"><?php echo wp_kses_post($_product->get_image()); ?></a>
        </div>
        <div class="shopping-cart-product-remove">
            <?php
                echo wp_kses_post(apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">×</a>', esc_url( wc_get_cart_remove_url( $cart_item_key ) ), esc_html__( 'Remove this item', 'cryptibit' ) ), $cart_item_key ));
            ?>
        </div>
        <div class="shopping-cart-product-title">
        <a href="<?php echo esc_url(get_permalink( $cart_item['product_id'] )); ?>"><?php echo wp_kses_post(apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product )); ?></a>
        </div>
        <div class="shopping-cart-product-price">
        <?php echo wp_kses_post(wc_get_formatted_cart_item_data( $cart_item )); ?><span class="quantity"><?php wp_kses_post(printf( '%s &times; %s', $cart_item['quantity'], $product_price )); ?></span>
        </div>
      </div>
      <?php endforeach; ?>
      <?php if($cart_products_more > 0): ?>
      <div class="shopping-cart-product-more"><?php esc_html_e('And', 'cryptibit'); ?> <?php echo wp_kses_post($cart_products_more); ?> <?php esc_html_e('more product(s) in cart.', 'cryptibit'); ?></div>
      <?php endif; ?>
      </div>

      <div class="shopping-cart-subtotal clearfix"><div class="shopping-cart-subtotal-text"><?php esc_html_e('Subtotal', 'cryptibit'); ?></div><div class="shopping-cart-subtotal-value"><?php echo wp_kses_post(wc_cart_totals_subtotal_html()); ?></div></div>
      <a class="btn mgt-button" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', 'cryptibit'); ?>"><?php esc_html_e('View cart', 'cryptibit'); ?></a> <a class="btn mgt-button mgt-style-bordered mgt-button-checkout" href="<?php echo esc_url(wc_get_checkout_url()); ?>" title="<?php esc_html_e('Proceed to checkout', 'cryptibit'); ?>"><?php esc_html_e('Proceed to checkout', 'cryptibit'); ?></a>
      <?php else : ?>
        <div class="empty-cart-icon-mini">

            <i class="fa fa-shopping-cart" aria-hidden="true"></i>

        </div>
        <div class="empty"><?php esc_html_e('No products in the cart.', 'cryptibit'); ?></div>
      <?php endif; ?>

      </div>
    </div>
  <?php
  $fragments['#shopping-cart'] = ob_get_clean();
  return $fragments;
}
endif;

if(class_exists('Woocommerce')) {
    add_filter('woocommerce_add_to_cart_fragments', 'cryptibit_woocommerce_header_add_to_cart_fragment');
}

/**
 * Header Left Part Display
 */
if (!function_exists('cryptibit_header_left_show')) :
function cryptibit_header_left_show() {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    if(isset($cryptibit_theme_options['header_logo_position']) && $cryptibit_theme_options['header_logo_position'] == 'center') {
        cryptibit_header_info_show();
    } else {
        cryptibit_header_logo_show();
    }

}
endif;

/**
 * Header Center Part Display
 */
if (!function_exists('cryptibit_header_center_show')) :
function cryptibit_header_center_show() {
    $cryptibit_theme_options = cryptibit_get_theme_options();

    // Demo settings
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_layout']) ) {
      $cryptibit_theme_options['header_menu_layout'] = $_GET['header_menu_layout'];
    }
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_text_transform']) ) {
      $cryptibit_theme_options['header_menu_text_transform'] = esc_html($_GET['header_menu_text_transform']);
    }

    if(isset($cryptibit_theme_options['header_logo_position']) && $cryptibit_theme_options['header_logo_position'] == 'center') {
        cryptibit_header_logo_show();
    } else {

        // MainMenu in Header position
        if((isset($cryptibit_theme_options['header_menu_layout'])) && ($cryptibit_theme_options['header_menu_layout'] == 'menu_in_header')):
        ?>
        <?php
        // Main Menu in header
        $menu = wp_nav_menu(
            array (
                'theme_location'  => 'primary',
                'echo' => FALSE,
                'fallback_cb'    => false,
            )
        );

        if (!empty($menu)):
        ?>
        <?php
        if(isset($cryptibit_theme_options['megamenu_enable']) && $cryptibit_theme_options['megamenu_enable']) {
            $add_class = " mgt-mega-menu";
        } else {
            $add_class = "";
        }

        // Main menu align
        if(!isset($cryptibit_theme_options['header_menu_align'])) {
            $cryptibit_theme_options['header_menu_align'] = 'menu_left';
        }

        if((isset($cryptibit_theme_options['header_menu_align'])) && ($cryptibit_theme_options['header_menu_align'] == 'menu_left')) {
            $add_class .= ' menu-left';
        }

        if((isset($cryptibit_theme_options['header_menu_align'])) && ($cryptibit_theme_options['header_menu_align'] == 'menu_center')) {
            $add_class .= ' menu-center';
        }

        if((isset($cryptibit_theme_options['header_menu_align'])) && ($cryptibit_theme_options['header_menu_align'] == 'menu_right')) {
            $add_class .= ' menu-right';
        }

        // Main menu font weight
        if((isset($cryptibit_theme_options['header_menu_font_weight'])) && ($cryptibit_theme_options['header_menu_font_weight'] == 'bold')) {
            $add_class .= ' menu-font-weight-bold';
        }

        // Main menu text transform
        if((isset($cryptibit_theme_options['header_menu_text_transform'])) && ($cryptibit_theme_options['header_menu_text_transform'] == 'menu_uppercase')) {
            $add_class .= ' menu-uppercase';
        }

        // Dropdown menus style
        if(!isset($cryptibit_theme_options['header_menu_style'])) {
            $cryptibit_theme_options['header_menu_style'] = 'shadow';
        }

        if(isset($cryptibit_theme_options['header_menu_style']) && $cryptibit_theme_options['header_menu_style']) {
            $add_class .= " menu-style-".$cryptibit_theme_options['header_menu_style'];
        }

        ?>
            <div id="navbar" class="navbar navbar-default clearfix<?php echo esc_attr($add_class); ?>">
              <div class="navbar-inner">


                  <?php
                    if(isset($cryptibit_theme_options['megamenu_enable']) && $cryptibit_theme_options['megamenu_enable']) {
                        wp_nav_menu(array(
                          'theme_location'  => 'primary',
                          'container_class' => 'navbar-collapse collapse',
                          'menu_class'      => 'nav',
                          'fallback_cb'    => false,
                          'walker'          => new cryptibit_megamenu_walker
                          ));
                    } else {
                         wp_nav_menu(array(
                          'theme_location'  => 'primary',
                          'container_class' => 'navbar-collapse collapse',
                          'menu_class'      => 'nav',
                          'fallback_cb'    => false,
                          'walker'          => new cryptibit_mainmenu_walker
                          ));
                    }
                  ?>

              </div>
            </div>
        <?php endif;//!empty($menu)?>
        <?php else: ?>
        <?php
        // Header info
        cryptibit_header_info_show();
        ?>
        <?php
        endif;
        // MainMenu in Header position END

    }

}
endif;

/**
 * Header Right Part Display
 */
if (!function_exists('cryptibit_header_right_show')) :
function cryptibit_header_right_show() {
    $cryptibit_theme_options = cryptibit_get_theme_options();

    // Demo settings
    if ( defined('DEMO_MODE') && isset($_GET['header_menu_type']) ) {
      $cryptibit_theme_options['header_menu_type'] = $_GET['header_menu_type'];
    }

    ?>

    <ul class="header-nav">
        <?php
        if(isset($cryptibit_theme_options['enable_fullscreen_search'])&&($cryptibit_theme_options['enable_fullscreen_search'])):
        ?>
        <li class="search-toggle"><div id="trigger-search"><a class="search-toggle-btn"><i class="fa fa-search"></i></a></div></li>
        <?php endif; ?>
        <?php
        $menu_button_html = '<div class="icon-lined-menu"><span class="icon-lined-menu-line"></span><span class="icon-lined-menu-line"></span><span class="icon-lined-menu-line"></span></div>';
        ?>
        <?php
        if(isset($cryptibit_theme_options['header_menu_type'])&&($cryptibit_theme_options['header_menu_type'] == 'offcanvas')):
        ?>
        <li class="header-advanced-menu-toggle"><div class="st-sidebar-trigger-effects"><a class="float-sidebar-toggle-btn" data-effect="st-sidebar-effect-2"><?php echo wp_kses_post($menu_button_html); ?></a></div></li>
        <?php endif; ?>

        <?php
        if(isset($cryptibit_theme_options['header_menu_type'])&&($cryptibit_theme_options['header_menu_type'] == 'fullscreen')):
        ?>
        <li class="header-advanced-menu-toggle"><div class="header-advanced-menu-toggle-inside"><a class="header-advanced-menu-toggle-btn"><?php echo wp_kses_post($menu_button_html); ?></a></div></li>
        <?php endif; ?>

        <?php
        if(isset($cryptibit_theme_options['enable_woocommerce_cart'])&&($cryptibit_theme_options['enable_woocommerce_cart'])):
        ?>
        <?php if (class_exists('Woocommerce')): ?>
        <li class="woocommerce-mini-cart">
        <?php
        // Show cart dropdown
        $fragments = array();
        $cart_display = cryptibit_woocommerce_header_add_to_cart_fragment($fragments);
        // Esc this
        //
        echo wp_kses_post($cart_display['#shopping-cart']);
        ?>
        </li>
        <?php endif; ?>

        <?php endif; ?>
      </ul>

<?php
}
endif;

/**
 * Header crypto stat display
 */
if (!function_exists('cryptibit_show_header_crypto_stat')) :
function cryptibit_show_header_crypto_stat() {
    $cryptibit_theme_options = cryptibit_get_theme_options();

    if(isset($cryptibit_theme_options['headercryptostat_enable'])&&($cryptibit_theme_options['headercryptostat_enable'])):
    ?>
    <?php
    if(isset($cryptibit_theme_options['headercryptostat_theme'])) {
        $headercryptostat_theme = $cryptibit_theme_options['headercryptostat_theme'];
    } else {
        $headercryptostat_theme = 'dark';
    }

    if(isset($cryptibit_theme_options['headercryptostat_ratecurrency'])) {
        $headercryptostat_ratecurrency = $cryptibit_theme_options['headercryptostat_ratecurrency'];
    } else {
        $headercryptostat_ratecurrency = 'USD';
    }

    if(isset($cryptibit_theme_options['headercryptostat_currencies'])) {
        $headercryptostat_currencies = $cryptibit_theme_options['headercryptostat_currencies'];
    } else {
        $headercryptostat_currencies = 'bitcoin,ethereum,neo,ripple,cardano,litecoin';
    }

    $headercryptostat_currencies = str_replace(" ", "", $headercryptostat_currencies);

    $headercryptostat_currencies = explode(',', $headercryptostat_currencies);
    ?>
    <div class="header-crypto-stat header-crypto-stat-theme-<?php echo esc_attr($headercryptostat_theme);?>">
      <div class="container">
        <div class="row">
            <?php foreach ($headercryptostat_currencies as $cryptocurrency): ?>
            <div class="col-md-2">
            <?php echo do_shortcode('[mgt_price_ticker_wp cryptocurrency="'.esc_attr($cryptocurrency).'" currency="'.esc_attr($headercryptostat_ratecurrency).'" marketcap="true" volume="true" borders="false" theme="'.esc_attr($headercryptostat_theme).'"]'); ?>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php
    endif;
}
endif;

/**
 * Footer copyright display
 */
if (!function_exists('cryptibit_show_footer_copyright')) :
function cryptibit_show_footer_copyright($footer_col_class) {
    $cryptibit_theme_options = cryptibit_get_theme_options();
    ?>
    <div class="<?php echo esc_attr($footer_col_class);?> footer-copyright">
    <?php
    if(isset($cryptibit_theme_options['footer_copyright_text'])) {
      echo do_shortcode(wp_kses_post($cryptibit_theme_options['footer_copyright_text']));
    }
    ?>
    </div>
    <?php
}
endif;

/**
 * Footer menu display
 */
if (!function_exists('cryptibit_show_footer_menu')) :
function cryptibit_show_footer_menu($footer_col_class) {
    $cryptibit_theme_options = cryptibit_get_theme_options();
    ?>
    <div class="<?php echo esc_attr($footer_col_class);?> footer-menu">
    <?php
      wp_nav_menu(array(
        'theme_location'  => 'footer',
        'menu_class'      => 'footer-menu',
        'fallback_cb'    => false
        ));
    ?>
    </div>
    <?php
}
endif;

/**
 * Blog post excerpt read more link customization
 */
if (!function_exists('cryptibit_excerpt_more')) :
function cryptibit_excerpt_more( $more ) {
    return '...';
}
endif;
add_filter('excerpt_more', 'cryptibit_excerpt_more');

/**
 * Breadcrumbs display
 */
if (!function_exists('cryptibit_show_breadcrumbs')) :
function cryptibit_show_breadcrumbs() {
    if(function_exists('bcn_display')):
    ?>
    <div class="breadcrumbs-container-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
              <?php bcn_display(); ?>
              </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif;
}
endif;


/**
 * Custom body classes
 */
add_filter( 'body_class', 'cryptibit_body_classes' );
if (!function_exists('cryptibit_body_classes')) :
function cryptibit_body_classes($classes) {

    $cryptibit_theme_options = cryptibit_get_theme_options();

    // Progress bar
    if(is_front_page() && isset($cryptibit_theme_options['enable_progressbar']) && $cryptibit_theme_options['enable_progressbar']) {
        $classes[] = 'enable-progressbar';
    }

    // Left header
    if(isset($cryptibit_theme_options['header_position']) && $cryptibit_theme_options['header_position'] == 'left') {
        $classes[] = 'enable-left-header';
    }

    // Sticky header on touch devices
    if(isset($cryptibit_theme_options['sticky_header_touch_disable']) && $cryptibit_theme_options['sticky_header_touch_disable']) {
        $classes[] = 'sticky-header-disable-touch';
    }

    return $classes;
}
endif;

/**
 * WooCommerce sale badge text
 */
add_filter( 'woocommerce_sale_flash', 'cryptibit_custom_sale_text' );

if (!function_exists('cryptibit_custom_sale_text')) :
function cryptibit_custom_sale_text($html) {
    $sale_badge_html = '<span class="onsale">'.esc_html__('Sale', 'cryptibit').'</i></span>';

    return $sale_badge_html;
}
endif;

/**
 * CMB2 images file list display
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
if (!function_exists('cryptibit_cmb2_get_images_src')) :
function cryptibit_cmb2_get_images_src( $post_id, $file_list_meta_key, $img_size = 'medium' ) {

    // Get the list of files
    $files = get_post_meta( $post_id, $file_list_meta_key, 1 );

    $attachments_image_urls_array = Array();

    foreach ( (array) $files as $attachment_id => $attachment_url ) {

        $current_attach = wp_get_attachment_image_src( $attachment_id, $img_size );

        $attachments_image_urls_array[] = $current_attach[0];

    }

    if($attachments_image_urls_array[0] == '') {
        $attachments_image_urls_array = array();
    }

    return $attachments_image_urls_array;

}
endif;

/**
 * Set RevSlider as theme bundled
 */
if(function_exists( 'set_revslider_as_theme' )){

    add_action( 'init', 'cryptibit_setRevSlider_asTheme' );

    function cryptibit_setRevSlider_asTheme() {
        set_revslider_as_theme();
    }
}

/**
 * Customisation Menu Links
 */
class cryptibit_mainmenu_walker extends Walker_Nav_Menu{
      function start_el(&$output, $item, $depth = 0, $args = Array(), $current_object_id = 0 ){
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
           $class_names = $value = '';
           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );

           $add_class = '';

           $post = get_post($item->object_id);

               $class_names = ' class="'.$add_class.' '. esc_attr( $class_names ) . '"';
               $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
               $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
               $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
               $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';

                    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_url( $item->url        ) .'"' : '';

                if (is_object($args)) {
                    $item_output = $args->before;
                    $item_output .= '<a'. $attributes .'>';
                    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
                    $item_output .= $args->link_after;
                    $item_output .= '</a>';
                    $item_output .= $args->after;
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                }
     }
}
