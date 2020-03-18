<?php
/**
 * SETTINGS TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('General Settings', 'cryptibit'),
	'id' => 'main_settings'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "main_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable theme CSS3 animations', 'cryptibit'),
	"id" => "enable_theme_animations",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable colors and background colors fade effects', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show progress bar on homepage loading', 'cryptibit'),
	"id" => "enable_progressbar",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Show page loading effect with page fade and top progress bar.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show scroll to top button', 'cryptibit'),
	"id" => "scroll_to_top",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Show scroll to top button on bottom right pages corner after page scroll.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Scroll to top button style', 'cryptibit'),
	"id" => "scroll_to_top_style",
	"std" => "rounded",
	"options" => array(
		"square" => esc_html__('Square', 'cryptibit'),
		"rounded" => esc_html__('Rounded', 'cryptibit'),
		"circle" => esc_html__('Circle', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Scroll to top button shadow', 'cryptibit'),
	"id" => "scroll_to_top_shadow",
	"std" => "noshadow",
	"options" => array(
		"shadow" => esc_html__('Enable', 'cryptibit'),
		"noshadow" => esc_html__('Disable', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"type" => "htmlpage",
	"name" => wp_kses_post(__('<div class="ipanel-label">
    <label>Favicon</label>
  </div><div class="ipanel-input">
    You can upload your website favicon (site icon) in <a href="customize.php" target="_blank">WordPress Customizer</a> (in "Site Identity" section at the left sidebar).<br/><br/><br/>
  </div>', 'cryptibit'))
);

$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);
/**
 * Header TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Header, Logo, Menus', 'cryptibit'),
	'id' => 'header_settings'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "header_settings"
);
// Theme specific options
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Crypto header statistics settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable header crypto statistics block', 'cryptibit'),
	"id" => "headercryptostat_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Show 6 cryprocurrencies live rates and marketcaps.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Position', 'cryptibit'),
	"id" => "headercryptostat_position",
	"std" => "below",
	"options" => array(
		"above" => esc_html__('Above header', 'cryptibit'),
		"below" => esc_html__('Below header', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Choose where to show header crypto statistics block.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Color theme', 'cryptibit'),
	"id" => "headercryptostat_theme",
	"std" => "light",
	"options" => array(
		"dark" => esc_html__('Dark', 'cryptibit'),
		"light" => esc_html__('Light', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Choose colors used in block.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Cryptocurrencies to show', 'cryptibit'),
	"id" => "headercryptostat_currencies",
	"std" => "bitcoin,ethereum,neo,ripple,cardano,litecoin",
	"desc" => wp_kses_post(__('Add 6 cryptocurrencies full names to show, comma separated. For ex: bitcoin,ethereum,neo,ripple,cardano,litecoin. You can find available cryptocurrency names <a href="https://coinmarketcap.com/widget/" target="_blank">here</a>.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Fiat currency used for rates', 'cryptibit'),
	"id" => "headercryptostat_ratecurrency",
	"std" => "USD",
	"desc" => wp_kses_post(__('Add fiat currency used in rates. For ex: USD. You can find available fiat currncies short names <a href="https://coinmarketcap.com/widget/" target="_blank">here</a>.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
// END - Theme specific options
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header and Logo settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header position style', 'cryptibit'),
	"id" => "header_position",
	"options" => array(
		'top' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/header_position_top.png',
			"label" => esc_html__('Top header', 'cryptibit')
		),
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/header_position_left.png',
			"label" => esc_html__('Left side header', 'cryptibit')
		),
	),
	"desc" => wp_kses_post(__('IMPORTANT: If you will use Left side header position option your site will have all header elements on the left (logo, menu, social icons, etc). Left side header is a simple header, and Top header is a complex header with a lot of options and layouts. Left side header have several limitations - you CAN NOT USE Top menu, Mega Menu, Menu options, Onepage menu, Mini Cart in header, Offcanvas menu, Change logo positions, Fixed sticky header and few other header options and features in Left side header.', 'cryptibit')),
	"std" => "top",
	"type" => "image",
);
$ipanel_cryptibit_option[] = array(
	"type" => "htmlpage",
	"name" => wp_kses_post(__('<div class="ipanel-label">
    <label>Logo upload</label>
  </div><div class="ipanel-input">
    You can upload your website logo in <a href="customize.php" target="_blank">WordPress Customizer</a> (in "Header Image" section at the left sidebar).<br/><br/><br/>
  </div>', 'cryptibit'))
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Logo width (px)', 'cryptibit'),
	"id" => "logo_width",
	"std" => "179",
	"desc" => wp_kses_post(__('Default: 219. Upload retina logo (2x size) and input your regular logo width here. For example if your retina logo have 400px width put 200 value here. If you does not use retina logo input regular logo width here (your logo image width).', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable text logo', 'cryptibit'),
	"id" => "logo_text_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Use this option to disable image logo on site and replace it with text specified below.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Text logo title', 'cryptibit'),
	"id" => "logo_text",
	"std" => "",
	"desc" => wp_kses_post(__('Add your site text logo. HTML tags allowed.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Text logo font', 'cryptibit'),
	"id" => "logo_text_font",
	"std" => "body",
	"options" => array(
		"body" => esc_html__('Body font', 'cryptibit'),
		"header" => esc_html__('Header font', 'cryptibit'),
		"additional" => esc_html__('Additional font', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Choose font face that will be used for logo text. You can select fonts in Fonts tab at the left.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Logo position in header', 'cryptibit'),
	"id" => "header_logo_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/header_logo_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'center' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/header_logo_position_2.png',
			"label" => esc_html__('Center', 'cryptibit')
		),
	),
	"std" => "left",
	"type" => "image",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header height in pixels', 'cryptibit'),
	"id" => "header_height",
	"std" => "120",
	"desc" => wp_kses_post(__('Default: 120', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable fullwidth header', 'cryptibit'),
	"id" => "header_fullwidth",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable sticky header', 'cryptibit'),
	"id" => "enable_sticky_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Header with menus will be fixed to top on page scroll.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Sticky header display', 'cryptibit'),
	"id" => "sticky_header_elements",
	"std" => "headeronly",
	"options" => array(
		"headeronly" => esc_html__('Only Header', 'cryptibit'),
		"menuonly" => esc_html__('Only Menu below header', 'cryptibit'),
		"headerandmenu" => esc_html__('Header with Menu below header', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Choose elements that will be displayed in sticky header after scroll.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable fullscreen search (add search button to header)', 'cryptibit'),
	"id" => "enable_fullscreen_search",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Fullscreen Search can be opened by search button in header right side.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header advanced menu', 'cryptibit'),
	"id" => "header_menu_type",
	"std" => "none",
	"options" => array(
		"offcanvas" => esc_html__('Offcanvas floating sidebar menu', 'cryptibit'),
		"fullscreen" => esc_html__('Fullscreen menu', 'cryptibit'),
		"none" => esc_html__('Disable advanced menu', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Menu can be opened by menu toggle button in header right side. You can add widgets to offcanvas sidebar in "Offcanvas Right sidebar" in Appearance > Widgets. You can assign menu to "Header advanced menu" area in Appearance > Menus.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header info text for top header', 'cryptibit'),
	"id" => "header_info_text",
	"std" => '',
	"desc" => wp_kses_post(__('Available only with "Menu below header" main menu position. Does not available with Logo position = "Center". Displayed in header left or center (depending on logo position). ', 'cryptibit')),
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Left side header specific settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Left side header colors style', 'cryptibit'),
	"id" => "header_side_color_style",
	"std" => "light",
	"options" => array(
		"light" => esc_html__('Light', 'cryptibit'),
		"dark" => esc_html__('Dark', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Elements align in left side header', 'cryptibit'),
	"id" => "header_side_align",
	"std" => "none",
	"options" => array(
		"left" => esc_html__('Left', 'cryptibit'),
		"center" => esc_html__('Center', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Left side header menu items text transform', 'cryptibit'),
	"id" => "header_side_menu_text_transform",
	"std" => "menu_uppercase",
	"options" => array(
		"menu_uppercase" => esc_html__('UPPERCASE', 'cryptibit'),
		"menu_regular" => esc_html__('Regular', 'cryptibit'),
	),
	"desc" => wp_kses_post(__('This option will change menu text tranform for main elements.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Left side header menu font weight', 'cryptibit'),
	"id" => "header_side_menu_font_weight",
	"std" => "bold",
	"options" => array(
		"bold" => esc_html__('Bold', 'cryptibit'),
		"normal" => esc_html__('Normal', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option will change left side header menu font weight for root level menu items.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable search field in left side header', 'cryptibit'),
	"id" => "header_side_search_enable",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header info text for left side header', 'cryptibit'),
	"id" => "header_side_info_text",
	"std" => '',
	"desc" => wp_kses_post(__('This info will be shown only in Left Side header style.', 'cryptibit')),
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages/Posts title settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages/Posts title width', 'cryptibit'),
	"id" => "page_title_width",
	"std" => "fullwidth",
	"options" => array(
		"fullwidth" => esc_html__('Fullwidth', 'cryptibit'),
		"boxed" => esc_html__('Boxed', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option change WordPress pages/posts title below header layout.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages/Posts title align', 'cryptibit'),
	"id" => "page_title_align",
	"std" => "center",
	"options" => array(
		"left" => esc_html__('Left', 'cryptibit'),
		"center" => esc_html__('Center', 'cryptibit'),
		"right" => esc_html__('Right', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option change WordPress pages/posts title below header align.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages/Posts title text transform', 'cryptibit'),
	"id" => "page_title_texttransform",
	"std" => "none",
	"options" => array(
		"uppercase" => esc_html__('UPPERCASE', 'cryptibit'),
		"none" => esc_html__('Regular', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option change WordPress pages/posts title below header text transform.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu and Top menu settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"type" => "info",
	"name" => wp_kses_post(__('You can manage your theme menus <a href="nav-menus.php">here</a>.', 'cryptibit')),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable top menu', 'cryptibit'),
	"id" => "disable_top_menu",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will disable top menu (first menu with social icons and additional links)', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Top menu align', 'cryptibit'),
	"id" => "top_menu_align",
	"std" => "right",
	"options" => array(
		"right" => esc_html__('Right', 'cryptibit'),
		"left" => esc_html__('Left', 'cryptibit')
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header top menu text', 'cryptibit'),
	"id" => "header_top_text",
	"std" => '',
	"desc" => wp_kses_post(__('Text in top menu.', 'cryptibit')),
	"field_options" => array(
		'media_buttons' => false
	),
	"type" => "wp_editor",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu position', 'cryptibit'),
	"id" => "header_menu_layout",
	"options" => array(
		'menu_below_header' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/menu_in_header_1.png',
			"label" => esc_html__('Main menu below header', 'cryptibit')
		),
		'menu_in_header' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/menu_in_header_2.png',
			"label" => esc_html__('Main menu in header', 'cryptibit')
		),
	),
	"desc" => wp_kses_post(__('Main menu position in header will work if you selected Logo position = "Left".', 'cryptibit')),
	"std" => "menu_in_header",
	"type" => "image",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable Mega Menu', 'cryptibit'),
	"id" => "megamenu_enable",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Add additional mega menu options to menus elements if enabled.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Number of megamenu sidebars', 'cryptibit'),
	"id" => "megamenu_sidebars_count",
	"std" => "1",
	"desc" => wp_kses_post(__('You can use megamenu sidebars to show widgets in your megamenus. Increase this option value to add more new sidebars.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu below header width', 'cryptibit'),
	"id" => "header_menu_width",
	"std" => "menu_fullwidth",
	"options" => array(
		"menu_fullwidth" => esc_html__('Fullwidth', 'cryptibit'),
		"menu_boxed" => esc_html__('Boxed', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option change menu width for menu below header position.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu dropdown menu style', 'cryptibit'),
	"id" => "header_menu_style",
	"std" => "shadow",
	"options" => array(
		"shadow" => esc_html__('Shadow', 'cryptibit'),
		"border" => esc_html__('Border', 'cryptibit'),
		"border-top" => esc_html__('Border top', 'cryptibit'),
		"border-bottom" => esc_html__('Border bottom', 'cryptibit'),
		"border-left" => esc_html__('Border left', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option change drop down menus style in main menu.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu color scheme', 'cryptibit'),
	"id" => "header_menu_color_scheme",
	"std" => "menu_dark",
	"options" => array(
		"menu_light" => esc_html__('Light menu', 'cryptibit'),
		"menu_light_clean" => esc_html__('Light menu without borders', 'cryptibit'),
		"menu_dark" => esc_html__('Dark menu', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option will change menu background if Main menu located below header', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu horizontal align', 'cryptibit'),
	"id" => "header_menu_align",
	"std" => "menu_left",
	"options" => array(
		"menu_left" => esc_html__('Left', 'cryptibit'),
		"menu_center" => esc_html__('Center', 'cryptibit'),
		"menu_right" => esc_html__('Right', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option will change menu align.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu font weight', 'cryptibit'),
	"id" => "header_menu_font_weight",
	"std" => "normal",
	"options" => array(
		"bold" => esc_html__('Bold', 'cryptibit'),
		"normal" => esc_html__('Normal', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option will change Main menu font weight for root level menu items.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu items text transform', 'cryptibit'),
	"id" => "header_menu_text_transform",
	"std" => "menu_uppercase",
	"options" => array(
		"menu_uppercase" => esc_html__('UPPERCASE', 'cryptibit'),
		"menu_regular" => esc_html__('Regular', 'cryptibit'),
	),
	"desc" => wp_kses_post(__('This option will change menu text tranform for main elements.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);
/**
 * FOOTER TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Footer', 'cryptibit'),
	'id' => 'footer_settings'
);
$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "footer_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show "Bottom sidebar" only on homepage', 'cryptibit'),
	"id" => "bottom_sidebar_homepage_only",
	"std" => true,
	"desc" => wp_kses_post(__('This option will disable Bottom sidebar from other pages (not homepage).', 'cryptibit')),
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer sidebar style', 'cryptibit'),
	"id" => "footer_sidebar_style",
	"std" => "dark",
	"options" => array(
		"dark" => esc_html__('Dark', 'cryptibit'),
		"light" => esc_html__('Light', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option will change background and text/links colors for footer sidebar at the bottom. You can select background color for dark and light footer sidebar separately in Colors tab at the left.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer sidebar background image', 'cryptibit'),
	"id" => "footer_sidebar_background_image",
	"field_options" => array(
		"button_text" =>  esc_html__('Select image', 'cryptibit'),
	),
	"desc" => wp_kses_post(__('You can upload background image for footer sidebar. You need to prepare image (add dark overlay for example) before uploading.', 'cryptibit')),
	"type" => "media",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer sidebar columns', 'cryptibit'),
	"id" => "footer_sidebar_columns",
	"std" => "4",
	"options" => array(
		"5" => '5',
		"4" => '4',
		"3" => '3',
		"2" => '2',
		"1" => '1',
	),
	"desc" => wp_kses_post(__('This option will change columns count (widgets per row) in Footer sidebar. Default: 4', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable footer', 'cryptibit'),
	"id" => "footer_disable",
	"std" => false,
	"desc" => wp_kses_post(__('This option completetly disable footer in theme. This does not disable footer sidebar (you need to remove all widgets from sidebar to disable it).', 'cryptibit')),
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer layout', 'cryptibit'),
	"id" => "footer_layout",
	"std" => "fullwidth",
	"options" => array(
		"fullwidth" => esc_html__('Fullwidth', 'cryptibit'),
		"boxed" => esc_html__('Boxed', 'cryptibit')
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer style', 'cryptibit'),
	"id" => "footer_style",
	"std" => "dark",
	"options" => array(
		"dark" => esc_html__('Dark', 'cryptibit'),
		"light" => esc_html__('Light', 'cryptibit')
	),
	"desc" => wp_kses_post(__('This option will change background and text/links colors for footer with copyright and menu at the bottom. You can select background color for dark and light footer separately in Colors tab at the left.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Copyright and footer menu positions', 'cryptibit'),
	"id" => "footer_columns",
	"std" => "2",
	"options" => array(
		"2" => esc_html__('2 columns in 1 row, align left and right', 'cryptibit'),
		"1" => esc_html__('1 column in 2 rows, align centered', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Change footer structure for copyright and footer menu.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Custom footer paddings in pixels', 'cryptibit'),
	"id" => "footer_paddings",
	"std" => "",
	"desc" => wp_kses_post(__('Change paddings for footer. For example: 50px 0 50px 0 (top, right, bottom, left). Leave empty to use default value (25px 0).', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer copyright text', 'cryptibit'),
	"id" => "footer_copyright_text",
	"std" => "Powered by <a href='http://themeforest.net/user/dedalx/' target='_blank'>CryptiBIT - Premium WordPress Theme</a>",
	"field_options" => array(
		'media_buttons' => true
	),
	"desc" => wp_kses_post(__('You can use shortcodes here, for example [cryptibit_social_icons] to add social icons buttons.', 'cryptibit')),
	"type" => "wp_editor",
);

$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);
/**
 * SIDEBARS TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Sidebars', 'cryptibit'),
	'id' => 'sidebar_settings'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "sidebar_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages sidebar position', 'cryptibit'),
	"id" => "page_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog page sidebar position', 'cryptibit'),
	"id" => "blog_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog Archive page sidebar position', 'cryptibit'),
	"id" => "archive_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog Search page sidebar position', 'cryptibit'),
	"id" => "search_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "right",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog post sidebar position', 'cryptibit'),
	"id" => "post_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio item page sidebar position', 'cryptibit'),
	"id" => "portfolio_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('WooCommerce pages sidebar position', 'cryptibit'),
	"id" => "woocommerce_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('WooCommerce product page sidebar position', 'cryptibit'),
	"id" => "woocommerce_product_sidebar_position",
	"options" => array(
		'left' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_1.png',
			"label" => esc_html__('Left', 'cryptibit')
		),
		'right' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_2.png',
			"label" => esc_html__('Right', 'cryptibit')
		),
		'disable' => array(
			"image" => CRYPTIBIT_IPANEL_URI . 'option-images/sidebar_position_3.png',
			"label" => esc_html__('Disable sidebar', 'cryptibit')
		),
	),
	"std" => "disable",
	"type" => "image",
);

$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);
/**
 * BLOG TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Blog', 'cryptibit'),
	'id' => 'blog_settings'
);
$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "blog_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog page title', 'cryptibit'),
	"id" => "blog_page_title",
	"std" => esc_html__('News', 'cryptibit'),
	"desc" => wp_kses_post(__('You can change default blog page title heading here.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog page title background image', 'cryptibit'),
	"id" => "blog_page_title_image",
	"field_options" => array(
		"button_text" =>  esc_html__('Select image', 'cryptibit'),
	),
	"desc" => wp_kses_post(__('You can upload background image for your Blog page title.', 'cryptibit')),
	"type" => "media",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable transparent header for blog page', 'cryptibit'),
	"id" => "enable_blog_transparent_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will work only if you uploaded background image for Blog page title above.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable transparent header for blog category pages', 'cryptibit'),
	"id" => "enable_blog_cat_transparent_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will work only if you uploaded background images for blog categories.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog layout', 'cryptibit'),
	"id" => "blog_layout",
	"std" => "grid",
	"options" => array(
		"regular" => esc_html__('Regular', 'cryptibit'),
		"grid" => esc_html__('Grid', 'cryptibit')
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog posts list category links and read more button style', 'cryptibit'),
	"id" => "blog_post_elements_style",
	"std" => "rounded",
	"options" => array(
		"square" => esc_html__('Square', 'cryptibit'),
		"rounded" => esc_html__('Rounded', 'cryptibit')
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show exrcept and read more button in posts', 'cryptibit'),
	"id" => "blog_post_exrcept",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Apply to blog listing pages.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Post excerpt length (words)', 'cryptibit'),
	"id" => "post_excerpt_legth",
	"std" => "30",
	"desc" => wp_kses_post(__('Used by WordPress for post shortening. Default: 18', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show author info and avatar after single blog post', 'cryptibit'),
	"id" => "blog_enable_author_info",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show prev/next posts navigation links on single post page', 'cryptibit'),
	"id" => "blog_post_navigation",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Hide post featured image on single post page', 'cryptibit'),
	"id" => "blog_post_hide_featured_image",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Enable this if you don\'t want to see featured post image on single post page.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Blog post header title on single post page', 'cryptibit'),
	"id" => "blog_post_title",
	"std" => "title",
	"options" => array(
		"title" => esc_html__('Post title', 'cryptibit'),
		"category" => esc_html__('Post category (title in content)', 'cryptibit')
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * PORTFOLIO TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Portfolio', 'cryptibit'),
	'id' => 'portfolio_settings'
);
$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "portfolio_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio taxonomy settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio page url', 'cryptibit'),
	"id" => "portfolio_page_url",
	"std" => "",
	"desc" => wp_kses_post(__('Create portfolio page with your projects (using MGT Portfolio Grid or other elements) and add this page url here. This url will be used in Breadcrumbs to access your all portfolio projects listing from single portfolio items pages. Leave empty to use homepage as portfolio url.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio taxonomy item slug', 'cryptibit'),
	"id" => "portfolio_item_slug",
	"std" => "project",
	"desc" => wp_kses_post(__('Portfolio item pages have url like http://yoursite.com/project/your-item-name/ by default. If you want to change "project" slug in url you can do this here. After changing this field you need to resave permalinks in <a href="options-permalink.php">Settings > Permalinks</a>.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio taxonomy category slug', 'cryptibit'),
	"id" => "portfolio_category_slug",
	"std" => "projects",
	"desc" => wp_kses_post(__('Portfolio category pages have url like http://yoursite.com/projects/category-name/ by default. If you want to change "projects" slug in url you can do this here. After changing this field you need to resave permalinks in <a href="options-permalink.php">Settings > Permalinks</a>.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio taxonomy name', 'cryptibit'),
	"id" => "portfolio_taxonomy_name",
	"std" => "Portfolio",
	"desc" => wp_kses_post(__('Portfolio taxonomy name used in several places on site, for example in breadcrumbs navigation for portfolio pages.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio project page settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Display portfolio item images slider prev/next navigation buttons', 'cryptibit'),
	"id" => "portfolio_show_slider_navigation",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Display portfolio item images slider pagination buttons', 'cryptibit'),
	"id" => "portfolio_show_slider_pagination",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio item images slider autoplay', 'cryptibit'),
	"id" => "portfolio_slider_autoplay",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show prev/next portfolio items navigation on single portfolio item page', 'cryptibit'),
	"id" => "portfolio_show_item_navigation",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
/* Related works */
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related projects display settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show related projects on portfolio items pages', 'cryptibit'),
	"id" => "portfolio_related_works",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This will show projects from the same categories', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related items per row', 'cryptibit'),
	"id" => "portfolio_related_items_columns",
	"std" => "4",
	"options" => array(
		"1" => "1",
		"2" => "2",
		"3" => "3",
		"4" => "4",
		"5" => "5"
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio item page related works limit', 'cryptibit'),
	"id" => "portfolio_related_limit",
	"std" => "8",
	"desc" => wp_kses_post(__('Recommended values: 4, 8, 12, 16, etc', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related items hover effect', 'cryptibit'),
	"id" => "portfolio_posts_item_hover_effect",
	"std" => "0",
	"options" => array(
		"0" => esc_html__('Text from left, Zoom, Theme Color Overlay', 'cryptibit'),
		"1" => esc_html__('Text from left, Zoom, Transparent Overlay', 'cryptibit'),
		"2" => esc_html__('Text from left, Transparent Overlay', 'cryptibit'),
		"3" => esc_html__('Text from bottom, Zoom, Transparent Overlay', 'cryptibit'),
		"4" => esc_html__('Text from bottom, Transparent Overlay', 'cryptibit'),
		"5" => esc_html__('Image and text always visible, button on hover', 'cryptibit'),
		"6" => esc_html__('Image and text always visible, zoom on hover', 'cryptibit'),
		"7" => esc_html__('Image on hover, text always visible', 'cryptibit'),
		"8" => esc_html__('Image and text always visible', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related items grid sort animation effect 1', 'cryptibit'),
	"id" => "portfolio_posts_animation_1",
	"std" => "fade",
	"options" => array(
		"fade" => "Fade",
		"scale" => "Scale",
		"translateX" => "TranslateX",
		"translateY" => "TranslateY",
		"translateZ" => "TranslateZ",
		"rotateX" => "RotateX",
		"rotateY" => "RotateY",
		"rotateZ" => "RotateZ",
		"stagger" => "Stagger"
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related items grid sort animation effect 2', 'cryptibit'),
	"id" => "portfolio_posts_animation_2",
	"std" => "scale",
	"options" => array(
		"fade" => "Fade",
		"scale" => "Scale",
		"translateX" => "TranslateX",
		"translateY" => "TranslateY",
		"translateZ" => "TranslateZ",
		"rotateX" => "RotateX",
		"rotateY" => "RotateY",
		"rotateZ" => "RotateZ",
		"stagger" => "Stagger"
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show View More button in related projects boxes', 'cryptibit'),
	"id" => "portfolio_related_items_show_viewmore_button",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related items view more button round edges', 'cryptibit'),
	"id" => "portfolio_posts_button_round_edges",
	"std" => "disable",
	"options" => array(
		"disable" => esc_html__('Disable', 'cryptibit'),
		"small" => esc_html__('Small', 'cryptibit'),
		"medium" => esc_html__('Medium', 'cryptibit'),
		"large" => esc_html__('Large', 'cryptibit'),
		"full" => esc_html__('Full', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Related projects View More button text', 'cryptibit'),
	"id" => "portfolio_related_items_viewmore_button_title",
	"std" => "View more",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show short description in related projects boxes', 'cryptibit'),
	"id" => "portfolio_related_items_show_description",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Portfolio related items text align', 'cryptibit'),
	"id" => "portfolio_related_items_text_align",
	"std" => "left",
	"options" => array(
		"left" => esc_html__('Left', 'cryptibit'),
		"center" => esc_html__('Center', 'cryptibit'),
	),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);
/**
 * WOOCOMMERCE TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('WooCommerce', 'cryptibit'),
	'id' => 'woocommerce_settings'
);
$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "woocommerce_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Products per page limit', 'cryptibit'),
	"id" => "wc_products_per_page",
	"std" => "12",
	"desc" => wp_kses_post(__('Products per page limit on WooCommerce pages. Default: 12', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Products per row display', 'cryptibit'),
	"id" => "wc_products_per_row",
	"std" => "3",
	"options" => array(
		"5" => 5,
		"4" => 4,
		"3" => 3,
		"2" => 2,
	),
	"desc" => wp_kses_post(__('Number of products columns on WooCommerce listing pages.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable mini cart drop down in header', 'cryptibit'),
	"id" => "enable_woocommerce_cart",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('WooCommerce plugin must be installed to use this option.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Minicart products limit', 'cryptibit'),
	"id" => "woocommerce_mini_cart_limit",
	"std" => "3",
	"options" => array(
		"6" => 6,
		"5" => 5,
		"4" => 4,
		"3" => 3,
		"2" => 2,
	),
	"desc" => wp_kses_post(__('Number of unique products that you will see in mini cart before title "XX more products in cart" will appear. Default: 3', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Shop page title background image', 'cryptibit'),
	"id" => "shop_page_title_image",
	"field_options" => array(
		"button_text" =>  esc_html__('Select image', 'cryptibit'),
	),
	"desc" => wp_kses_post(__('You can upload background image for your Shop page title.', 'cryptibit')),
	"type" => "media",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable transparent header for Shop page', 'cryptibit'),
	"id" => "enable_woocommerce_transparent_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will work only if you uploaded background image for shop page title above.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show category image as category page title background', 'cryptibit'),
	"id" => "shop_category_image_title",
	"std" => true,
	"desc" => wp_kses_post(__('To use this feature you need to upload images for WooCommerce categories. We recommend to use high quality images for categories, for example 1600x1200px for better display.', 'cryptibit')),
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable transparent header for category page', 'cryptibit'),
	"id" => "enable_woocommerce_cat_transparent_header",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('This option will work only if you enabled category image for page title background above and uploaded background image for your categories.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);
/**
 * SOCIAL ICONS TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Social Icons', 'cryptibit'),
	'id' => 'social_settings'
);
$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "social_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Social icons', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Show social icons in header', 'cryptibit'),
	"id" => "header_socialicons",
	"std" => true,
	"field_options" => array(
		"box_label" => ""
	),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"type" => "info",
	"name" => esc_html__('Leave URL fields blank to hide some social icons. You can use shortcode [cryptibit_social_icons] to show social icons in widgets or content.', 'cryptibit'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Facebook Page url', 'cryptibit'),
	"id" => "facebook",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Vkontakte page url', 'cryptibit'),
	"id" => "vk",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Twitter Page url', 'cryptibit'),
	"id" => "twitter",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Google+ Page url', 'cryptibit'),
	"id" => "google-plus",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Behance', 'cryptibit'),
	"id" => "behance",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('LinkedIn Page url', 'cryptibit'),
	"id" => "linkedin",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Dribbble Page url', 'cryptibit'),
	"id" => "dribbble",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Instagram Page url', 'cryptibit'),
	"id" => "instagram",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Tumblr page url', 'cryptibit'),
	"id" => "tumblr",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pinterest page url', 'cryptibit'),
	"id" => "pinterest",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Vimeo page url', 'cryptibit'),
	"id" => "vimeo-square",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('YouTube page url', 'cryptibit'),
	"id" => "youtube",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Skype url', 'cryptibit'),
	"id" => "skype",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Houzz url', 'cryptibit'),
	"id" => "houzz",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Flickr url', 'cryptibit'),
	"id" => "flickr",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Odnoklassniki url', 'cryptibit'),
	"id" => "odnoklassniki",
	"std" => "",
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * FONTS TAB
 **/

$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Fonts', 'cryptibit'),
	'id' => 'font_settings'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "font_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Fonts settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Headers font', 'cryptibit'),
	"id" => "header_font",
	"desc" => wp_kses_post(__('Font used in headers. Default: Poppins', 'cryptibit')),
	"options" => array(
		"font-sizes" => false,
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-family" => 'Work Sans'
	),
	"type" => "typography"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Headers font parameters for Google Font', 'cryptibit'),
	"id" => "header_font_options",
	"std" => "400,700",
	"desc" => wp_kses_post(__('You can specify additional Google Fonts paramaters here, for example fonts styles to load or subset. Default: 400,700<br>Example with custom subsets: 300,300italic,400,400italic&subset=latin,latin-ext,cyrillic.', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Body font', 'cryptibit'),
	"id" => "body_font",
	"desc" => wp_kses_post(__('Font used in text elements. Default: Roboto', 'cryptibit')),
	"options" => array(
		"font-sizes" => array(
			" " => esc_html__('Font Size', 'cryptibit'),
			'11' => '11px',
			'12' => '12px',
			'13' => '13px',
			'14' => '14px',
			'15' => '15px',
			'16' => '16px',
			'17' => '17px',
			'18' => '18px',
			'19' => '19px',
			'20' => '20px',
			'21' => '21px',
			'22' => '22px',
			'23' => '23px',
			'24' => '24px',
			'25' => '25px',
			'26' => '26px',
			'27' => '27px'
		),
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-size" => '16',
		"font-family" => 'Roboto'
	),
	"type" => "typography"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Body font parameters for Google Font', 'cryptibit'),
	"id" => "body_font_options",
	"std" => "300,300italic,400,400italic,600,600italic",
	"desc" => wp_kses_post(__('You can specify additional Google Fonts paramaters here, for example fonts styles to load or subset. Default: 300,300italic,400,400italic,600,600italic<br>Example with custom subsets: 300,300italic,400,400italic&subset=latin,latin-ext,cyrillic', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Buttons font', 'cryptibit'),
	"id" => "buttons_font",
	"desc" => wp_kses_post(__('Font used in buttons. Default: Poppins', 'cryptibit')),
	"options" => array(
		"font-sizes" => false,
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-family" => 'Montserrat'
	),
	"type" => "typography"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Button font parameters for Google Font', 'cryptibit'),
	"id" => "buttons_font_options",
	"std" => "500",
	"desc" => wp_kses_post(__('You can specify additional Google Fonts paramaters here, for example fonts styles to load or subset. Default: 300,400,600<br>Example with custom subsets: 300,300italic,400,400italic&subset=latin,latin-ext,cyrillic', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Additional font', 'cryptibit'),
	"id" => "additional_font",
	"desc" => wp_kses_post(__('Font used some special decorated theme elements. Default: Herr Von Muellerhoff', 'cryptibit')),
	"options" => array(
		"font-sizes" => false,
		"color" => false,
		"font-families" => iPanel::getGoogleFonts(),
		"font-styles" => false
	),
	"std" => array(
		"font-family" => 'Herr Von Muellerhoff'
	),
	"type" => "typography"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Enable Additional font', 'cryptibit'),
	"id" => "additional_font_enable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Uncheck if you don\'t want to use Additional font. This will speed up your site.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => wp_kses_post(__('Disable ALL Google Fonts on site', 'cryptibit')),
	"id" => "font_google_disable",
	"std" => false,
	"field_options" => array(
		"box_label" => ""
	),
	"desc" => wp_kses_post(__('Use this if you want extra site speed or want to have regular fonts. Arial font will be used with this option.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Regular font (apply if you disabled Google Fonts below)', 'cryptibit'),
	"id" => "font_regular",
	"std" => "Arial",
	"options" => array(
		"Arial" => "Arial",
		"Tahoma" => "Tahoma",
		"Times New Roman" => "Times New Roman",
		"Verdana" => "Verdana",
		"Helvetica" => "Helvetica",
		"Georgia" => "Georgia",
		"Courier New" => "Courier New"
	),
	"desc" => wp_kses_post(__('Use this option if you disabled ALL Google Fonts.', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Custom font size and font weight settings', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true // Set true to show items by default.
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Page title font size override', 'cryptibit'),
	"id" => "page_title_font_size",
	"std" => "",
	"desc" => wp_kses_post(__('If you want to override default theme font size for pages title you can do it here. For example: 40px', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Headers font weight override', 'cryptibit'),
	"id" => "header_font_weight",
	"std" => "",
	"desc" => wp_kses_post(__('If you want to override default theme font weight for &#x3C;h1&#x3E;,&#x3C;h2&#x3E;,&#x3C;h3&#x3E;,&#x3C;h4&#x3E;,&#x3C;h5&#x3E;,&#x3C;h6&#x3E; tags you can do it here. For example: 300', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Body font weight override', 'cryptibit'),
	"id" => "body_font_weight",
	"std" => "",
	"desc" => wp_kses_post(__('If you want to override default theme font weight for &#x3C;BODY&#x3E; tag you can do it here. For example: 500', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Widget title font weight override', 'cryptibit'),
	"id" => "widget_title_font_weight",
	"std" => "",
	"desc" => wp_kses_post(__('If you want to override default theme font weight for widgets titles you can do it here. For example: 300', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * COLORS TAB
 **/

$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Colors & Skins', 'cryptibit'),
	'id' => 'color_settings',
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "color_settings",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Predefined color skins', 'cryptibit'),
	"id" => "color_skin_name",
	"std" => "none",
	"options" => array(
		"none" => esc_html__('Use colors specified below', 'cryptibit'),
		"default" => esc_html__('CryptiBIT (Default)', 'cryptibit'),
		"green" => esc_html__('Green', 'cryptibit'),
		"blue" => esc_html__('Cloudy blue', 'cryptibit'),
		"purple" => esc_html__('Purple', 'cryptibit'),
		"red" => esc_html__('Red', 'cryptibit'),
		"blackandwhite" => esc_html__('Greyscale', 'cryptibit'),
		"orange" => esc_html__('Yellow', 'cryptibit'),
		"fencer" => esc_html__('Fencer', 'cryptibit'),
		"perfectum" => esc_html__('Perfectum', 'cryptibit'),
		"simplegreat" => esc_html__('SimpleGreat', 'cryptibit')
	),
	"desc" => wp_kses_post(__('Select one of predefined skins', 'cryptibit')),
	"type" => "select",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Body background color', 'cryptibit'),
	"id" => "theme_body_color",
	"std" => "#ffffff",
	"desc" => wp_kses_post(__('Used in many theme places, default: #ffffff', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Body text color', 'cryptibit'),
	"id" => "theme_text_color",
	"std" => "#2A2F35",
	"desc" => wp_kses_post(__('Used in many theme places, default: #2A2F35', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Theme Main color', 'cryptibit'),
	"id" => "theme_main_color",
	"std" => "#69ced3",
	"desc" => wp_kses_post(__('Used in many theme places, links, buttons, tabs color, default: #69ced3', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Header background color', 'cryptibit'),
	"id" => "theme_header_bg_color",
	"std" => "#ffffff",
	"desc" => wp_kses_post(__('Default: #ffffff', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Top menu background color', 'cryptibit'),
	"id" => "theme_top_menu_bg_color",
	"std" => "#F5F5F5",
	"desc" => wp_kses_post(__('This background will be used for top menu. Default: #F5F5F5', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Top menu text/links color', 'cryptibit'),
	"id" => "theme_top_menu_color",
	"std" => "#828282",
	"desc" => wp_kses_post(__('This background will be used for top menu. Default: #828282', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu background color (for Light menu style)', 'cryptibit'),
	"id" => "theme_main_menu_bg_color",
	"std" => "#FFFFFF",
	"desc" => wp_kses_post(__('This background will be used for menu below header position. Default: #FFFFFF', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Main menu background color (for Dark menu style)', 'cryptibit'),
	"id" => "theme_main_menu_dark_bg_color",
	"std" => "#2A2F35",
	"desc" => wp_kses_post(__('This background will be used for Dark menu below header position. Default: #2A2F35', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer background color (for Dark footer style)', 'cryptibit'),
	"id" => "theme_footer_bg_color",
	"std" => "#1C2126",
	"desc" => wp_kses_post(__('This color apply if you selected Dark footer style. Default: #1C2126', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Footer background color (for Light footer style)', 'cryptibit'),
	"id" => "theme_footerlight_bg_color",
	"std" => "#FFFFFF",
	"desc" => wp_kses_post(__('This color apply if you selected Light footer sidebar style. Default: #FFFFFF', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages title color', 'cryptibit'),
	"id" => "theme_title_color",
	"std" => "#2A2F35",
	"desc" => wp_kses_post(__('Default: #2A2F35', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Pages title background color', 'cryptibit'),
	"id" => "theme_titlebg_color",
	"std" => "#F4F4F4",
	"desc" => wp_kses_post(__('Default: #F4F4F4', 'cryptibit')),
	"field_options" => array(
		//'desc_in_tooltip' => true
	),
	"type" => "color",
);

$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * RESPONSIVE SETTINGS TAB
 **/
$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Responsive Settings', 'cryptibit'),
	'id' => 'responsive_settings'
);
$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "responsive_settings"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Touch devices', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable fixed header on touch devices', 'cryptibit'),
	"id" => "sticky_header_touch_disable",
	"std" => true,
	"desc" => wp_kses_post(__('You can disable sticky header on touch devices. Sticky header animation on some touch devices not so smooth like on desktop PC, if you worry about this you can use this option.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Tablet resolution (< 1024px width)', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true
	)
);
$ipanel_cryptibit_option[] = array(
	"type" => "info",
	"name" => esc_html__('Please note that if you disabled some element for Tablet it will be automatically disabled for mobile resolution too, no matter what settings you set for this element for mobile.', 'cryptibit'),
	"field_options" => array(
		"style" => 'alert'
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable header info text', 'cryptibit'),
	"id" => "responsive_tablet_headerinfotext_disable",
	"std" => true,
	"desc" => wp_kses_post(__('Disable header info text (address and phone in header on demo)', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable header top menu text', 'cryptibit'),
	"id" => "responsive_tablet_headertopmenutext_disable",
	"std" => true,
	"desc" => wp_kses_post(__('Disable header top menu text', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Mobile resolution (< 767px width)', 'cryptibit'),
	"type" => "StartSection",
	"field_options" => array(
		"show" => true
	)
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable header info text', 'cryptibit'),
	"id" => "responsive_mobile_headerinfotext_disable",
	"std" => true,
	"desc" => wp_kses_post(__('Disable header info text (address and phone in header on demo)', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable header top menu text', 'cryptibit'),
	"id" => "responsive_mobile_headertopmenutext_disable",
	"std" => true,
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Disable advanced header menu toggle button', 'cryptibit'),
	"id" => "responsive_mobile_headeradvmenutoggle_disable",
	"std" => false,
	"desc" => wp_kses_post(__('You can disable header advanced menu toggle on mobile if this is not your main menu.', 'cryptibit')),
	"type" => "checkbox",
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Logo width (px)', 'cryptibit'),
	"id" => "responsive_mobile_logo_width",
	"std" => "",
	"desc" => wp_kses_post(__('Custom logo width for mobile, use if you have wide logo and it does not fit near menu icons on mobile. For example: 200', 'cryptibit')),
	"type" => "text",
);
$ipanel_cryptibit_option[] = array(
		"type" => "EndSection"
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * CUSTOM CODE TAB
 **/

$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Custom CSS/JS', 'cryptibit'),
	'id' => 'custom_code'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "custom_code",
);
$ipanel_cryptibit_option[] = array(
	"type" => "htmlpage",
	"name" => wp_kses_post(__('<div class="ipanel-label"><label>Custom CSS styles</label></div><div class="ipanel-input">You can add Custom CSS styles in <a href="customize.php" target="_blank">WordPress Customizer</a> (in "Additional CSS" section at the left sidebar).<br/><br/><br/></div>', 'cryptibit'))
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Custom JavaScript or JQuery code', 'cryptibit'),
	"id" => "custom_js_code",
	"std" => '',
	"field_options" => array(
		"language" => "javascript",
		"line_numbers" => true,
		"autoCloseBrackets" => true,
		"autoCloseTags" => true
	),
	"desc" => wp_kses_post(__('This code will run in header, do not add &#x3C;script&#x3E;...&#x3C;/script&#x3E; tags here, this tags will be added automatically. You can use JQuery code here.', 'cryptibit')),
	"type" => "textarea",
);

$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * DOCUMENTATION TAB
 **/

$ipanel_cryptibit_tabs[] = array(
	"name" => esc_html__('Documentation', 'cryptibit'),
	'id' => 'documentation'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "documentation"
);

function cryptibit_get_plugin_version_number($plugin_name) {
        // If get_plugins() isn't available, require it
	if ( ! function_exists( 'get_plugins' ) )
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        // Create the plugins folder and file variables
	$plugin_folder = get_plugins( '/' . $plugin_name );
	$plugin_file = $plugin_name.'.php';

	// If the plugin version number is set, return it
	if ( isset( $plugin_folder[$plugin_file]['Version'] ) ) {
		return $plugin_folder[$plugin_file]['Version'];

	} else {
	// Otherwise return null
		return esc_html__('Plugin not installed', 'cryptibit');
	}
}

if(is_child_theme()) {
	$child_theme_html = ' (Child theme installed)';
} else {
	$child_theme_html = '';
}

$ipanel_cryptibit_option[] = array(
	"type" => "htmlpage",
	"name" => '<div class="documentation-icon"><img src="'.esc_url(CRYPTIBIT_IPANEL_URI). 'assets/img/documentation-icon.png" alt="Documentation"/></div><p>We recommend you to read <a href="http://magniumthemes.com/go/cryptibit-docs/" target="_blank">Theme Documentation</a> before you will start using our theme to building your website. It covers all steps for site configuration, demo content import, theme features usage and more.</p>
<p>If you have face any problems with our theme feel free to use our <a href="http://support.magniumthemes.com/" target="_blank">Support System</a> to contact us and get help for free.</p>
<a class="button button-primary" href="http://magniumthemes.com/go/cryptibit-docs/" target="_blank">Theme Documentation</a>
<a class="button button-primary" href="http://support.magniumthemes.com/" target="_blank">Support System</a><h3>Technical information (paste it to your support ticket):</h3><textarea style="width: 500px; height: 160px;font-size: 12px;">Theme Version: '.wp_get_theme(get_template())->get( 'Version' ).$child_theme_html.'
WordPress Version: '.get_bloginfo( 'version' ).'
Theme Addons version: '.cryptibit_get_plugin_version_number('cryptibit-theme-addons').'
WooCommerce Version: '.cryptibit_get_plugin_version_number('woocommerce').'
Visual Composer Version: '.cryptibit_get_plugin_version_number('js_composer').'
Slider Revolution Version: '.cryptibit_get_plugin_version_number('revslider').'
</textarea>'
);

$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * EXPORT/IMPORT TAB
 **/

$ipanel_cryptibit_tabs[] = array(
	'name' => esc_html__('Settings Backup', 'cryptibit'),
	'id' => 'export_settings'
);

$ipanel_cryptibit_option[] = array(
	"type" => "StartTab",
	"id" => "export_settings"
);

$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Export theme control panel settings', 'cryptibit'),
	"type" => "export",
	"desc" => wp_kses_post(__('Export theme admin panel settings to file.', 'cryptibit'))
);
$ipanel_cryptibit_option[] = array(
	"name" => esc_html__('Import theme control panel settings', 'cryptibit'),
	"type" => "import"
);
$ipanel_cryptibit_option[] = array(
	"type" => "EndTab"
);

/**
 * CONFIGURATION
 **/

$ipanel_configs = array(
	'ID'=> 'CRYPTIBIT_PANEL',
	'menu'=>
		array(
			'submenu' => false,
			'page_title' => esc_html__('CryptiBIT Control Panel', 'cryptibit'),
			'menu_title' => esc_html__('Theme Control Panel ', 'cryptibit'),
			'capability' => 'manage_options',
			'menu_slug' => 'manage_theme_options',
			'icon_url' => CRYPTIBIT_IPANEL_URI . 'assets/img/panel-icon.png',
			'position' => 59
		),
	'rtl' => ( function_exists('is_rtl') && is_rtl() ),
	'tabs' => $ipanel_cryptibit_tabs,
	'fields' => $ipanel_cryptibit_option,
	'download_capability' => 'manage_options',
	'live_preview' => ''
);

$ipanel_theme_usage = new IPANEL( $ipanel_configs );

