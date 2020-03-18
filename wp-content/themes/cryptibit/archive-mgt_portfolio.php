<?php
/**
 * The template used for displaying mgt_portfolio post type archive page
 *
 * @package CryptiBIT
 */

$cryptibit_theme_options = cryptibit_get_theme_options();

if(isset($cryptibit_theme_options['portfolio_page_url']) && $cryptibit_theme_options['portfolio_page_url']!=='') {
  $portfolio_page_url = $cryptibit_theme_options['portfolio_page_url'];
} else {
  $portfolio_page_url = home_url();
}

wp_redirect( esc_url($portfolio_page_url) ); exit;

?>
