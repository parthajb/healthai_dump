<?php
// VC [mgt_bitcoin_price_wp]
vc_map(array(
   "name" 			=> "MGT Bitcoin Price",
   "category" 		=> 'CryptiBIT Content',
   "description"	=> "Add realtime Bitcoin price or chart widget",
   "base" 			=> "mgt_bitcoin_price_wp",
   "class" 			=> "",
   "icon" 			=> "vc_mgt_bitcoin_price",
   "params" 	=> array(
   		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Bitcoin price settings",
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Style",
			"param_name"	=> "style",
			"value"			=> array(
				"Chart"	=> "chart",
				"Simple price"	=> "price"
			),
			"description"	=> "",
			"std"			=> "chart",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Currency",
			"param_name"	=> "currency",
			"std"			=> "usd",
			"description"	=> "Input currency, for ex.: usd, eur, jpy, etc",
			"dependency"	=> array(
				"element"	=> "style",
				"value"		=> Array("price"),
			),
		),
		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Color theme",
			"param_name"	=> "theme",
			"value"			=> array(
				"Dark"	=> "dark",
				"Light"	=> "light"
			),
			"description"	=> "",
			"std"			=> "dark",
		),
		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Effects",
		),
		// CSS Animations
		vc_map_add_css_animation( true ),
		array(
		    'type' => 'css_editor',
		    'heading' => 'Css',
		    'param_name' => 'css',
		    'group' => 'Content Design options',
		),
   )

));
