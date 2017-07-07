<?php

/**
 * Front page template
 *
 * @package      NicoShop
 * @author       Max Terbeck
 * @link         http://www.targetimc.com/
 * @copyright    Copyright (c) 2015, Max Terbeck
 * @license      GPL-3.0+
 * @version      1.0.0
 */

add_action( 'genesis_meta', 'nicoshop_home_page_setup' );
/**
 * Set up the homepage layout by conditionally loading sections when widgets
 * are active.
 *
 * @since 1.0.0
 */
function nicoshop_home_page_setup() {

	$home_sidebars = array(
		'slider' 	   			=> is_active_sidebar( 'slider' ),
		'horizontal-opt-in'   	=> is_active_sidebar( 'horizontal-opt-in' ),
		'home-featblog-left'	=> is_active_sidebar( 'home-featblog-left' ),
		'home-featblog-right'	=> is_active_sidebar( 'home-featblog-right' ),
	);

	// Return early if no sidebars are active.
	if ( ! in_array( true, $home_sidebars ) ) {
		return;
	}

	// Force full-width-content layout setting.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	// Remove Breadcrumbs.
	remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs');

	// Remove the default Genesis Loop.
	remove_action( 'genesis_loop', 'genesis_do_loop' );

	// Add Slider Before Content
	add_action( 'genesis_after_header', 'slider_before_content');

	// Add Homepage Widgets.
	add_action( 'genesis_loop', 'nicoshop_home_page_widgets');

}

function slider_before_content() {
 	genesis_widget_area( 'slider', array(
		'before' => '<div class="slider-container"><div class="slider"><div class="wrap">',
		'after'  => '</div></div>',
	) );
 	genesis_widget_area( 'slider-overlay', array(
		'before' => '<div class="slider-overlay"><div class="wrap">',
		'after'  => '</div></div></div>',
	) );


}


function nicoshop_home_page_widgets() {

	// Horizontal Opt-in widget area
	genesis_widget_area( 'horizontal-opt-in', array(
		'before'	=> '<div class="cta-wrap"><div class="horizontal-opt-in widget-area"><div class="wrap">',
		'after'		=> '</div></div></div>',
	) );

	// Home Middle section - Flexible Widgets
	genesis_widget_area( 'home-middle', array(
		'before' => '<div class="home-middle flexible-widgets widget-area'. tgt_nicoshop_widget_area_class( 'home-middle' ) .'"><div class="wrap">',
		'after'  => '</div></div>',
	) );

	// Home Featured section - WooCommerce Products
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		echo '<div class="home-store-products"><div class="wrap">';
		echo do_shortcode( '[featured_products per_page="12" columns="4" orderby="date" order="desc"]' );
		echo '<div class="more-products">';
		echo '<a class="button" href="' . get_permalink( woocommerce_get_page_id( 'shop' ) ) . '">' . __( 'More Products', 'tgt-nicoshop' ) . '</a>';
		echo '</div></div>';
	}

	// Blog Section

	genesis_widget_area( 'home-featblog-left', array(
		'before'	=> '<div class="blog-wrap"><div class="home-blog">' . __( 'In our Blog', 'tgt-nicoshop' ) . '</div></div>'
						. '<div class="home-featblog"><div class="wrap"><div class="home-featblog-left widget-area one-half first">',
		'after'		=> '</div>',
	) );

	genesis_widget_area( 'home-featblog-right', array(
		'before'	=> '<div class="home-featblog-right widget-area one-half">',
		'after'		=> '</div></div></div>',
	) );

}
genesis();
