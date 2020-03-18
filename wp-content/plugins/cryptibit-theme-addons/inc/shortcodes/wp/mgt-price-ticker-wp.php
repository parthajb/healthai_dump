<?php
// Shortcode [mgt_price_ticker_wp]
function mgt_shortcode_price_ticker_wp($atts, $sc_content = null) {
	global $mgt_custom_css;

	extract(shortcode_atts(array(
		'cryptocurrency' => '',
		'cryptocurrencyid' => '1',
		'currency' => 'USD',
		'marketcap' => '',
		'volume' => '',
		'borders' => '',
		'theme' => 'dark',
		'css_animation' => 'none',
		'css' => ''
	), $atts));

	ob_start();

	wp_register_script('coinmarketcap-widget', 'https://files.coinmarketcap.com/static/widget/currency.js');
	wp_enqueue_script('coinmarketcap-widget');

	if($marketcap == '') {
		$marketcap = 'false';
	}

	if($volume == '') {
		$volume = 'false';
	}

	if($borders == '') {
		$borders = 'false';
	}

	// Custom CSS
	$unique_id = rand(1000000,90000000);

	$unique_class_name = 'mgt-price-ticker-'.$unique_id;

	// Currency by ID (VC element) or NAME (header crypto stat)
	if(!empty($cryptocurrency)) {
		$cryptocurrency_data = 'data-currency="'.esc_attr($cryptocurrency).'"';
	} else {
		$cryptocurrency_data = 'data-currencyid="'.esc_attr($cryptocurrencyid).'"';
	}

	// Style
	$content = '<div class="coinmarketcap-currency-widget" '.$cryptocurrency_data.' data-base="'.esc_attr($currency).'" data-secondary="" data-ticker="true" data-rank="false" data-marketcap="'.esc_attr($marketcap).'" data-volume="'.esc_attr($volume).'" data-stats="'.esc_attr($currency).'" data-statsticker="false"></div>';

	// CSS Animation
	if($css_animation !== 'none') {

		// Code from /wp-content/plugins/js_composer/include/classes/shortcodes/shortcodes.php:640, public function getCSSAnimation( $css_animation )
		$animation_css_class = ' wpb_animate_when_almost_visible wpb_'.$css_animation.' '.$css_animation;

		// Load animation JS
		wp_enqueue_script( 'vc_waypoints' );
		wp_enqueue_style( 'vc_animate-css' );

	} else {
		$animation_css_class = '';
	}

	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), '', $atts );

	echo '<div class="mgt-price-ticker mgt-price-ticker-border-'.esc_attr($borders).' mgt-price-ticker-theme-'.esc_attr($theme).' clearfix '.esc_attr($animation_css_class).' wpb_content_element '.esc_attr( $css_class ).'">'.($content).'</div>';


	$sc_content = ob_get_contents();
	ob_end_clean();
	return $sc_content;
}

add_shortcode("mgt_price_ticker_wp", "mgt_shortcode_price_ticker_wp");
