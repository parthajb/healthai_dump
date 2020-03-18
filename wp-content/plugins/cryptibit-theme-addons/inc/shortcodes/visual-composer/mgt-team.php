<?php

// VC [mgt_team_wp]

vc_map(array(
   "name" 			=> "MGT Team",
   "category" 		=> 'CryptiBIT Content',
   "description"	=> "Show team members list",
   "base" 			=> "mgt_team_wp",
   "class" 			=> "",
   "icon" 			=> "vc_mgt_team",

   "params" 	=> array(
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Team members display style",
			"param_name"	=> "team_style",
			"value"			=> array(
				"Simple"	=> "simple",
				"Advanced"	=> "advanced"
			),
			"std"			=> "simple",
		),
		array(
			'type' => 'checkbox',
			'heading' => 'Show description',
			'param_name' => 'show_description',
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			'type' => 'checkbox',
			'heading' => 'Show social profiles',
			'param_name' => 'show_social',
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Text color",
			"description"	=> "",
			"param_name"	=> "text_color",
			"value"			=> array(
				"Black"	=> "text-dark",
				"White"	=> "text-white"
			),
			"std"			=> "text-dark",
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add image shadow effect on hover?', 'js_composer' ),
			'param_name' => 'block_hover_shadow_effect',
			"description"	=> "Use this to add shadow to image on block hover.",
			"edit_field_class" => "vc_col-xs-12",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Posts display",
			"description"	=> "",
			"param_name"	=> "use_slider",
			"value"			=> array(
				"Slider"	=> "1",
				"Grid"	=> "0"
			),
			"std"			=> "0",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Items per row",
			"param_name"	=> "items_per_row",
			"value"			=> array(
				"1"	=> "1",
				"2"	=> "2",
				"3"	=> "3",
				"4"	=> "4"
			),
			"std"			=> "1",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Team members limit",
			"param_name"	=> "posts_per_page",
			"std"			=> "4",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Show only specific team member(s) by ID",
			"description"	=> "Team members id's to show, for example: 45,63,78,94,128,140. Use one ID to show only one specific member.",
			"param_name"	=> "posts_include",
			"std"			=> "",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider autoplay",
			"param_name"	=> "slider_autoplay",
			"dependency"	=> array(
				"element"	=> "use_slider",
				"value"		=> Array("1"),
			),
			"value"			=> array(
				"Yes"	=> "1",
				"No"	=> "0"
			),
			"std"			=> "0",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider show navigation arrows",
			"param_name"	=> "slider_navigation",
			"dependency"	=> array(
				"element"	=> "use_slider",
				"value"		=> Array("1"),
			),
			"value"			=> array(
				"Yes"	=> "1",
				"No"	=> "0"
			),
			"std"			=> "0",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Slider show navigation pagination",
			"param_name"	=> "slider_pagination",
			"dependency"	=> array(
				"element"	=> "use_slider",
				"value"		=> Array("1"),
			),
			"value"			=> array(
				"Yes"	=> "1",
				"No"	=> "0"
			),
			"std"			=> "1",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Order By",
			"param_name"	=> "orderby",
			"value"			=> array(
				"ID"	=> "id",
				"Title"	=> "title",
				"Date"	=> "date",
				"Random"	=> "rand"
			),
			"std"			=> "date",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Order",
			"param_name"	=> "order",
			"value"			=> array(
				"Desc"	=> "DESC",
				"Asc"	=> "ASC"
			),
			"std"			=> "DESC",
			"edit_field_class" => "vc_col-xs-6",
		),
		// CSS Animations
		vc_map_add_css_animation( true )

   )


));
