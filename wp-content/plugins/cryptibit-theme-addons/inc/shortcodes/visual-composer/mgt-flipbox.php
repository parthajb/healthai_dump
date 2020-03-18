<?php

// VC [mgt_flipbox_wp]

vc_map(array(
   "name" 			=> "MGT Flip Box",
   "category" 		=> 'CryptiBIT Content',
   "description"	=> "Flip box with 2 sides",
   "base" 			=> "mgt_flipbox_wp",
   "class" 			=> "",
   "icon" 			=> "vc_mgt_flipbox",

   "params" 	=> array(
		/* Front */
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Front content",
		),
   		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Header text",
			"description"	=> "",
			"param_name"	=> "header_text_front",
			"std"			=> "",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Description",
			"description"	=> "HTML tags allowed for formatting.",
			"param_name"	=> "description_text_front",
			"std"			=> "",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Header text color",
			"param_name"	=> "header_color_front",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Description text color",
			"param_name"	=> "description_color_front",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Background color",
			"param_name"	=> "background_color_front",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "attach_image",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Background image",
			"param_name"	=> "background_image_front",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		/// Block border
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add block border?', 'js_composer' ),
			'param_name' => 'block_border_front',
			"description"	=> "Use this to add border to block.",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Block border width (in pixels)",
			"description"	=> "Add border width here, for example: 3",
			"param_name"	=> "block_border_front_width",
			"std"			=> "1",
			'dependency' => array(
				'element' => 'block_border_front',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Block border style",
			"description"	=> "Select block border style.",
			"param_name"	=> "block_border_front_style",
			"value"			=> array(
				"Solid"	=> "solid",
				"Dashed"	=> "dashed",
				"Dotted"	=> "dotted",
				"Double"	=> "double",
				"Groove"	=> "groove",
				"Ridge"	=> "ridge",
				"Inset"	=> "inset",
				"Outset"	=> "outset",
			),
			"std"			=> "solid",
			'dependency' => array(
				'element' => 'block_border_front',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Block border color",
			"param_name"	=> "block_border_front_color",
			"description"	=> "Select block border color.",
			"std"			=> "",
			'dependency' => array(
				'element' => 'block_border_front',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		/* Flipbox icon */
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add icon to flipbox front side?', 'js_composer' ),
			'param_name' => 'front_icon',
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Icon color",
			"param_name"	=> "front_icon_color",
			"description"	=> "",
			"std"			=> "",
			'dependency' => array(
				'element' => 'front_icon',
				'value' => 'true',
			),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon library', 'js_composer' ),
			'value' => array(
				__( 'Font Awesome', 'js_composer' ) => 'fontawesome',
				__( 'Open Iconic', 'js_composer' ) => 'openiconic',
				__( 'Typicons', 'js_composer' ) => 'typicons',
				__( 'Entypo', 'js_composer' ) => 'entypo',
				__( 'Linecons', 'js_composer' ) => 'linecons',
				__( 'Mono Social', 'js_composer' ) => 'monosocial',
				__( 'Material', 'js_composer' ) => 'material',
				__( 'Pe7 Stroke', 'js_composer' ) => 'pe7stroke',
			),
			'dependency' => array(
				'element' => 'front_icon',
				'value' => 'true',
			),
			'admin_label' => true,
			'param_name' => 'front_icon_type',
			'description' => __( 'Select icon library.', 'js_composer' ),
			"std"		=> "fontawesome",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_fontawesome',
			'value' => 'fa fa-adjust',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				'type' => 'fontawesome',
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'fontawesome',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_pe7stroke',
			'value' => 'pe-7s-album',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				'type' => 'pe7stroke',
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'pe7stroke',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_openiconic',
			'value' => 'vc-oi vc-oi-dial',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'openiconic',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_typicons',
			'value' => 'typcn typcn-adjust-brightness',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'typicons',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_entypo',
			'value' => 'entypo-icon entypo-icon-note',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'entypo',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_linecons',
			'value' => 'vc_li vc_li-heart',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'linecons',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_monosocial',
			'value' => 'vc-mono vc-mono-fivehundredpx',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'monosocial',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'monosocial',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'front_icon_material',
			'value' => 'vc-material vc-material-cake',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'material',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'front_icon_type',
				'value' => 'material',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
		),
		/* END Subheader icon */
		/* Back */
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Back content",
		),
   		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Header text",
			"description"	=> "",
			"param_name"	=> "header_text_back",
			"std"			=> "",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Description",
			"description"	=> "HTML tags allowed for formatting.",
			"param_name"	=> "description_text_back",
			"std"			=> "",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Header text color",
			"param_name"	=> "header_color_back",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Description text color",
			"param_name"	=> "description_color_back",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Background color",
			"param_name"	=> "background_color_back",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "attach_image",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Background image",
			"param_name"	=> "background_image_back",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		/// Block border
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add block border?', 'js_composer' ),
			'param_name' => 'block_border_back',
			"description"	=> "Use this to add border to block.",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Block border width (in pixels)",
			"description"	=> "Add border width here, for example: 3",
			"param_name"	=> "block_border_back_width",
			"std"			=> "1",
			'dependency' => array(
				'element' => 'block_border_back',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Block border style",
			"description"	=> "Select block border style.",
			"param_name"	=> "block_border_back_style",
			"value"			=> array(
				"Solid"	=> "solid",
				"Dashed"	=> "dashed",
				"Dotted"	=> "dotted",
				"Double"	=> "double",
				"Groove"	=> "groove",
				"Ridge"	=> "ridge",
				"Inset"	=> "inset",
				"Outset"	=> "outset",
			),
			"std"			=> "solid",
			'dependency' => array(
				'element' => 'block_border_back',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Block border color",
			"param_name"	=> "block_border_back_color",
			"description"	=> "Select block border color.",
			"std"			=> "",
			'dependency' => array(
				'element' => 'block_border_back',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		/* Styles */
   		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Styles and effects settings",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Flipbox animation",
			"param_name"	=> "flipbox_animation",
			"value"			=> array(
				"Horizontal"	=> "horizontal",
				"Vertical"	=> "vertical",
			),
			"description"	=> "Change flipbox animation.",
			"std"			=> "horizontal",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Flipbox height (px)",
			"description"	=> "For example: 300px",
			"param_name"	=> "block_height",
			"edit_field_class" => "vc_col-xs-6",
			"std"			=> "",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Flipbox round edges",
			"param_name"	=> "flipbox_round_edges",
			"value"			=> array(
				"Disable"	=> "disable",
				"Small"	=> "small",
				"Medium"	=> "medium",
				"Large"	=> "large",
				"Full"	=> "full"
			),
			"description"	=> "Change flipbox border radius (round edges).",
			"std"			=> "disable",
			"edit_field_class" => "vc_col-xs-6",
		),
		// CSS Animations
		vc_map_add_css_animation( true ),
		/* Button */
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Button settings",
			"group"			=> "Button",
		),
		array(
			"type"			=> "vc_link",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button text and link",
			"description"	=> "Leave empty if you don't need button. Button will be added to flipbox back side.",
			"param_name"	=> "button_url",
			"std"			=> "",
			"group"			=> "Button",
		),
		array(
			'type' => 'checkbox',
			'heading' => 'Open link in lightbox?',
			'param_name' => 'button_link_lightbox',
			"description"	=> "Open link in lightbox (you can use link to Youtube, Vimeo video or image file to open it in lightbox).",
			"group"			=> "Button",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button style",
			"param_name"	=> "button_style",
			"value"			=> array(
				"Default"	=> "solid",
				"Black"	=> "solid-invert",
				"Grey"	=> "grey",
				"Bordered"	=> "bordered",
				"Bordered Black"	=> "borderedblack",
				"Bordered Grey"	=> "borderedgrey",
				"Bordered White"	=> "borderedwhite",
				"Red"	=> "red",
				"Green"	=> "green",
				"Text link dark"	=> "text",
				"Text link light (use on dark backgrounds)"	=> "textwhite"
			),
			"description"	=> "Change button style",
			"std"			=> "solid",
			"group"			=> "Button",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button round edges",
			"param_name"	=> "button_round_edges",
			"value"			=> array(
				"Disable"	=> "disable",
				"Small"	=> "small",
				"Medium"	=> "medium",
				"Large"	=> "large",
				"Full"	=> "full"
			),
			"description"	=> "Change button border radius (round edges)",
			"std"			=> "disable",
			"group"			=> "Button",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button size",
			"param_name"	=> "button_size",
			"value"			=> array(
				"Small"	=> "small",
				"Normal"	=> "normal",
				"Large"	=> "large"
			),
			"description"	=> "",
			"std"			=> "normal",
			"group"			=> "Button",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button text size",
			"param_name"	=> "button_text_size",
			"value"			=> array(
				"Small"	=> "small",
				"Normal"	=> "normal",
				"Large"	=> "large"
			),
			"description"	=> "",
			"std"			=> "normal",
			"group"			=> "Button",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button text transform",
			"param_name"	=> "button_text_transform",
			"value"			=> array(
				"None"	=> "none",
				"UPPERCASE"	=> "uppercase"
			),
			"description"	=> "",
			"std"			=> "none",
			"group"			=> "Button",
			"edit_field_class" => "vc_col-xs-6",
		),
		// Button icon
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Button icon settings",
			"group"			=> "Button",
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add icon?', 'js_composer' ),
			'param_name' => 'button_icon',
			"group"			=> "Button",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add icon separator line?', 'js_composer' ),
			'param_name' => 'button_icon_separator',
			'dependency' => array(
				'element' => 'button_icon',
				'value' => 'true',
			),
			"group"			=> "Button",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button icon alignment",
			"param_name"	=> "button_icon_position",
			"value"			=> array(
				"Left"	=> "left",
				"Right"	=> "right"
			),
			"description"	=> "",
			"std"			=> "left",
			'dependency' => array(
				'element' => 'button_icon',
				'value' => 'true',
			),
			"group"			=> "Button",
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Icon library', 'js_composer' ),
			'value' => array(
				__( 'Font Awesome', 'js_composer' ) => 'fontawesome',
				__( 'Open Iconic', 'js_composer' ) => 'openiconic',
				__( 'Typicons', 'js_composer' ) => 'typicons',
				__( 'Entypo', 'js_composer' ) => 'entypo',
				__( 'Linecons', 'js_composer' ) => 'linecons',
				__( 'Mono Social', 'js_composer' ) => 'monosocial',
				__( 'Material', 'js_composer' ) => 'material',
				__( 'Pe7 Stroke', 'js_composer' ) => 'pe7stroke',
			),
			'dependency' => array(
				'element' => 'button_icon',
				'value' => 'true',
			),
			'admin_label' => true,
			'param_name' => 'icon_type',
			'description' => __( 'Select icon library.', 'js_composer' ),
			"std"		=> "fontawesome",
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-adjust',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				'type' => 'fontawesome',
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'fontawesome',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_pe7stroke',
			'value' => 'pe-7s-album',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				'type' => 'pe7stroke',
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'pe7stroke',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_openiconic',
			'value' => 'vc-oi vc-oi-dial',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'openiconic',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'openiconic',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_typicons',
			'value' => 'typcn typcn-adjust-brightness',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'typicons',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'typicons',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_entypo',
			'value' => 'entypo-icon entypo-icon-note',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'entypo',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'entypo',
			),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_linecons',
			'value' => 'vc_li vc_li-heart',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'linecons',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'linecons',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_monosocial',
			'value' => 'vc-mono vc-mono-fivehundredpx',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'monosocial',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'monosocial',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		array(
			'type' => 'iconpicker',
			'heading' => __( 'Icon', 'js_composer' ),
			'param_name' => 'icon_material',
			'value' => 'vc-material vc-material-cake',
			// default value to backend editor admin_label
			'settings' => array(
				'emptyIcon' => false,
				// default true, display an "EMPTY" icon?
				'type' => 'material',
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'icon_type',
				'value' => 'material',
			),
			'description' => __( 'Select icon from library.', 'js_composer' ),
			"group"			=> "Button",
		),
		// Button effects
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Button animation and effects",
			"group"			=> "Button",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button hover effect",
			"param_name"	=> "hover_effect",
			"value"			=> array(
				"Default"	=> "default",
				"[Shape] Grow"	=> "grow",
				"[Shape] Shrink"	=> "shrink",
				"[Shape] Pulse"	=> "pulse",
				"[Shape] Pulse Grow"	=> "pulse-grow",
				"[Shape] Pulse Shrink"	=> "pulse-shrink",
				"[Shape] Push"	=> "push",
				"[Shape] Pop"	=> "pop",
				"[Shape] Bounce In"	=> "bounce-in",
				"[Shape] Bounce Out"	=> "bounce-out",
				"[Shape] Rotate"	=> "rotate",
				"[Shape] Grow Rotate"	=> "grow-rotate",
				"[Shape] Float"	=> "float",
				"[Shape] Sink"	=> "sink",
				"[Shape] Bob"	=> "bob",
				"[Shape] Hang"	=> "hang",
				"[Shape] Skew"	=> "skew",
				"[Shape] Skew Forward"	=> "skew-forward",
				"[Shape] Skew Backward"	=> "skew-backward",
				"[Shape] Wobble Horizontal"	=> "wobble-horizontal",
				"[Shape] Wobble Vertical"	=> "wobble-vertical",
				"[Shape] Wobble To Bottom Right"	=> "wobble-to-bottom-right",
				"[Shape] Wobble To Top Right"	=> "wobble-to-top-right",
				"[Shape] Wobble Top"	=> "wobble-top",
				"[Shape] Wobble Bottom"	=> "wobble-bottom",
				"[Shape] Wobble Skew"	=> "wobble-skew",
				"[Shape] Buzz"	=> "buzz",
				"[Shape] Buzz Out"	=> "buzz-out",

				"[Background] Sweep To Right"	=> "sweep-to-right",
				"[Background] Sweep To Left"	=> "sweep-to-left",
				"[Background] Sweep To Bottom"	=> "sweep-to-bottom",
				"[Background] Sweep To Top"	=> "sweep-to-top",
				"[Background] Bounce To Right"	=> "bounce-to-right",
				"[Background] Bounce To Left"	=> "bounce-to-left",
				"[Background] Bounce To Bottom"	=> "bounce-to-bottom",
				"[Background] Bounce To Top"	=> "bounce-to-top",

				"[Icon] Icon Back"	=> "icon-back",
				"[Icon] Icon Forward"	=> "icon-forward",
				"[Icon] Icon Down"	=> "icon-down",
				"[Icon] Icon Up"	=> "icon-up",
				"[Icon] Icon Spin"	=> "icon-spin",
				"[Icon] Icon Drop"	=> "icon-drop",
				"[Icon] Icon Grow"	=> "icon-grow",
				"[Icon] Icon Shrink"	=> "icon-shrink",
				"[Icon] Icon Pulse"	=> "icon-pulse",
				"[Icon] Icon Pulse Grow"	=> "icon-pulse-grow",
				"[Icon] Icon Pulse Shrink"	=> "icon-pulse-shrink",
				"[Icon] Icon Push"	=> "icon-push",
				"[Icon] Icon Pop"	=> "icon-pop",
				"[Icon] Icon Bounce"	=> "icon-bounce",
				"[Icon] Icon Rotate"	=> "icon-rotate",
				"[Icon] Icon Grow Rotate"	=> "icon-grow-rotate",
				"[Icon] Icon Float"	=> "icon-float",
				"[Icon] Icon Sink"	=> "icon-sink",
				"[Icon] Icon Bob"	=> "icon-bob",
				"[Icon] Icon Hang"	=> "icon-hang",
				"[Icon] Icon Wobble Horizontal"	=> "icon-wobble-horizontal",
				"[Icon] Icon Wobble Vertical"	=> "icon-wobble-vertical",
				"[Icon] Icon Buzz"	=> "icon-buzz",
				"[Icon] Icon Buzz Out"	=> "icon-buzz-out",
			),
			"description"	=> "Change button hover effect (<a href='http://ianlunn.github.io/Hover/' target='_blank'>Preview effects</a>). Please note that some effects works only for regular button styles, without style overrides and round edges.",
			"std"			=> "default",
			"group"			=> "Button",
		),
		/* Button custom styles */
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Button custom styles",
			"group"			=> "Button",
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Override this button styles?', 'js_composer' ),
			'param_name' => 'button_override',
			"description"	=> "Click and scroll down to show advanced button styles options. Please note that custom styled buttons and gradients backgrounds does not support all Button hover effect styles.",
			"group"			=> "Button",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button font weight",
			"param_name"	=> "fontweight",
			"value"			=> array(
				"Normal"	=> "normal",
				"Bold"	=> "bold",
				"100"	=> "100",
				"200"	=> "200",
				"300"	=> "300",
				"400"	=> "400",
				"500"	=> "500",
				"600"	=> "600",
				"700"	=> "700",
				"800"	=> "800",
				"900"	=> "900"
			),
			"group"			=> "Custom Styles",
			"description"	=> "Make sure you loaded font weight that you selected in Google Fonts settings for Header font in Theme Control Panel.",
			"std"			=> "normal",
			"group"			=> "Button",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button background color",
			"param_name"	=> "button_color_bg",
			"description"	=> "Override button background color.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add gradient to button background color?', 'js_composer' ),
			'param_name' => 'button_bg_grad',
			"description"	=> "Use this to add second gradient color for button background.",
			"group"			=> "Button",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button background second color for gradient",
			"param_name"	=> "button_color_bggrad",
			"description"	=> "Override button background color for gradient.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_bg_grad',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button hover background color",
			"param_name"	=> "button_color_bghover",
			"description"	=> "Override button hover background color.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Add gradient to button hover background color?', 'js_composer' ),
			'param_name' => 'button_bghover_grad',
			"description"	=> "Use this to add second gradient color for button hover background.",
			"group"			=> "Button",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button hover background second color for gradient",
			"param_name"	=> "button_color_bghovergrad",
			"description"	=> "Override button hover background color for gradient.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_bghover_grad',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button text color",
			"param_name"	=> "button_color_text",
			"description"	=> "Override button text color.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button hover text color",
			"param_name"	=> "button_color_texthover",
			"description"	=> "Override button hover text color.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			'type' => 'checkbox',
			'heading' => __( 'Enable button border?', 'js_composer' ),
			'param_name' => 'button_border',
			"description"	=> "Use this to add solid border to button.",
			"group"			=> "Button",
			'dependency' => array(
				'element' => 'button_override',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Border width (in pixels)",
			"description"	=> "Add border width here, for example: 3",
			"param_name"	=> "button_border_width",
			"group"			=> "Button",
			"std"			=> "2",
			'dependency' => array(
				'element' => 'button_border',
				'value' => 'true',
			),
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button border color",
			"param_name"	=> "button_color_border",
			"description"	=> "Override button border color.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_border',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "colorpicker",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Button hover border color",
			"param_name"	=> "button_color_borderhover",
			"description"	=> "Override button hover border color.",
			"group"			=> "Button",
			"std"			=> "",
			'dependency' => array(
				'element' => 'button_border',
				'value' => 'true',
			),
			"edit_field_class" => "vc_col-xs-6",
		),
		/* Format options */
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Override block content elements styles",
			"group"			=> "Format",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Content padding",
			"description"	=> "For ex.: 50px 40px",
			"param_name"	=> "format_content_padding",
			"group"			=> "Format",
			"std"			=> "",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Header font size",
			"description"	=> "For ex.: 25px",
			"param_name"	=> "format_header_fontsize",
			"group"			=> "Format",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Header padding",
			"description"	=> "For ex.: 0 0 30px 0",
			"param_name"	=> "format_header_padding",
			"group"			=> "Format",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Description font size",
			"description"	=> "For ex.: 20px",
			"param_name"	=> "format_description_fontsize",
			"group"			=> "Format",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Description padding",
			"description"	=> "For ex.: 0 0 20px 0",
			"param_name"	=> "format_description_padding",
			"group"			=> "Format",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> false,
			"heading"		=> "Icon font size",
			"description"	=> "For ex.: 50px",
			"param_name"	=> "format_icon_fontsize",
			"group"			=> "Format",
			"std"			=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
		    'type' => 'css_editor',
		    'heading' => __( 'Css' ),
		    'param_name' => 'css',
		    'group' => __( 'Content Design options' ),
		),
   )


));
