<?php
// Shortcode [mgt_ico_progress_wp]
function mgt_shortcode_ico_progress_wp($atts, $sc_content = null) {
	global $mgt_custom_css;

	extract(shortcode_atts(array(
		'currency_symbol' => '$',
		'raised' => '11000000',
		'raised_display' => '',
		'softcap' => '5000000',
		'hardcap' => '25000000',
		'softcap_time' => '30 days',
		'theme' => 'dark',
		'progress_bar_color_custom' => false,
		'progress_bar_color_1' => '',
		'progress_bar_color_2' => '',
		'progress_style' => 'squared',
		'css_animation' => 'none',
		'css' => ''
	), $atts));

	ob_start();

	// Custom CSS
	$mgt_custom_css = '';
	$add_class = '';

	$unique_id = rand(1000000,90000000);

	$unique_class_name = 'mgt-ico-progress-'.$unique_id;

	if($progress_bar_color_custom) {

		if($progress_bar_color_1 !== '') {
			$mgt_custom_css .= "
				    .$unique_class_name.mgt-ico-progress .mgt-ico-progress-bar .mgt-ico-progress-bar-current {

						background-color: $progress_bar_color_1!important;
				    }
					";
		}

		if($progress_bar_color_2 !== '') {
			$mgt_custom_css .= "
				    .$unique_class_name.mgt-ico-progress .mgt-ico-progress-bar .mgt-ico-progress-bar-current {

						background: -moz-linear-gradient(left,  $progress_bar_color_1 0%, $progress_bar_color_2 100%)!important;
						background: -webkit-linear-gradient(left,  $progress_bar_color_1 0%, $progress_bar_color_2 100%)!important;
						background: linear-gradient(to right,  $progress_bar_color_1 0%, $progress_bar_color_2 100%)!important;
				    }
					";
		}

	}

	if($mgt_custom_css !== '') {
		$mgt_custom_css = str_replace(array("\r", "\n", "  ", "	"), '', $mgt_custom_css);
		echo "<style scoped='scoped'>$mgt_custom_css</style>"; // This variable contains user Custom CSS code and can't be escaped with WordPress functions.
	}

	$add_class .= ' '.$unique_class_name;

	$progress_bar_style = 'width: '.($raised*100/$hardcap).'%';

	$progress_bar_softcap_style = 'width: '.($softcap*100/$hardcap).'%';

	if($softcap_time !== '') {
		$softcap_time_text = ' <span>'.esc_html__('reached in', 'cryptibit').' '.$softcap_time.'</span>';
	} else {
		$softcap_time_text = '';
	}

	if($raised_display) {
		$raised_text = '<div class="mgt-ico-progress-raised">'.$currency_symbol.number_format($raised).' '.esc_html__('raised', 'cryptibit').'</div>';
	} else {
		$raised_text = '';
	}

	// Style

	$content = '<div class="mgt-ico-progress-caps"><span class="mgt-ico-progress-caps-soft">'.$currency_symbol.number_format($softcap).'</span><div class="mgt-ico-progress-hardcap-value">'.$currency_symbol.number_format($hardcap).'</div></div><div class="mgt-ico-progress-bar"><div class="mgt-ico-progress-bar-softcap" data-style="'.esc_attr($progress_bar_softcap_style).'"></div><div class="mgt-ico-progress-bar-current" data-style="'.esc_attr($progress_bar_style).'">'.wp_kses_post($raised_text).'</div></div><div class="mgt-ico-progress-details">'.esc_html__('Softcap', 'cryptibit').$softcap_time_text.'<div class="mgt-ico-progress-hardcap-title">'.esc_html__('Hardcap', 'cryptibit').'</div></div>';


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

	echo '<div class="mgt-ico-progress mgt-ico-progress-style-'.esc_attr($progress_style).' mgt-ico-progress-theme-'.esc_attr($theme).' clearfix '.esc_attr($animation_css_class).esc_attr($add_class).' wpb_content_element '.esc_attr( $css_class ).'">'.($content).'</div>';


	$sc_content = ob_get_contents();
	ob_end_clean();
	return $sc_content;
}

add_shortcode("mgt_ico_progress_wp", "mgt_shortcode_ico_progress_wp");
