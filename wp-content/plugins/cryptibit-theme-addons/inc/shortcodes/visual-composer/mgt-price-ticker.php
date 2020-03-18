<?php
// VC [mgt_price_ticker_wp]
vc_map(array(
   "name" 			=> "MGT Price Ticker",
   "category" 		=> 'CryptiBIT Content',
   "description"	=> "Add realtime any crypto coin price with details",
   "base" 			=> "mgt_price_ticker_wp",
   "class" 			=> "",
   "icon" 			=> "vc_mgt_price_ticker",
   "params" 	=> array(
   		array(
			"type"			=> "mgt_separator",
			"param_name"	=> generate_separator_name(),
			"heading"		=> "Price ticker settings",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Cryptocurrency ID",
			"param_name"	=> "cryptocurrencyid",
			"std"			=> "1",
			"description"	=> "You can find available cryptocurrency ID <a href='https://coinmarketcap.com/widget/' target='_blank'>here</a> - select Cryptocurrency that you need and check <strong>data-currencyid='XXXX'</strong> param in textarea at the right - use this XXXX digital id here.",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Fiat currency short name",
			"param_name"	=> "currency",
			"std"			=> "USD",
			"description"	=> "You can find available fiat currency short names: <a href='https://coinmarketcap.com/widget/' target='_blank'>here</a>.",
		),
		array(
			'type' => 'checkbox',
			'heading' => 'Show Market Cap?',
			'param_name' => 'marketcap',
			"description"	=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			'type' => 'checkbox',
			'heading' => 'Show Volume (24h)?',
			'param_name' => 'volume',
			"description"	=> "",
			"edit_field_class" => "vc_col-xs-6",
		),
		array(
			'type' => 'checkbox',
			'heading' => 'Add borders?',
			'param_name' => 'borders',
			"description"	=> "",
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
