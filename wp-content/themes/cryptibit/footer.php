<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package CryptiBIT
 */
?>
<?php
$cryptibit_theme_options = cryptibit_get_theme_options();

$show_bottom_sidebar = true;

// Homepage footer sidebar
if(isset($cryptibit_theme_options['bottom_sidebar_homepage_only']) && ($cryptibit_theme_options['bottom_sidebar_homepage_only']) && is_front_page()) {
  $show_bottom_sidebar = true;
}
if(isset($cryptibit_theme_options['bottom_sidebar_homepage_only']) && ($cryptibit_theme_options['bottom_sidebar_homepage_only']) && !is_front_page()) {
  $show_bottom_sidebar = false;
}

// Fullwidth footer
if(isset($cryptibit_theme_options['footer_layout']) && $cryptibit_theme_options['footer_layout'] == 'boxed') {
  $footer_layout_class = 'container';
} else {
  $footer_layout_class = 'container-fluid';
}

// Footer sidebar columns
if(isset($cryptibit_theme_options['footer_sidebar_columns'])) {
  $footer_sidebar_columns = $cryptibit_theme_options['footer_sidebar_columns'];
} else {
  $footer_sidebar_columns = 4;
}

// Shop page title background image
if(isset($cryptibit_theme_options['footer_sidebar_background_image']) && $cryptibit_theme_options['footer_sidebar_background_image'] <> '') {
  $footer_background_image_style = 'background-image: url('.$cryptibit_theme_options['footer_sidebar_background_image'].');';
  $footer_background_class = ' with-bg';

} else {
  $footer_background_image_style = '';
  $footer_background_class = '';
}
?>
<?php if ( is_active_sidebar( 'bottom-sidebar' ) ) : ?>
  <?php if($show_bottom_sidebar): ?>
  <div class="bottom-sidebar sidebar container">
    <ul id="bottom-sidebar">
      <?php dynamic_sidebar( 'bottom-sidebar' ); ?>
    </ul>
  </div>
  <?php endif; ?>
<?php endif; ?>

<div class="<?php echo esc_attr($footer_layout_class); ?> footer-wrapper">
<div class="row">

<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
<?php

// Footer sidebar style
if(isset($cryptibit_theme_options['footer_sidebar_style'])) {
  $footer_sidebar_class = 'footer-sidebar-style-'.$cryptibit_theme_options['footer_sidebar_style'];
} else {
  $footer_sidebar_class = 'footer-sidebar-style-dark';
}

?>
<div class="footer-sidebar-wrapper <?php echo esc_attr($footer_sidebar_class); ?><?php echo esc_attr($footer_background_class); ?>" data-style="<?php echo esc_attr($footer_background_image_style); ?>">
  <div class="footer-sidebar sidebar container footer-sidebar-col-<?php echo esc_attr($footer_sidebar_columns); ?>">
    <ul id="footer-sidebar" class="clearfix">
      <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </ul>
  </div>
</div>
<?php endif; ?>
<?php
// Disable footer
if(!isset($cryptibit_theme_options['footer_disable'])) {
  $cryptibit_theme_options['footer_disable'] = false;
}

if(isset($cryptibit_theme_options['footer_disable']) && !$cryptibit_theme_options['footer_disable']):
?>
<?php
// Footer style
if(isset($cryptibit_theme_options['footer_style'])) {
  $footer_class = 'footer-style-'.$cryptibit_theme_options['footer_style'];
} else {
  $footer_class = 'footer-style-dark';
}

// Footer columns
if(isset($cryptibit_theme_options['footer_columns'])) {
  $footer_columns = $cryptibit_theme_options['footer_columns'];
} else {
  $footer_columns = 2;
}

$footer_col_class = 'col-md-6';

if($footer_columns == 1) {
  $footer_col_class = 'col-md-12';
}

$footer_class .= ' footer-col-'.$footer_columns;

?>
<footer class="<?php echo esc_attr($footer_class); ?>">
<div class="container">
<div class="row">

    <?php
    // Different layouts for footer
    if($footer_columns == 1) {
      cryptibit_show_footer_menu($footer_col_class);
      cryptibit_show_footer_copyright($footer_col_class);
    }
    if($footer_columns == 2) {
      cryptibit_show_footer_copyright($footer_col_class);
      cryptibit_show_footer_menu($footer_col_class);
    }
    ?>

</div>
</div>
<?php if(isset($cryptibit_theme_options['scroll_to_top'])&&($cryptibit_theme_options['scroll_to_top'])): ?>
<?php
// Scroll to top button options
if(!isset($cryptibit_theme_options['scroll_to_top_style'])) {
  $cryptibit_theme_options['scroll_to_top_style'] = 'square';
}

if(!isset($cryptibit_theme_options['scroll_to_top_shadow'])) {
  $cryptibit_theme_options['scroll_to_top_shadow'] = 'disable';
}

?>
<a class="scroll-to-top scroll-to-top-<?php echo esc_attr($cryptibit_theme_options['scroll_to_top_style']);?> scroll-to-top-<?php echo esc_attr($cryptibit_theme_options['scroll_to_top_shadow']);?>" href="#top"></a>
<?php endif; ?>
</footer>
<?php endif;// Disable footer end ?>
</div>
</div>
<?php

// Demo settings
if ( defined('DEMO_MODE') && isset($_GET['header_menu_type']) ) {
  $cryptibit_theme_options['header_menu_type'] = $_GET['header_menu_type'];
}
?>
<?php if(isset($cryptibit_theme_options['header_menu_type'])&&($cryptibit_theme_options['header_menu_type'] == 'offcanvas')): ?>
<?php if ( is_active_sidebar( 'offcanvas-sidebar' ) ) : ?>
<nav id="offcanvas-sidebar-nav" class="st-sidebar-menu st-sidebar-effect-2">
<div class="st-sidebar-menu-close-btn"><i class="pe-7s-close"></i></div>
    <div class="offcanvas-sidebar sidebar">
      <ul id="offcanvas-sidebar" class="clearfix">
        <?php dynamic_sidebar( 'offcanvas-sidebar' ); ?>
      </ul>
    </div>
</nav>
<?php endif; ?>
<?php endif; ?>

<?php if(isset($cryptibit_theme_options['enable_fullscreen_search'])&&($cryptibit_theme_options['enable_fullscreen_search'])): ?>
<div class="search-fullscreen-container"></div>
<div class="search-fullscreen-wrapper">
  <div class="search-fullscreen-form">
    <div class="search-close-btn"><i class="pe-7s-close"></i></div>
    <?php get_template_part( 'searchform-popup' ); ?>
  </div>
</div>
<?php endif; ?>
<?php if(isset($cryptibit_theme_options['header_menu_type'])&&($cryptibit_theme_options['header_menu_type'] == 'fullscreen')): ?>
<div class="header-advanced-menu-fullscreen-container"></div>
<div class="header-advanced-menu-fullscreen-wrapper">
<div class="header-advanced-menu-close-btn"><i class="pe-7s-close"></i></div>
  <div class="header-advanced-menu-fullscreen-menu">

    <?php
      wp_nav_menu(array(
        'theme_location'  => 'header-advanced',
        'menu_class'      => 'header-advanced-fullscreen-menu',
        'fallback_cb'    => false
        ));
    ?>
  </div>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
