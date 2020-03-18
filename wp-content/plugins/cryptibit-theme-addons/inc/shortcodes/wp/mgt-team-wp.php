<?php

// Shortcode [mgt_team_wp]
function mgt_shortcode_team_wp($atts, $content = null) {
	extract(shortcode_atts(array(
		'team_style' => 'simple',
		'show_description' => '',
		'show_social' => '',
        'text_color' => 'text-dark',
        'block_hover_shadow_effect' => false,
		'use_slider' => 0,
		'slider_autoplay' => 0,
		'items_per_row' => 1,
		'slider_navigation' => 0,
		'slider_pagination' => 1,
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_include' => '',
        'posts_per_page' => 4,
        'css_animation' => 'none',
	), $atts));
	ob_start();

	$args = array(
		'posts_per_page'   => $posts_per_page,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => $orderby,
		'order'            => $order,
		'include'          => $posts_include,
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'mgt_team',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => false // WPML fix
	);

	$posts = get_posts( $args );

	if(count($posts) == 1) {
		$single_post = ' mgt-single-team';
	} else {
		$single_post = '';
	}

	$rand_id = rand(1000000,90000000);

  	$style = '';

  	// Slider
	if($use_slider == 1) {

		$style = ' style="display: none;"';

		if($slider_autoplay == 1) {
			$slider_autoplay = 'true';
		} else {
			$slider_autoplay = 'false';
		}
		if($slider_navigation == 1) {
			$slider_navigation = 'true';
		} else {
			$slider_navigation = 'false';
		}
		if($slider_pagination == 1) {
			$slider_pagination = 'true';
		} else {
			$slider_pagination = 'false';
		}

		echo '<div class="mgt-team-wrapper">';
	} else {
		echo '<div class="mgt-team-wrapper row">';
	}

	// Styles
	$add_class = '';

	$add_class = ' '.$text_color;
	$add_class .= ' mgt-team-style-'.$team_style;

	// Block shadow effect
	if($block_hover_shadow_effect) {
		$add_class .= ' mgt-team-hover-shadow';
	}

	if($text_color == 'text-white') {
		$owlnav = ' owl-invert-nav';
	} else {
		$owlnav = ' owl-normal-nav';
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

	// Render HTML
	echo '<div id="mgt-team-'.intval($rand_id).'" class="mgt-team'.esc_attr($single_post).esc_attr($animation_css_class).esc_attr($add_class).' wpb_content_element'.esc_attr($owlnav).'"'.$style.'>';

	foreach($posts as $post) {

		// Columns start DIV for grid
		if($use_slider == 0) {
			switch ($items_per_row) {
				case 1:
					$col_class = 'col-md-12 col-sm-6';
					break;
				case 2:
					$col_class = 'col-md-6 col-sm-6';
					break;
				case 3:
					$col_class = 'col-md-4 col-sm-6';
					break;
				case 4:
					$col_class = 'col-md-3 col-sm-6';
					break;

				default:
					$col_class = 'col-md-12 col-sm-6';
					break;
			}

			echo '<div class="'.esc_attr($col_class).'">';
		}

	  	echo '<div class="mgt-team-member">';

	    $title = get_post_meta( $post->ID, '_cryptibit_team_member_title', true );

	    if($title !== '') {
	    	$member_title = '<div class="mgt-team-member-title">'.$title.'</div>';
	    } else {
	    	$member_title = '';
	    }

	    if($post->post_content !== '' && $show_description) {
	    	$team_member_content = '<div class="mgt-team-member-content">'.wp_kses_post($post->post_content).'</div>';
	    } else {
	    	$team_member_content = '';
	    }

	    $team_member_social = '';

	    if($show_social) {
	    	$team_member_social_data = '';

	    	$team_member_social_facebook = get_post_meta( $post->ID, '_cryptibit_team_member_social_facebook', true );

		    if($team_member_social_facebook !== '') {
		    	$team_member_social_data .= '<a class="team-member-social-profile team-member-social-profile-facebook" href="'.$team_member_social_facebook.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
		    }

		    $team_member_social_twitter = get_post_meta( $post->ID, '_cryptibit_team_member_social_twitter', true );

		    if($team_member_social_twitter !== '') {
		    	$team_member_social_data .= '<a class="team-member-social-profile team-member-social-profile-twitter" href="'.$team_member_social_twitter.'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
		    }

		    $team_member_social_linkedin = get_post_meta( $post->ID, '_cryptibit_team_member_social_linkedin', true );

		    if($team_member_social_linkedin !== '') {
		    	$team_member_social_data .= '<a class="team-member-social-profile team-member-social-profile-linkedin" href="'.$team_member_social_linkedin.'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
		    }

		    $team_member_social_google = get_post_meta( $post->ID, '_cryptibit_team_member_social_google', true );

		    if($team_member_social_google !== '') {
		    	$team_member_social_data .= '<a class="team-member-social-profile team-member-social-profile-google" href="'.$team_member_social_google.'" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
		    }

		    if($team_member_social_data !== '') {
		    	$team_member_social = '<div class="mgt-team-member-social">'.$team_member_social_data.'</div>';
		    }
	    }

	    if($team_style == 'advanced') {
	  		$image_size = 'cryptibit-square-medium'; // 180x180px
	  	} else {
	  		$image_size = 'cryptibit-square-small'; // 100x100px
	  	}

	  	$image_html = '';
	  	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_size);

	    $team_member_url = get_post_meta( $post->ID, '_cryptibit_team_member_url', true );

	    // Add team member url
	    if($team_member_url !== '') {

		    if(has_post_thumbnail( $post->ID )) {
		    	$image_html ='<div class="mgt-team-member-image"><a href="'.esc_url($team_member_url).'"><img src="'.esc_url($image[0]).'" alt="'.esc_attr($post->post_title).'"/></a></div>';
		    }

	    	// All data inside $image_html variable already correctly escaped and safe.
	    	echo wp_kses_post($image_html).'<div class="mgt-team-member-details"><div class="mgt-team-member-name"><h5><a href="'.esc_url($team_member_url).'">'.esc_html($post->post_title).'</a></h5></div>'.wp_kses_post($member_title).wp_kses_post($team_member_content).wp_kses_post($team_member_social).'<a class="mgt-team-member-more" href="'.esc_url($team_member_url).'">'.esc_html__('More', 'saxon').'</a></div>';

	    } else {

	    	if(has_post_thumbnail( $post->ID )) {
		    	$image_html ='<div class="mgt-team-member-image"><img src="'.esc_url($image[0]).'" alt="'.esc_attr($post->post_title).'"/></div>';
		    }

	    	// All data inside $image_html variable already correctly escaped and safe.
	  		echo wp_kses_post($image_html).'<div class="mgt-team-member-details"><div class="mgt-team-member-name"><h5>'.esc_html($post->post_title).'</h5></div>'.wp_kses_post($member_title).wp_kses_post($team_member_content).wp_kses_post($team_member_social).'</div>';
	    }

	    echo '</div>';

	    // Columns end DIV for grid
	    if($use_slider == 0) {
	    	echo '</div>';
	    }
	}


	echo '</div>';

	echo '<div class="clear"></div>';

	// mgt-team-wrapper end
	echo '</div>';


	if($use_slider == 1) {
		echo '<script>(function($){
	    $(document).ready(function() {

		    $("#mgt-team-'.intval($rand_id).'").owlCarousel({
	            items: '.esc_js($items_per_row).',
	            itemsDesktop: [1024,1],
	            itemsDesktopSmall : [979, 1],
	            itemsTablet: [770,1],
	            itemsMobile : [480,1],
	            autoPlay: '.esc_js($slider_autoplay).',
	            navigation: '.esc_js($slider_navigation).',
	            navigationText : false,
	            pagination: '.esc_js($slider_pagination).',
	            afterInit : function(elem){
	                $(this).css("display", "block");
	            }
		    });
	    });})(jQuery);</script>';
	}

	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}

add_shortcode("mgt_team_wp", "mgt_shortcode_team_wp");
