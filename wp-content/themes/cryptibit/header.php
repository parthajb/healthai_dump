<?php
/**
 * WP Theme Header
 *
 * Displays all of the <head> section
 *
 * @package CryptiBIT
 */
$cryptibit_theme_options = cryptibit_get_theme_options();

// Demo settings
if ( defined('DEMO_MODE') && isset($_GET['header_logo_position']) ) {
  $cryptibit_theme_options['header_logo_position'] = esc_html($_GET['header_logo_position']);
}
if ( defined('DEMO_MODE') && isset($_GET['header_fullwidth']) ) {
  if($_GET['header_fullwidth'] == 0) {
    $cryptibit_theme_options['header_fullwidth'] = false;
  }
  if($_GET['header_fullwidth'] == 1) {
    $cryptibit_theme_options['header_fullwidth'] = true;
  }

}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="80">

<?php
// Progress bar
if(isset($cryptibit_theme_options['enable_progressbar']) && $cryptibit_theme_options['enable_progressbar']): ?>
<div class="header-progressbar">
    <div class="header-progressbar-under-bar"></div>
</div>
<?php endif; ?>

<?php
// Use menu below header if you use center logo layout
if(isset($cryptibit_theme_options['header_logo_position']) && $cryptibit_theme_options['header_logo_position'] == 'center') {
  $cryptibit_theme_options['header_menu_layout'] = 'menu_below_header';
}

// Center logo
if(isset($cryptibit_theme_options['header_logo_position']) && $cryptibit_theme_options['header_logo_position'] == 'center') {
  $header_container_add_class = ' header-logo-center';
} else {
  $header_container_add_class = '';
}
if(isset($cryptibit_theme_options['header_fullwidth']) && $cryptibit_theme_options['header_fullwidth']) {
  $header_container_class = 'container-fluid';
} else {
  $header_container_class = 'container';
}

// Sticky header
if(isset($cryptibit_theme_options['enable_sticky_header']) && $cryptibit_theme_options['enable_sticky_header']) {
  $header_add_class = 'sticky-header main-header';
} else {
  $header_add_class = 'main-header';
}

// Sticky header elements
if(!isset($cryptibit_theme_options['sticky_header_elements'])) {
  $cryptibit_theme_options['sticky_header_elements'] = 'headeronly';
}

// Header crypto stat
if(isset($cryptibit_theme_options['headercryptostat_enable'])&&($cryptibit_theme_options['headercryptostat_enable'])) {
  $header_add_class .= ' header-crypto-stat-enabled';
}

$header_add_class .= ' sticky-header-elements-'.esc_attr($cryptibit_theme_options['sticky_header_elements']);

$header_add_class .= ' mainmenu-position-'.esc_attr($cryptibit_theme_options['header_menu_layout']);

?>
<?php
// Left header
if(isset($cryptibit_theme_options['header_position']) && $cryptibit_theme_options['header_position'] == 'left'):
?>
<header class="left-side-header">
<?php cryptibit_header_side_show(); ?>
</header>
<?php else: ?>
<?php cryptibit_menu_top_show(); ?>
<header class="<?php echo esc_attr($header_add_class); ?>">
<?php
// Theme specific function
if(isset($cryptibit_theme_options['headercryptostat_position'])&&($cryptibit_theme_options['headercryptostat_position'] == 'above')): ?>
<?php cryptibit_show_header_crypto_stat(); ?>
<?php endif;
// END - Theme specific function
?>
<div class="header-container <?php echo esc_attr($header_container_class); ?><?php echo esc_attr($header_container_add_class); ?>">
  <div class="row">
    <div class="col-md-12">

      <div class="header-left">
          <?php cryptibit_header_left_show(); ?>
      </div>

      <div class="header-center">
        <?php cryptibit_header_center_show(); ?>
      </div>

      <div class="header-right">
        <?php cryptibit_header_right_show(); ?>
      </div>

    </div>
  </div>

</div>
<?php cryptibit_menu_below_header_show(); ?>
<?php
// Theme specific function
if(isset($cryptibit_theme_options['headercryptostat_position'])&&($cryptibit_theme_options['headercryptostat_position'] == 'below')): ?>
<?php cryptibit_show_header_crypto_stat(); ?>
<?php endif;
// END - Theme specific function
?>
</header>
<?php endif; ?>
