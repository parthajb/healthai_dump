<?php
// Shortcode [mgt_ico_progress_wp]
function mgt_shortcode_ico_rating_wp($atts, $sc_content = null) {
	global $mgt_custom_css;

	extract(shortcode_atts(array(
		'title' => 'ICO Magnium',
		'image' => '',
		'rating' => '4.7',
		'rating_text' => '',
		'url' => 'https://google.com/',
		'url_blank' => false,
		'style' => 'squared',
		'color_custom' => false,
		'color' => 'white',
		'bg_color_1' => '',
		'bg_color_2' => '',
		'block_hover_shadow_effect' => false,
		'css_animation' => 'none',
		'css' => ''
	), $atts));

	ob_start();

	// Custom CSS
	$mgt_custom_css = '';
	$add_class = '';

	$unique_id = rand(1000000,90000000);

	$unique_class_name = 'mgt-ico-rating-'.$unique_id;

	if($color_custom) {

		if($bg_color_1 !== '') {
			$mgt_custom_css .= "
				    .$unique_class_name.mgt-ico-rating {

						background-color: $bg_color_1!important;
				    }
					";
		}

		if($bg_color_2 !== '') {
			$mgt_custom_css .= "
				    .$unique_class_name.mgt-ico-rating {

						background: -moz-linear-gradient(left top,  $bg_color_1 0%, $bg_color_2 100%)!important;
						background: -webkit-linear-gradient(left top,  $bg_color_1 0%, $bg_color_2 100%)!important;
						background: linear-gradient(to right bottom,  $bg_color_1 0%, $bg_color_2 100%)!important;
				    }
					";
		}

	}

	if($mgt_custom_css !== '') {
		$mgt_custom_css = str_replace(array("\r", "\n", "  ", "	"), '', $mgt_custom_css);
		echo "<style scoped='scoped'>$mgt_custom_css</style>"; // This variable contains user Custom CSS code and can't be escaped with WordPress functions.
	}

	$add_class .= ' '.$unique_class_name;

	// Block shadow effect
	if($block_hover_shadow_effect) {
		$add_class .= ' mgt-ico-rating-hover-shadow';
	}

	$rating_stars_style = 'width: '.(18.85 * floatval($rating)).'px';

	// Image
	$image_data = wp_get_attachment_image_src( $image, 'source' );

	if($image_data !== false) {
		// Image icon
		$icon_image_html = '<div class="mgt-ico-rating-image"><img src="'.$image_data[0].'" alt="'.$title.'"/></div>';
	} else {
		$icon_image_html = '';
	}

	if(!empty($rating_text)) {
		$rating = $rating_text;
	}

	// Style
	$content = '<h4 class="mgt-ico-rating-title">'.wp_kses_post($title).'</h4>'.wp_kses_post($icon_image_html).'<div class="mgt-ico-rating-value">'.esc_html($rating).'</div><div class="mgt-ico-rating-stars-wrapper"><div class="mgt-ico-rating-stars-bg"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></div>
				<div class="mgt-ico-rating-stars" data-style="'.esc_attr($rating_stars_style).'"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div></div>';


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

	if($url_blank) {
		$link_target_html = ' target="_blank"';
	} else {
		$link_target_html = '';
	}

	echo '<div class="mgt-ico-rating text-'.esc_attr($color).' mgt-ico-rating-style-'.esc_attr($style).' '.esc_attr($animation_css_class).esc_attr($add_class).' wpb_content_element '.esc_attr( $css_class ).'"><a href="'.esc_url($url).'" '.esc_attr($link_target_html).'>'.($content).'</a></div>';


	$sc_content = ob_get_contents();
	ob_end_clean();
	return $sc_content;
}

add_shortcode("mgt_ico_rating_wp", "mgt_shortcode_ico_rating_wp");
