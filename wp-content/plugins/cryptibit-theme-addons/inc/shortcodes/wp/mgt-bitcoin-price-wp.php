<?php
// Shortcode [mgt_bitcoin_price_wp]
function mgt_shortcode_bitcoin_price_wp($atts, $sc_content = null) {
	global $mgt_custom_css;

	extract(shortcode_atts(array(
		'style' => 'chart',
		'theme' => 'dark',
		'currency' => 'usd',
		'css_animation' => 'none',
		'css' => ''
	), $atts));

	ob_start();

	// Custom CSS
	$unique_id = rand(1000000,90000000);

	$unique_class_name = 'mgt-bitcoin-price-'.$unique_id;

	// Style
	if($style == 'chart') {
		$content = '<div class="btcwdgt-chart" bw-theme="'.esc_attr($theme).'"></div>';
	} else {
		$content = '<div class="btcwdgt-price" bw-theme="'.esc_attr($theme).'" bw-cur="'.esc_attr($currency).'"></div>';
	}

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

	echo '<div class="mgt-bitcoin-price clearfix '.esc_attr($animation_css_class).' wpb_content_element '.esc_attr( $css_class ).'">'.($content).'</div>';

	echo "<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
	</script>";


	$sc_content = ob_get_contents();
	ob_end_clean();
	return $sc_content;
}

add_shortcode("mgt_bitcoin_price_wp", "mgt_shortcode_bitcoin_price_wp");
