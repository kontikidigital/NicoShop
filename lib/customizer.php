<?php
/**
 * Theme Customization
 *
 * @package      NicoShop
 * @author       Max Terbeck
 * @link         http://www.targetimc.com/
 * @copyright    Copyright (c) 2015, Max Terbeck
 * @license      GPL-3.0+
 * @version      1.0.0
 */

/**
 * Get default primary color for Customizer.
 *
 * Abstracted here since at least two functions use it.
 *
 * @since 1.0.0
 *
 * @return string Hex color code for primary color.
 */
// Text Color
function nicoshop_customizer_get_default_text_color() {
	return '#333333';
}

// Link Color
function nicoshop_customizer_get_default_link_color() {
	return '#888888';
}

// Titles Color
function nicoshop_customizer_get_default_titles_color() {
	return '#333333';
}

// Entry Content Background Color
function nicoshop_customizer_get_default_entry_background_color() {
	return '#ffffff';
}

// Buttons Background Color
function nicoshop_customizer_get_default_buttons_background_color() {
	return '#ffffff';
}

// Buttons Border Color
function nicoshop_customizer_get_default_buttons_border_color() {
	return '#333333';
}

// Buttons Text Color
function nicoshop_customizer_get_default_buttons_text_color() {
	return '#333333';
}

// Buttons Background Color on Hover
function nicoshop_customizer_get_default_buttons_background_color_hover() {
	return '#333333';
}

// Buttons Border Color on Hover
function nicoshop_customizer_get_default_buttons_border_color_hover() {
	return '#333333';
}

// Buttons Text Color on Hover
function nicoshop_customizer_get_default_buttons_text_color_hover() {
	return '#ffffff';
}

// Primary Navigation Background Color
function nicoshop_customizer_get_default_navprimary_background_color() {
	return '#333333';
}

// Primary Navigation Text Color
function nicoshop_customizer_get_default_navprimary_text_color() {
	return '#ffffff';
}

// Primary Navigation Text Color on Hover
function nicoshop_customizer_get_default_navprimary_text_color_hover() {
	return '#888888';
}

// Header Background Color
function nicoshop_customizer_get_default_header_background_color() {
	return '#ffffff';
}

// Secondary Navigation Text Color
function nicoshop_customizer_get_default_navsecondary_text_color() {
	return '#333333';
}

// Secondary Navigation Text Color on Hover
function nicoshop_customizer_get_default_navsecondary_text_color_hover() {
	return '#888888';
}

// Footer Navigation Background Color
function nicoshop_customizer_get_default_navfooter_background_color() {
	return '#333333';
}

// Footer Navigation Text Color
function nicoshop_customizer_get_default_navfooter_text_color() {
	return '#ffffff';
}

// Footer Navigation Text Color on Hover
function nicoshop_customizer_get_default_navfooter_text_color_hover() {
	return '#888888';
}

// Footer Widgets Background Color
function nicoshop_customizer_get_default_footer_widgets_background_color() {
	return '#333333';
}

// Footer Widgets Titles Color
function nicoshop_customizer_get_default_footer_widgets_title_color() {
	return '#ffffff';
}

// Footer Widgets Text Color
function nicoshop_customizer_get_default_footer_widgets_text_color() {
	return '#ffffff';
}

// Enews Background Color and Button Background on Hover
function nicoshop_customizer_get_default_enews_background_color() {
	return '#333333';
}

// Enews Background Color on Hover and Button Background
function nicoshop_customizer_get_default_enews_background_color_hover() {
	return '#888888';
}

// Enews Text and Button Text on Hover
function nicoshop_customizer_get_default_enews_text_color() {
	return '#ffffff';
}

// Enews Text on Hover and Button Text
function nicoshop_customizer_get_default_enews_text_color_hover() {
	return '#ffffff';
}

// Home Middle Background
function nicoshop_customizer_get_default_homemiddle_background_color() {
	return '#ffffff';
}

// Home Middle Text Color
function nicoshop_customizer_get_default_homemiddle_text_color() {
	return '#333333';
}

// Home Middle & Slider Overlays Background
function nicoshop_customizer_get_default_overlays_background_color() {
	return '#ffffff';
}

// Home Middle Title Color & Slider Overlays Subtitle Color
function nicoshop_customizer_get_default_overlays_title_color() {
	return '#888888';
}

// Slider Overlay Title Color
function nicoshop_customizer_get_default_slider_overlay_title_color() {
	return '#333333';
}

// Sidebar Background
function nicoshop_customizer_get_default_sidebar_background_color() {
	return '#ffffff';
}

// Sidebar Title Color
function nicoshop_customizer_get_default_sidebar_title_color() {
	return '#333333';
}

// Sidebar Text Color
function nicoshop_customizer_get_default_sidebar_text_color() {
	return '#333333';
}

// Sidebar Link Color
function nicoshop_customizer_get_default_sidebar_link_color() {
	return '#888888';
}

// WooCommerce Price
function nicoshop_customizer_get_default_woo_price_color() {
	return '#333333';
}

// Share Buttons Background
function nicoshop_customizer_get_default_share_background_color() {
	return '#333333';
}

// Share Buttons Text
function nicoshop_customizer_get_default_share_text_color() {
	return '#ffffff';
}

// Input & Text Area Colors
function nicoshop_customizer_get_default_input_color() {
	return '#ffffff';
}

// Input & Text Area Text Colors
function nicoshop_customizer_get_default_input_text_color() {
	return '#333333';
}

// Borders Color
function nicoshop_customizer_get_default_borders_color() {
	return '#f5f5f5';
}

//////////////////////////////////////
add_action( 'customize_register', 'nicoshop_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function nicoshop_customizer_register() {

	global $wp_customize;

	// Text Color
	$wp_customize->add_setting(
		'nicoshop_text_color',
		array(
			'default' => nicoshop_customizer_get_default_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_text_color',
			array(
				'description' => __( 'Change the default color for body texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Text Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_text_color',
			)
		)
	);

	// Link Color
	$wp_customize->add_setting(
		'nicoshop_link_color',
		array(
			'default' => nicoshop_customizer_get_default_link_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_link_color',
			array(
				'description' => __( 'Change the default secondary color for your links.', 'tgt-nicoshop' ),
			    'label'    => __( 'Link Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_link_color',
			)
		)
	);

	// Titles Color
	$wp_customize->add_setting(
		'nicoshop_titles_color',
		array(
			'default' => nicoshop_customizer_get_default_titles_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_titles_color',
			array(
				'description' => __( 'Change the default color for titles (h1, h2, h3, h4, h5, h6).', 'tgt-nicoshop' ),
			    'label'    => __( 'Titles Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_titles_color',
			)
		)
	);

	// Entry Content Background Color
	$wp_customize->add_setting(
		'nicoshop_entry_background_color',
		array(
			'default' => nicoshop_customizer_get_default_entry_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_entry_background_color',
			array(
				'description' => __( 'Change the default color for Entry Content Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Entry Content Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_entry_background_color',
			)
		)
	);

	// Buttons Background Color
	$wp_customize->add_setting(
		'nicoshop_buttons_background_color',
		array(
			'default' => nicoshop_customizer_get_default_buttons_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_buttons_background_color',
			array(
				'description' => __( 'Change the default color for the Buttons Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Buttons Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_buttons_background_color',
			)
		)
	);

	// Buttons Border Color
	$wp_customize->add_setting(
		'nicoshop_buttons_border_color',
		array(
			'default' => nicoshop_customizer_get_default_buttons_border_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_buttons_border_color',
			array(
				'description' => __( 'Change the default color for the Buttons Borders.', 'tgt-nicoshop' ),
			    'label'    => __( 'Buttons Borders Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_buttons_border_color',
			)
		)
	);

	// Buttons Text Color
	$wp_customize->add_setting(
		'nicoshop_buttons_text_color',
		array(
			'default' => nicoshop_customizer_get_default_buttons_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_buttons_text_color',
			array(
				'description' => __( 'Change the default color for Buttons Texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Buttons Texts Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_buttons_text_color',
			)
		)
	);

	// Buttons Background Color on Hover
	$wp_customize->add_setting(
		'nicoshop_buttons_background_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_buttons_background_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_buttons_background_color_hover',
			array(
				'description' => __( 'Change the default color for the Buttons Background on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Buttons Background Color on Hover', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_buttons_background_color_hover',
			)
		)
	);

	// Buttons Border Color on Hover
	$wp_customize->add_setting(
		'nicoshop_buttons_border_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_buttons_border_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_buttons_border_color_hover',
			array(
				'description' => __( 'Change the default color for the Buttons Borders on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Buttons Borders Color on Hover', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_buttons_border_color_hover',
			)
		)
	);

	// Buttons Text Color on Hover
	$wp_customize->add_setting(
		'nicoshop_buttons_text_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_buttons_text_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_buttons_text_color_hover',
			array(
				'description' => __( 'Change the default color for Buttons Texts on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Buttons Texts Color on Hover', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_buttons_text_color_hover',
			)
		)
	);

	// Primary Navigation Background Color
	$wp_customize->add_setting(
		'nicoshop_navprimary_background_color',
		array(
			'default' => nicoshop_customizer_get_default_navprimary_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navprimary_background_color',
			array(
				'description' => __( 'Change the default color for the Primary Navigation Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Primary Navigation Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navprimary_background_color',
			)
		)
	);

	// Primary Navigation Text Color
	$wp_customize->add_setting(
		'nicoshop_navprimary_text_color',
		array(
			'default' => nicoshop_customizer_get_default_navprimary_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navprimary_text_color',
			array(
				'description' => __( 'Change the default color for the Primary Navigation Texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Primary Navigation Texts Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navprimary_text_color',
			)
		)
	);

	// Primary Navigation Text Color on Hover
	$wp_customize->add_setting(
		'nicoshop_navprimary_text_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_navprimary_text_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navprimary_text_color_hover',
			array(
				'description' => __( 'Change the default color for the Primary Navigation Texts on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Primary Navigation Texts Color on Hover', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navprimary_text_color_hover',
			)
		)
	);

	// Header Background Color
	$wp_customize->add_setting(
		'nicoshop_header_background_color',
		array(
			'default' => nicoshop_customizer_get_default_header_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_header_background_color',
			array(
				'description' => __( 'Change the default color for the Header Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Header Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_header_background_color',
			)
		)
	);

	// Secondary Navigation Text Color
	$wp_customize->add_setting(
		'nicoshop_navsecondary_text_color',
		array(
			'default' => nicoshop_customizer_get_default_navsecondary_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navsecondary_text_color',
			array(
				'description' => __( 'Change the default color for the Secondary Navigation Texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Secondary Navigation Texts Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navsecondary_text_color',
			)
		)
	);

	// Secondary Navigation Text Color on Hover
	$wp_customize->add_setting(
		'nicoshop_navsecondary_text_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_navsecondary_text_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navsecondary_text_color_hover',
			array(
				'description' => __( 'Change the default color for the Secondary Navigation Texts on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Secondary Navigation Texts Color on Hover', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navsecondary_text_color_hover',
			)
		)
	);

	// Footer Navigation Background Color
	$wp_customize->add_setting(
		'nicoshop_navfooter_background_color',
		array(
			'default' => nicoshop_customizer_get_default_navfooter_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navfooter_background_color',
			array(
				'description' => __( 'Change the default color for the Footer Navigation Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Footer Navigation Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navfooter_background_color',
			)
		)
	);

	// Footer Navigation Text Color
	$wp_customize->add_setting(
		'nicoshop_navfooter_text_color',
		array(
			'default' => nicoshop_customizer_get_default_navfooter_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navfooter_text_color',
			array(
				'description' => __( 'Change the default color for the Footer Navigation Texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Footer Navigation Texts Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navfooter_text_color',
			)
		)
	);

	// Footer Navigation Text Color on Hover
	$wp_customize->add_setting(
		'nicoshop_navfooter_text_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_navfooter_text_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_navfooter_text_color_hover',
			array(
				'description' => __( 'Change the default color for the Footer Navigation Texts on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Footer Navigation Texts Color on Hover', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_navfooter_text_color_hover',
			)
		)
	);

		// Footer Widgets Background Color
	$wp_customize->add_setting(
		'nicoshop_footer_widgets_background_color',
		array(
			'default' => nicoshop_customizer_get_default_footer_widgets_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_footer_widgets_background_color',
			array(
				'description' => __( 'Change the default color for the Footer Widgets Area Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Footer Widgets Area Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_footer_widgets_background_color',
			)
		)
	);

	// Footer Widgets Titles Color
	$wp_customize->add_setting(
		'nicoshop_footer_widgets_title_color',
		array(
			'default' => nicoshop_customizer_get_default_footer_widgets_title_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_footer_widgets_title_color',
			array(
				'description' => __( 'Change the default color for the Footer Widgets Titles.', 'tgt-nicoshop' ),
			    'label'    => __( 'Footer Widgets Titles Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_footer_widgets_title_color',
			)
		)
	);

	// Footer Widgets Text Color
	$wp_customize->add_setting(
		'nicoshop_footer_widgets_text_color',
		array(
			'default' => nicoshop_customizer_get_default_footer_widgets_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_footer_widgets_text_color',
			array(
				'description' => __( 'Change the default color for the Footer Widgets Texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Footer Widgets Texts Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_footer_widgets_text_color',
			)
		)
	);

	// Enews Background Color and Button Background on Hover
	$wp_customize->add_setting(
		'nicoshop_enews_background_color',
		array(
			'default' => nicoshop_customizer_get_default_enews_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_enews_background_color',
			array(
				'description' => __( 'Change the default color for the Enews Background Color and Enews Button Background on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Enews Background Color and Enews Button Background on Hover Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_enews_background_color',
			)
		)
	);

	// Enews Background Color on Hover and Button Background
	$wp_customize->add_setting(
		'nicoshop_enews_background_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_enews_background_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_enews_background_color_hover',
			array(
				'description' => __( 'Change the default color for the Enews Background Color on Hover and Enews Button Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Enews Background Color on Hover and Enews Button Background Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_enews_background_color_hover',
			)
		)
	);

	// Enews Text and Button Text on Hover
	$wp_customize->add_setting(
		'nicoshop_enews_text_color',
		array(
			'default' => nicoshop_customizer_get_default_enews_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_enews_text_color',
			array(
				'description' => __( 'Change the default color for the Enews Texts and Enews Button Text on Hover.', 'tgt-nicoshop' ),
			    'label'    => __( 'Enews Texts and Enews Button Text on Hover Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_enews_text_color',
			)
		)
	);

	// Enews Text on Hover and Button Text
	$wp_customize->add_setting(
		'nicoshop_enews_text_color_hover',
		array(
			'default' => nicoshop_customizer_get_default_enews_text_color_hover(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_enews_text_color_hover',
			array(
				'description' => __( 'Change the default color for the Enews Texts on Hover and Enews Button Text.', 'tgt-nicoshop' ),
			    'label'    => __( 'Enews Texts on Hover and Enews Button Text Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_enews_text_color_hover',
			)
		)
	);

	// Home Middle Background Color
	$wp_customize->add_setting(
		'nicoshop_homemiddle_background_color',
		array(
			'default' => nicoshop_customizer_get_default_homemiddle_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_homemiddle_background_color',
			array(
				'description' => __( 'Change the default color for the Home Middle Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Home Middle Background Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_homemiddle_background_color',
			)
		)
	);

	// Home Middle Text Color
	$wp_customize->add_setting(
		'nicoshop_homemiddle_text_color',
		array(
			'default' => nicoshop_customizer_get_default_homemiddle_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_homemiddle_text_color',
			array(
				'description' => __( 'Change the default color for the Home Middle Text.', 'tgt-nicoshop' ),
			    'label'    => __( 'Home Middle Text Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_homemiddle_text_color',
			)
		)
	);

	// Home Middle & Slider Overlays Background
	$wp_customize->add_setting(
		'nicoshop_overlays_background_color',
		array(
			'default' => nicoshop_customizer_get_default_overlays_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_overlays_background_color',
			array(
				'description' => __( 'Change the default color for the Home Middle & Slider Overlays Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Home Middle & Slider Overlays Background Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_overlays_background_color',
			)
		)
	);

	// Home Middle Title Color & Slider Overlays Subtitle Color
	$wp_customize->add_setting(
		'nicoshop_overlays_title_color',
		array(
			'default' => nicoshop_customizer_get_default_overlays_title_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_overlays_title_color',
			array(
				'description' => __( 'Change the default color for the Home Middle Title Color & Slider Overlays Subtitle.', 'tgt-nicoshop' ),
			    'label'    => __( 'Home Middle Title Color & Slider Overlays Subtitle Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_overlays_title_color',
			)
		)
	);

	// Slider Overlay Title Color
	$wp_customize->add_setting(
		'nicoshop_slider_overlay_title_color',
		array(
			'default' => nicoshop_customizer_get_default_slider_overlay_title_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_slider_overlay_title_color',
			array(
				'description' => __( 'Change the default color for the Slider Overlay Title.', 'tgt-nicoshop' ),
			    'label'    => __( 'Slider Overlay Title Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_slider_overlay_title_color',
			)
		)
	);

	// Sidebar Background
	$wp_customize->add_setting(
		'nicoshop_sidebar_background_color',
		array(
			'default' => nicoshop_customizer_get_default_sidebar_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_sidebar_background_color',
			array(
				'description' => __( 'Change the default color for the Sidebar Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Sidebar Background Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_sidebar_background_color',
			)
		)
	);

	// Sidebar Title Color
	$wp_customize->add_setting(
		'nicoshop_sidebar_title_color',
		array(
			'default' => nicoshop_customizer_get_default_sidebar_title_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_sidebar_title_color',
			array(
				'description' => __( 'Change the default color for the Sidebar Titles.', 'tgt-nicoshop' ),
			    'label'    => __( 'Sidebar Titles Color.', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_sidebar_title_color',
			)
		)
	);

	// Sidebar Text Color
	$wp_customize->add_setting(
		'nicoshop_sidebar_text_color',
		array(
			'default' => nicoshop_customizer_get_default_sidebar_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_sidebar_text_color',
			array(
				'description' => __( 'Change the default color for body texts in the Sidebar.', 'tgt-nicoshop' ),
			    'label'    => __( 'Sidebar Text Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_sidebar_text_color',
			)
		)
	);

	// Sidebar Link Color
	$wp_customize->add_setting(
		'nicoshop_sidebar_link_color',
		array(
			'default' => nicoshop_customizer_get_default_sidebar_link_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_sidebar_link_color',
			array(
				'description' => __( 'Change the default secondary color for your links in the Sidebar.', 'tgt-nicoshop' ),
			    'label'    => __( 'Sidebar Link Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_sidebar_link_color',
			)
		)
	);

	// WooCommerce Price
	$wp_customize->add_setting(
		'nicoshop_woo_price_color',
		array(
			'default' => nicoshop_customizer_get_default_woo_price_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_woo_price_color',
			array(
				'description' => __( 'Change the default color for your Shop Prices.', 'tgt-nicoshop' ),
			    'label'    => __( 'Shop Prices Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_woo_price_color',
			)
		)
	);

	// Share Buttons Background
	$wp_customize->add_setting(
		'nicoshop_share_background_color',
		array(
			'default' => nicoshop_customizer_get_default_share_background_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_share_background_color',
			array(
				'description' => __( 'Change the default color for the Share Buttons Background.', 'tgt-nicoshop' ),
			    'label'    => __( 'Share Buttons Background Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_share_background_color',
			)
		)
	);

	// Share Buttons Text
	$wp_customize->add_setting(
		'nicoshop_share_text_color',
		array(
			'default' => nicoshop_customizer_get_default_share_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_share_text_color',
			array(
				'description' => __( 'Change the default color for the Share Buttons Text.', 'tgt-nicoshop' ),
			    'label'    => __( 'Share Buttons Text Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_share_text_color',
			)
		)
	);

	// Input & Text Area Colors
	$wp_customize->add_setting(
		'nicoshop_input_color',
		array(
			'default' => nicoshop_customizer_get_default_input_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_input_color',
			array(
				'description' => __( 'Change the default color for the Input & Text Area.', 'tgt-nicoshop' ),
			    'label'    => __( 'Input & Text Area Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_input_color',
			)
		)
	);

	// Input & Text Area Text Colors
	$wp_customize->add_setting(
		'nicoshop_input_text_color',
		array(
			'default' => nicoshop_customizer_get_default_input_text_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_input_text_color',
			array(
				'description' => __( 'Change the default color for the Input & Text Area Texts.', 'tgt-nicoshop' ),
			    'label'    => __( 'Input & Text Area Text Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_input_text_color',
			)
		)
	);

	// Borders Color
	$wp_customize->add_setting(
		'nicoshop_borders_color',
		array(
			'default' => nicoshop_customizer_get_default_borders_color(),
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'nicoshop_borders_color',
			array(
				'description' => __( 'Change the default color for the Borders.', 'tgt-nicoshop' ),
			    'label'    => __( 'Borders Color', 'tgt-nicoshop' ),
			    'section'  => 'colors',
			    'settings' => 'nicoshop_borders_color',
			)
		)
	);


//////////////////////////////////////////
}

add_action( 'wp_enqueue_scripts', 'nicoshop_css' );
/**
* Checks the settings for the secondary color, highlight color, and header
* If any of these value are set the appropriate CSS is output
*
* @since 1.0.0
*/
function nicoshop_css() {

	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';

	$text_color = get_theme_mod( 'nicoshop_text_color', nicoshop_customizer_get_default_text_color() );
	$link_color = get_theme_mod( 'nicoshop_link_color', nicoshop_customizer_get_default_link_color() );
	$titles_color = get_theme_mod( 'nicoshop_titles_color', nicoshop_customizer_get_default_titles_color() );
	$entry_background_color = get_theme_mod( 'nicoshop_entry_background_color', nicoshop_customizer_get_default_entry_background_color() );
	$buttons_background_color = get_theme_mod( 'nicoshop_buttons_background_color', nicoshop_customizer_get_default_buttons_background_color() );
	$buttons_border_color = get_theme_mod( 'nicoshop_buttons_border_color', nicoshop_customizer_get_default_buttons_border_color() );
	$buttons_text_color = get_theme_mod( 'nicoshop_buttons_text_color', nicoshop_customizer_get_default_buttons_text_color() );
	$buttons_background_color_hover = get_theme_mod( 'nicoshop_buttons_background_color_hover', nicoshop_customizer_get_default_buttons_background_color_hover() );
	$buttons_border_color_hover = get_theme_mod( 'nicoshop_buttons_border_color_hover', nicoshop_customizer_get_default_buttons_border_color_hover() );
	$buttons_text_color_hover = get_theme_mod( 'nicoshop_buttons_text_color_hover', nicoshop_customizer_get_default_buttons_text_color_hover() );
	$navprimary_background_color = get_theme_mod( 'nicoshop_navprimary_background_color', nicoshop_customizer_get_default_navprimary_background_color() );
	$navprimary_text_color = get_theme_mod( 'nicoshop_navprimary_text_color', nicoshop_customizer_get_default_navprimary_text_color() );
	$navprimary_text_color_hover = get_theme_mod( 'nicoshop_navprimary_text_color_hover', nicoshop_customizer_get_default_navprimary_text_color_hover() );
	$header_background_color = get_theme_mod( 'nicoshop_header_background_color', nicoshop_customizer_get_default_header_background_color() );
	$navsecondary_text_color = get_theme_mod( 'nicoshop_navsecondary_text_color', nicoshop_customizer_get_default_navsecondary_text_color() );
	$navsecondary_text_color_hover = get_theme_mod( 'nicoshop_navsecondary_text_color_hover', nicoshop_customizer_get_default_navsecondary_text_color_hover() );
	$navfooter_background_color = get_theme_mod( 'nicoshop_navfooter_background_color', nicoshop_customizer_get_default_navfooter_background_color() );
	$navfooter_text_color = get_theme_mod( 'nicoshop_navfooter_text_color', nicoshop_customizer_get_default_navfooter_text_color() );
	$navfooter_text_color_hover = get_theme_mod( 'nicoshop_navfooter_text_color_hover', nicoshop_customizer_get_default_navfooter_text_color_hover() );
	$footer_widgets_background_color = get_theme_mod( 'nicoshop_footer_widgets_background_color', nicoshop_customizer_get_default_footer_widgets_background_color() );
	$footer_widgets_title_color = get_theme_mod( 'nicoshop_footer_widgets_title_color', nicoshop_customizer_get_default_footer_widgets_title_color() );
	$footer_widgets_text_color = get_theme_mod( 'nicoshop_footer_widgets_text_color', nicoshop_customizer_get_default_footer_widgets_text_color() );
	$enews_background_color = get_theme_mod( 'nicoshop_enews_background_color', nicoshop_customizer_get_default_enews_background_color() );
	$enews_background_color_hover = get_theme_mod( 'nicoshop_enews_background_color_hover', nicoshop_customizer_get_default_enews_background_color_hover() );
	$enews_text_color = get_theme_mod( 'nicoshop_enews_text_color', nicoshop_customizer_get_default_enews_text_color() );
	$enews_text_color_hover = get_theme_mod( 'nicoshop_enews_text_color_hover', nicoshop_customizer_get_default_enews_text_color_hover() );
	$homemiddle_background_color = get_theme_mod( 'nicoshop_homemiddle_background_color', nicoshop_customizer_get_default_enews_text_color_hover() );
	$homemiddle_text_color = get_theme_mod( 'nicoshop_homemiddle_text_color', nicoshop_customizer_get_default_enews_text_color_hover() );
	$overlays_background_color = get_theme_mod( 'nicoshop_overlays_background_color', nicoshop_customizer_get_default_overlays_background_color() );
	$overlays_title_color = get_theme_mod( 'nicoshop_overlays_title_color', nicoshop_customizer_get_default_overlays_title_color() );
	$slider_overlay_title_color = get_theme_mod( 'nicoshop_slider_overlay_title_color', nicoshop_customizer_get_default_slider_overlay_title_color() );
	$sidebar_background_color = get_theme_mod( 'nicoshop_sidebar_background_color', nicoshop_customizer_get_default_sidebar_background_color() );
	$sidebar_title_color = get_theme_mod( 'nicoshop_sidebar_title_color', nicoshop_customizer_get_default_sidebar_title_color() );
	$sidebar_text_color = get_theme_mod( 'nicoshop_sidebar_text_color', nicoshop_customizer_get_default_sidebar_text_color() );
	$sidebar_link_color = get_theme_mod( 'nicoshop_sidebar_link_color', nicoshop_customizer_get_default_sidebar_link_color() );
	$woo_price_color = get_theme_mod( 'nicoshop_woo_price_color', nicoshop_customizer_get_default_woo_price_color() );
	$share_background_color = get_theme_mod( 'nicoshop_share_background_color', nicoshop_customizer_get_default_share_background_color() );
	$share_text_color = get_theme_mod( 'nicoshop_share_text_color', nicoshop_customizer_get_default_share_text_color() );
	$input_color = get_theme_mod( 'nicoshop_input_color', nicoshop_customizer_get_default_input_color() );
	$input_text_color = get_theme_mod( 'nicoshop_input_text_color', nicoshop_customizer_get_default_input_text_color() );
	$borders_color = get_theme_mod( 'nicoshop_borders_color', nicoshop_customizer_get_default_borders_color() );

////////////////////////////////

	$css = '';

	// Text Color
	$css .= ( nicoshop_customizer_get_default_text_color() !== $text_color ) ? sprintf( '

		body	{
			color: %1$s;
		}


		', $text_color ) : '';

	// Link Color
	$css .= ( nicoshop_customizer_get_default_link_color() !== $link_color ) ? sprintf( '

		a {
			color: %1$s;
		}

		', $link_color ) : '';

	// Titles Color
	$css .= ( nicoshop_customizer_get_default_titles_color() !== $titles_color ) ? sprintf( '

		h1, h2, h3, h4, h5, h6,
		.entry-title a,
		.entry-header .entry-meta {
			color: %1$s;
		}

		.widget-title {
			border-color: %1$s;
		}

		', $titles_color ) : '';

	// Entry Content Background Color
	$css .= ( nicoshop_customizer_get_default_entry_background_color() !== $entry_background_color ) ? sprintf( '

		.entry,
		.author-box,
		.single .author-box,
		.adjacent-entry-pagination,
		.entry-comments,
		.entry-pings,
		.comment-respond,
		.archive-description,
		.pagination,
		.woocommerce .content,
		.home-store-products,
		.home-featblog {
			background-color: %1$s;
		}

		', $entry_background_color ) : '';

	// Buttons Background Color
	$css .= ( nicoshop_customizer_get_default_buttons_background_color() !== $buttons_background_color ) ? sprintf( '

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.button,
		.archive-pagination li a {

			background-color: %1$s;
		}

		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.more-products .button:hover {

			background-color: %1$s !important;
		}

		', $buttons_background_color ) : '';

	// Buttons Border Color
	$css .= ( nicoshop_customizer_get_default_buttons_border_color() !== $buttons_border_color ) ? sprintf( '

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.button,
		.archive-pagination li a {

			border-color: %1$s;
		}

		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.more-products .button:hover {

			border-color: %1$s !important;
		}

		', $buttons_border_color ) : '';

	// Buttons Text Color
	$css .= ( nicoshop_customizer_get_default_buttons_text_color() !== $buttons_text_color ) ? sprintf( '

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.button,
		.archive-pagination li a {

			color: %1$s;
		}

		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button,
		.more-products .button:hover {

			color: %1$s !important;
		}

		', $buttons_text_color ) : '';

	// Buttons Background Color on Hover
	$css .= ( nicoshop_customizer_get_default_buttons_background_color_hover() !== $buttons_background_color_hover ) ? sprintf( '

		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		.button:hover,
		.archive-pagination li a:hover,
		.archive-pagination .active a {

			background-color: %1$s;
		}

		.woocommerce #respond input#submit:hover,
		.woocommerce a.button:hover,
		.woocommerce button.button:hover,
		.woocommerce input.button:hover,
		.more-products .button {

			background-color: %1$s !important;
		}

		', $buttons_background_color_hover ) : '';

	// Buttons Border Color on Hover
	$css .= ( nicoshop_customizer_get_default_buttons_border_color_hover() !== $buttons_border_color_hover) ? sprintf( '

		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		.button:hover,
		.archive-pagination li a:hover,
		.archive-pagination .active a {

			border-color: %1$s;
		}

		.woocommerce #respond input#submit:hover,
		.woocommerce a.button:hover,
		.woocommerce button.button:hover,
		.woocommerce input.button:hover,
		.more-products .button {

			border-color: %1$s !important;
		}

		', $buttons_border_color_hover ) : '';

	// Buttons Text Color on Hover
	$css .= ( nicoshop_customizer_get_default_buttons_text_color_hover() !== $buttons_text_color_hover ) ? sprintf( '

		button:hover,
		input[type="button"]:hover,
		input[type="reset"]:hover,
		input[type="submit"]:hover,
		.button:hover,
		.archive-pagination li a:hover,
		.archive-pagination .active a {

			color: %1$s;
		}

		.woocommerce #respond input#submit:hover,
		.woocommerce a.button:hover,
		.woocommerce button.button:hover,
		.woocommerce input.button:hover,
		.more-products .button {

			color: %1$s !important;
		}

		', $buttons_text_color_hover ) : '';

	// Primary Navigation Background Color
	$css .= ( nicoshop_customizer_get_default_navprimary_background_color() !== $navprimary_background_color ) ? sprintf( '

		.nav-primary,
		.nav-primary .genesis-nav-menu a,
		.genesis-nav-menu .sub-menu,
		.home-blog,
		.home-featblog-left .entry .entry-header,
		.home-featblog-left .entry .entry-header:hover,
		.to-top,
		.woocommerce span.onsale,
		.woocommerce-page span.onsale,
		.content div#jp-relatedposts div.jp-relatedposts-items-visual h4.jp-relatedposts-post-title {

			background-color: %1$s;
		}

		.genesis-nav-menu .simple-social-icons ul li a,
		.genesis-nav-menu .simple-social-icons ul li a:hover {

			background-color: %1$s !important;
		}

		.home-featblog-right .entry {
			border-color: %1$s;
		}


		', $navprimary_background_color ) : '';

	// Primary Navigation Text Color
	$css .= ( nicoshop_customizer_get_default_navprimary_text_color() !== $navprimary_text_color ) ? sprintf( '

		.nav-primary .genesis-nav-menu a,
		.cart-contents-count,
		.cart-contents::before,
		.genesis-nav-menu .sub-menu a,
		.home-blog,
		.home-featblog-left .entry-title a,
		.home-featblog-left .entry-title a:hover,
		.home-featblog-left .entry-header .entry-meta,
		.home-featblog-left .entry-header .entry-meta:hover,
		.woocommerce span.onsale,
		.woocommerce-page span.onsale,
		div#jp-relatedposts div.jp-relatedposts-items .jp-relatedposts-post .jp-relatedposts-post-title a {

			color: %1$s;
		}

		.genesis-nav-menu .simple-social-icons ul li a {

		    color: %1$s !important;
		}

		', $navprimary_text_color ) : '';

	// Primary Navigation Text Color on Hover
	$css .= ( nicoshop_customizer_get_default_navprimary_text_color_hover() !== $navprimary_text_color_hover ) ? sprintf( '


		.nav-primary .genesis-nav-menu a:hover, .nav-primary .genesis-nav-menu .current-menu-item > a,
		.genesis-nav-menu .sub-menu a:hover, .genesis-nav-menu .sub-menu .current-menu-item > a:hover {

		    color: %1$s;

		}

		.genesis-nav-menu .simple-social-icons ul li a:hover {

		    color: %1$s !important;
		}

		', $navprimary_text_color_hover ) : '';


	// Header Background Color
	$css .= ( nicoshop_customizer_get_default_header_background_color() !== $header_background_color ) ? sprintf( '

		.site-header {
    		background-color: %1$s;
		}

		', $header_background_color ) : '';

	// Secondary Navigation Text Color
	$css .= ( nicoshop_customizer_get_default_navsecondary_text_color() !== $navsecondary_text_color ) ? sprintf( '

		.title-area,
		.site-title a,
		.site-title a:hover,
		.genesis-nav-menu a {

		    color: %1$s;
		}

		', $navsecondary_text_color ) : '';

	// Secondary Navigation Text Color on Hover
	$css .= ( nicoshop_customizer_get_default_navsecondary_text_color_hover() !== $navsecondary_text_color_hover ) ? sprintf( '

		.genesis-nav-menu a:hover,
		.genesis-nav-menu .current-menu-item > a {

		    color: %1$s;
		}

		', $navsecondary_text_color_hover ) : '';

	// Footer Navigation Background Color
	$css .= ( nicoshop_customizer_get_default_navfooter_background_color() !== $navfooter_background_color ) ? sprintf( '

		.footer-menu {

			background: %1$s;
		}

		', $navfooter_background_color ) : '';

	// Footer Navigation Text Color
	$css .= ( nicoshop_customizer_get_default_navfooter_text_color() !== $navfooter_text_color ) ? sprintf( '

		.footer-menu > li a {

			color: %1$s;
		}

		', $navfooter_text_color ) : '';

	// Footer Navigation Text Color on Hover
	$css .= ( nicoshop_customizer_get_default_navfooter_text_color_hover() !== $navfooter_text_color_hover ) ? sprintf( '


		.footer-menu > li a:hover {

		    color: %1$s;
		}

		', $navfooter_text_color_hover ) : '';

	// Footer Widgets Background Color
	$css .= ( nicoshop_customizer_get_default_footer_widgets_background_color() !== $footer_widgets_background_color ) ? sprintf( '

		.footer-widgets {

			background-color: %1$s;
		}

		', $footer_widgets_background_color ) : '';

	// Footer Widgets Titles Color
	$css .= ( nicoshop_customizer_get_default_footer_widgets_title_color() !== $footer_widgets_title_color ) ? sprintf( '

		.footer-widgets .widget-title {

			color: %1$s;
			border-color: %1$s;
		}

		', $footer_widgets_title_color ) : '';

	// Footer Widgets Text Color
	$css .= ( nicoshop_customizer_get_default_footer_widgets_text_color() !== $footer_widgets_text_color ) ? sprintf( '


		.footer-widgets, .footer-widgets a,
		.footer-widgets .entry {

		    color: %1$s;
		}

		', $footer_widgets_text_color ) : '';

	// Enews Background Color and Button Background on Hover
	$css .= ( nicoshop_customizer_get_default_enews_background_color() !== $enews_background_color ) ? sprintf( '

		.enews,
		.enews-widget:hover input[type="submit"],
		.horizontal-opt-in {

			background-color: %1$s;
		}

		.enews-widget:hover input[type="submit"] {

			border-color: %1$s;
		}

		', $enews_background_color ) : '';

	// Enews Background Color on Hover and Button Background
	$css .= ( nicoshop_customizer_get_default_enews_background_color_hover() !== $enews_background_color_hover ) ? sprintf( '

		.enews:hover,
		.horizontal-opt-in:hover,
		.enews-widget input[type="submit"] {

			background-color: %1$s;
		}

		.enews-widget input[type="submit"] {

			border-color: %1$s;
		}


		', $enews_background_color_hover ) : '';

	// Enews Text and Button Text on Hover
	$css .= ( nicoshop_customizer_get_default_enews_text_color() !== $enews_text_color ) ? sprintf( '

		.enews-widget,
		.enews-widget .widget-title,
		.enews-widget:hover input[type="submit"],
		.footer-widgets .enews .widgettitle,
		.sidebar .enews .widgettitle {

		    color: %1$s;
		}

		', $enews_text_color ) : '';

	// Enews Text on Hover and Button Text
	$css .= ( nicoshop_customizer_get_default_enews_text_color_hover() !== $enews_text_color_hover ) ? sprintf( '

		.enews-widget:hover,
		.enews-widget .widget-title:hover,
		.enews-widget p:hover,
		.enews-widget input[type="submit"] {

		    color: %1$s;
		}

		', $enews_text_color_hover ) : '';

	// Home Middle Background Color
	$css .= ( nicoshop_customizer_get_default_homemiddle_background_color() !== $homemiddle_background_color ) ? sprintf( '

		.home-middle {

			background: %1$s;
		}

		', $homemiddle_background_color ) : '';

	// Home Middle text Color
	$css .= ( nicoshop_customizer_get_default_homemiddle_text_color() !== $homemiddle_text_color ) ? sprintf( '

		.home-middle,
		.home-middle .widget-title {
			color: %1$s;
			border-color: %1$s;
		}

		', $homemiddle_text_color ) : '';

	// Home Middle & Slider Overlays Background
	$css .= ( nicoshop_customizer_get_default_overlays_background_color() !== $overlays_background_color ) ? sprintf( '

		.home-middle .featured-content .entry-header {

			background: %1$s;
		}

		.slider-overlay .wrap {

			background: %1$s;
    		outline-color: %1$s;
		}

		', $overlays_background_color ) : '';

	// Home Middle Title Color & Slider Overlays Subtitle Color
	$css .= ( nicoshop_customizer_get_default_overlays_title_color() !== $overlays_title_color ) ? sprintf( '

		.home-middle .featured-content .entry-header .entry-title a,
		.home-middle .featured-content .entry-title,
		.slider-overlay .subtitle {

    		color: %1$s;
 		}

 		.slider-overlay .wrap {

 			border-color:  %1$s;
 		}

		', $overlays_title_color ) : '';

	// Slider Overlay Title Color
	$css .= ( nicoshop_customizer_get_default_slider_overlay_title_color() !== $slider_overlay_title_color ) ? sprintf( '

		.slider-overlay .widget-title {

		    color: %1$s;
		}

		', $slider_overlay_title_color ) : '';

	// Sidebar Background
	$css .= ( nicoshop_customizer_get_default_sidebar_background_color() !== $sidebar_background_color ) ? sprintf( '

		.sidebar .widget {

			background-color: %1$s;
		}

		', $sidebar_background_color ) : '';

	// Sidebar Title
	$css .= ( nicoshop_customizer_get_default_sidebar_title_color() !== $sidebar_title_color ) ? sprintf( '

		.sidebar .widget-title,
		.sidebar li {

		    color: %1$s;
		    border-color: %1$s;
		}

		', $sidebar_title_color ) : '';

	// Sidebar Text Color
	$css .= ( nicoshop_customizer_get_default_sidebar_text_color() !== $sidebar_text_color ) ? sprintf( '

		.sidebar body	{
			color: %1$s;
		}


		', $sidebar_text_color ) : '';

	// Sidebar Link Color
	$css .= ( nicoshop_customizer_get_default_sidebar_link_color() !== $sidebar_link_color ) ? sprintf( '

		.sidebar a {
			color: %1$s;
		}

		', $sidebar_link_color ) : '';

	// WooCommerce Price
	$css .= ( nicoshop_customizer_get_default_woo_price_color() !== $woo_price_color ) ? sprintf( '

		.woocommerce #content div.product p.price,
		.woocommerce #content div.product span.price,
		.woocommerce div.product p.price,
		.woocommerce div.product span.price,
		.woocommerce-page #content div.product p.price,
		.woocommerce-page #content div.product span.price,
		.woocommerce-page div.product p.price,
		.woocommerce-page div.product span.price,
		.woocommerce ul.products li.product .price,
		.woocommerce-page ul.products li.product .price {

			color: %1$s;
		}

		', $woo_price_color ) : '';

	// Share Buttons Background
	$css .= ( nicoshop_customizer_get_default_share_background_color() !== $share_background_color ) ? sprintf( '

		.content .share-filled .count {

			color: %1$s;
		}

		.content .share-filled .facebook .count,
		.content .share-filled .facebook .count:hover,
		.content .share-filled .googlePlus .count,
		.content .share-filled .googlePlus .count:hover,
		.content .share-filled .linkedin .count,
		.content .share-filled .linkedin .count:hover,
		.content .share-filled .pinterest .count,
		.content .share-filled .pinterest .count:hover,
		.content .share-filled .stumbleupon .count,
		.content .share-filled .stumbleupon .count:hover,
		.content .share-filled .twitter .count,
		.content .share-filled .twitter .count:hover {

			border-color: %1$s;
		}

		.content .share-filled .facebook .share,
		.content .share-filled .facebook:hover .count,
		.content .share-filled .googlePlus .share,
		.content .share-filled .googlePlus:hover .count,
		.content .share-filled .linkedin .share,
		.content .share-filled .linkedin:hover .count,
		.content .share-filled .pinterest .share,
		.content .share-filled .pinterest:hover .count,
		.content .share-filled .stumbleupon .share,
		.content .share-filled .stumbleupon:hover .count,
		.content .share-filled .twitter .share,
		.content .share-filled .twitter:hover .count {

			background: %1$s !important;
		}


		.sd-social-icon .sd-content ul li a.sd-button:hover,
		.sd-social-icon .sd-content ul li a.sd-button:active,
		.sd-social-text .sd-content ul li a.sd-button:hover,
		.sd-social-text .sd-content ul li a.sd-button:active,
		.sd-social-icon-text .sd-content ul li a.sd-button:hover,
		.sd-social-icon-text .sd-content ul li a.sd-button:active,
		.sd-social-official .sd-content > ul > li > a.sd-button:hover,
		.sd-social-official .sd-content > ul > li > a.sd-button:active,
		.sd-social-official .sd-content > ul > li .digg_button > a:hover,
		.sd-social-official .sd-content > ul > li .digg_button > a:active {

		    background: %1$s !important;
		    border-color: %1$s !important;
    	}

		', $share_background_color ) : '';

	// Share Buttons Text
	$css .= ( nicoshop_customizer_get_default_share_text_color() !== $share_text_color ) ? sprintf( '

		.content .share-filled .facebook:hover .count,
		.content .share-filled .googlePlus:hover .count,
		.content .share-filled .linkedin:hover .count,
		.content .share-filled .pinterest:hover .count,
		.content .share-filled .stumbleupon:hover .count,
		.content .share-filled .twitter:hover .count {

			color: %1$s;
		}


		.sd-social-icon .sd-content ul li a.sd-button:hover,
		.sd-social-icon .sd-content ul li a.sd-button:active,
		.sd-social-text .sd-content ul li a.sd-button:hover,
		.sd-social-text .sd-content ul li a.sd-button:active,
		.sd-social-icon-text .sd-content ul li a.sd-button:hover,
		.sd-social-icon-text .sd-content ul li a.sd-button:active,
		.sd-social-official .sd-content > ul > li > a.sd-button:hover,
		.sd-social-official .sd-content > ul > li > a.sd-button:active,
		.sd-social-official .sd-content > ul > li .digg_button > a:hover,
		.sd-social-official .sd-content > ul > li .digg_button > a:active {

		    color: %1$s !important;
    	}

		.sd-social-icon .sd-content ul li a.sd-button,
		.sd-social-text .sd-content ul li a.sd-button,
		.sd-content ul li a.sd-button,
		.sd-content ul li .option a.share-ustom,
		.sd-content ul li.preview-item div.option.option-smart-off a,
		.sd-content ul li.advanced a.share-more,
		.sd-social-icon-text .sd-content ul li a.sd-button,
		.sd-social-official .sd-content > ul > li > a.sd-button,
		#sharing_email .sharing_send,
		.sd-social-official .sd-content > ul > li .digg_button > a {

		    font-color: %1$s !important;
    		border-color: %1$s !important;
		}


		', $share_text_color ) : '';

	// Input & Text Area Colors
	$css .= ( nicoshop_customizer_get_default_input_color() !== $input_color ) ? sprintf( '

		input, select, textarea {

			background-color: %1$s;
		}

		.genesis-nav-menu .search-form input[type="search"] {

			background-color: %1$s;
		}

		', $input_color ) : '';

	// Input & Text Area Text Colors
	$css .= ( nicoshop_customizer_get_default_input_text_color() !== $input_text_color ) ? sprintf( '

		input, select, textarea,
		.genesis-nav-menu .search-form input[type="search"] {

			color: %1$s;
		}

		::-moz-placeholder {

			color: %1$s;
		}

		::-webkit-input-placeholder {

			color: %1$s;
		}

		', $input_text_color ) : '';

	// Borders Color
	$css .= ( nicoshop_customizer_get_default_borders_color() !== $borders_color ) ? sprintf( '

		input,
		select,
		textarea,
		.content .share-after,
		.sd-content,
		.entry-footer .entry-meta,
		.sidebar td,
		.featured-content .entry,
		.entry-comments .comment,
		.footer-widgets li,
		.woocommerce div.product .woocommerce-tabs ul.tabs::before,
		.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
		#add_payment_method .cart-collaterals .cart_totals tr td, #add_payment_method .cart-collaterals .cart_totals tr th, .woocommerce-cart .cart-collaterals .cart_totals tr td, .woocommerce-cart .cart-collaterals .cart_totals tr th, .woocommerce-checkout .cart-collaterals .cart_totals tr td, .woocommerce-checkout .cart-collaterals .cart_totals tr th,
		.woocommerce table.shop_table td,
		.woocommerce table.shop_table,
		.woocommerce table.shop_table tbody th, .woocommerce table.shop_table tfoot td, .woocommerce table.shop_table tfoot th {

			border-color: %1$s;
		}

		', $borders_color ) : '';

/////////////////////////////////////////////////////////
	if ( nicoshop_customizer_get_default_text_color() !== $link_color || nicoshop_customizer_get_default_link_color() !== $color_highlight ) {
		$css .= '
		}
		';
	}

	if( $css ){
		wp_add_inline_style( $handle, $css );
	}

}

/* Custom Logo in Customizer */
/**
 * Apply Actions to Replace Logo
 *
 * Set's the required actions to replace the current logo IF the theme settings are set to 'image' AND
 * the theme mod exists.
 *
 * @since 1.0.0
 * @uses genesis_get_option() Get theme setting value.
 * @uses get_theme_mod() Retrieves a modification setting for the current theme.
 *
 */
add_action('genesis_before', 'nicoshop_do_logo');
function nicoshop_do_logo() {
	if ( genesis_get_option('blog_title') == 'image' && get_theme_mod( 'nicoshop_logo' ) ) {
		remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
		add_action( 'genesis_site_title', 'nicoshop_replace_logo' );
	}
}

/**
 * Replaces Site Logo
 *
 * Applies the uploaded image to the genesis_site_title hook.
 *
 * @since 1.0.1
 * @uses genesis_get_option() Get theme setting value.
 * @uses get_theme_mod() Retrieves a modification setting for the current theme.
 *
 */
function nicoshop_replace_logo() {
	$nicoshop_get_logo = get_theme_mod( 'nicoshop_logo' );
 	if ( genesis_get_option('blog_title') == 'image' && get_theme_mod( 'nicoshop_logo' ) )
 		echo '<div class="site-logo"><a href="' . site_url() . '"><img src="' . $nicoshop_get_logo .'"></a></div>';
}

/**
 * Adds the uploader.
 *
 * Adds the logo uploader to the theme customization screen.
 *
 * @since 1.0.0
 */
function nicoshop_logo_uploader( $wp_customize ) {

    if ( current_theme_supports( 'custom-header' ) ) {
		return;
	}

    // Add the section to the theme customizer in WP
    $wp_customize->add_section( 'nicoshop_logo_section' , array(
	    'title'       => __( 'Upload Logo', 'tgt-nicoshop' ),
	    'priority'    => 30,
	    'description' => __( 'Upload your logo to the header of the site. Recommeded size is 320 x 66 px.', 'tgt-nicoshop' ),
	) );

	// Register the new setting
	$wp_customize->add_setting( 'nicoshop_logo' );

	// Tell WP to use an image uploader using WP_Customize_Image_Control
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nicoshop_logo', array(
	    'label'    => __( 'Logo', 'tgt-nicoshop' ),
	    'section'  => 'nicoshop_logo_section',
	    'settings' => 'nicoshop_logo',
	) ) );

}
add_action('customize_register', 'nicoshop_logo_uploader');
