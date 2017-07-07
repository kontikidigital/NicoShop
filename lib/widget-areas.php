<?php
/**
 * Register widget areas
 *
 * @package      NicoShop
 * @author       Max Terbeck
 * @link         http://www.targetimc.com/
 * @copyright    Copyright (c) 2015, Max Terbeck
 * @license      GPL-3.0+
 * @version      1.0.0
 */

/* Front Page
---------------------------------------------------------------------------------------------------- */
/* Register Widget Areas
--------------------------------------------- */
genesis_register_sidebar( array(
	'id'          => 'slider',
	'name'        => __( 'Home - Slider', 'tgt-nicoshop'),
	'description' => __( 'This is the Slider section of the Home page.', 'tgt-nicoshop' ),
) );

genesis_register_sidebar( array(
	'id'          => 'slider-overlay',
	'name'        => __( 'Home - Slider Overlay', 'tgt-nicoshop'),
	'description' => __( 'This is the Slider Overlay section of the Home page.', 'tgt-nicoshop' ),
) );

/* Horizontal Opt-in Widget
 --------------------------------------------- */
genesis_register_sidebar( 
    array(
        'id'            => 'horizontal-opt-in',
        'name'          => __( 'Horizontal Opt-In', 'tgt-nicoshop' ),
        'description'   => __( 'This is the widget area for horizontal opt-in form.', 'tgt-nicoshop' ),
) );

/* Home Middle Widget Area - Flexible Widgets
----------------------------------------------*/
genesis_register_sidebar( 
    array(
        'id'            => 'home-middle',
        'name'          => __( 'Home Middle Flexible Widgets', 'tgt-nicoshop' ),
        'description'   => __( 'This is the widget area for Home Middle Flexible Widgets.', 'tgt-nicoshop' ),
) );

/* Register Left and Right Home Featured widget areas
--------------------------------------------- */
genesis_register_sidebar( array(
	'id'			=> 'home-featblog-left',
	'name'			=> 'Home Featured Blog Left',
	'description'	=> 'This is the Home Featured Blog section'
) );
 
genesis_register_sidebar( array(
	'id'			=> 'home-featblog-right',
	'name'			=> 'Home Featured Blog Right',
	'description'	=> 'This is the Home Featured Blog Right section'
) );

/* Nav Social Menu
---------------------------------------------------------------------------------------------------- */
genesis_register_sidebar( array(
	'id'          => 'nav-social-menu',
	'name'        => __( 'Nav Social Menu', 'tgt-nicoshop' ),
	'description' => __( 'This is the nav social menu section.', 'tgt-nicoshop' ),
) );