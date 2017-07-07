<?php
/**
 * Theme customizations
 *
 * @package      NicoShop
 * @author       Max Terbeck
 * @link         http://www.targetimc.com/
 * @copyright    Copyright (c) 2015, Max Terbeck
 * @license      GPL-3.0+
 * @version      1.0.0
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'tgt-nicoshop', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'tgt-nicoshop') );

/* Start the engine
--------------------------------------------- */
include_once( get_template_directory() . '/lib/init.php' );

/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */

	// Define theme constants.
	define( 'CHILD_THEME_NAME', 'NicoShop' );
	define( 'CHILD_THEME_URL', 'https://github.com/targetimc/nicoshop' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );

	// Reposition enqueue of css file
 	remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
 	add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet');

	// Add HTML5 markup structure.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// Add viewport meta tag for mobile browsers.
	add_theme_support( 'genesis-responsive-viewport' );

	// Add theme support for accessibility.
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );

	// Add theme support for custom background.
	add_theme_support( 'custom-background' );

	// Add theme support for footer widgets.
	add_theme_support( 'genesis-footer-widgets', 3 );

	// add theme support for a tertiary navigation menu
	add_theme_support ( 'genesis-menus' , array (
	'primary' 	=> 'Primary Navigation Menu' ,
	'secondary' => 'Secondary Navigation Menu' ,
	'footer' 	=> 'Footer Navigation Menu'
	) );

	// Add theme support for after entry widget
	add_theme_support( 'genesis-after-entry-widget-area' );

	// Add theme support for WooCommerce
	add_theme_support( 'genesis-connect-woocommerce' );


	// Unregister layouts that use secondary sidebar.
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );

	// Unregister secondary sidebar.
	unregister_sidebar( 'sidebar-alt' );

	// Unregister header right widget area
	unregister_sidebar( 'header-right' );

	// Add theme widget areas.
 	include_once( get_stylesheet_directory() . '/lib/widget-areas.php' );

/* Add Color Selection to WordPress Theme Customizer
---------------------------------------------------- */
require_once( get_stylesheet_directory() . '/lib/customizer.php' );

/* Enqueue Scripts and Styles
--------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'nicoshop_enqueue_scripts' );
function nicoshop_enqueue_scripts() {

	wp_enqueue_style( 'dashicons' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Merriweather:400,700|Source+Sans+Pro:400,700' );

	//Enqueue Responsive Menu
	wp_enqueue_script( 'nicoshop-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );
	//Enqueue To Top Button
	wp_enqueue_script( 'nicoshop-to-top', get_stylesheet_directory_uri() . '/js/to-top.js', array( 'jquery' ), '1.0.0', true );
	//Enqueue Equal Heighs
	wp_enqueue_script( 'equalheights', get_stylesheet_directory_uri() . '/js/jquery.equalheights.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'equalheights-init',  get_stylesheet_directory_uri() . '/js/equalheights-init.js', array( 'equalheights' ), '1.0.0', true );
}

/* Image Sizes
--------------------------------------------- */
//* Add Front Page Blog Section new image sizes
 add_image_size( 'home-featblog-left', 585, 292, true );
 add_image_size( 'home-featblog-right', 150, 75, true );
// add_image_size( 'singular', 840, 420, TRUE ); //singular post image size


/* Remove comment form allowed tags
--------------------------------------------- */
add_filter( 'comment_form_defaults', 'tgt_basic_remove_comment_form_allowed_tags' );
function tgt_basic_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	return $defaults;

}

/* Remove Archive Titles
--------------------------------------------- */
//Removes Title and Description on CPT Archive
remove_action( 'genesis_before_loop', 'genesis_do_cpt_archive_title_description' );
//Removes Title and Description on Blog Archive
remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );
//Removes Title and Description on Date Archive
remove_action( 'genesis_before_loop', 'genesis_do_date_archive_title' );
//Removes Title and Description on Archive, Taxonomy, Category, Tag
remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );
//Removes Title and Description on Author Archive
remove_action( 'genesis_before_loop', 'genesis_do_author_title_description', 15 );
//Removes Title and Description on Blog Template Page
remove_action( 'genesis_before_loop', 'genesis_do_blog_template_heading' );

/* Flexible Widgets
--------------------------------------------- */
//* Setup widget counts
function tgt_nicoshop_count_widgets( $id ) {
	global $sidebars_widgets;

	if ( isset( $sidebars_widgets[ $id ] ) ) {
		return count( $sidebars_widgets[ $id ] );
	}

}

function tgt_nicoshop_widget_area_class( $id ) {
	$count = tgt_nicoshop_count_widgets( $id );

	$class = '';

	if( $count == 1 ) {
		$class .= ' widget-full';
	} elseif( $count % 3 == 1 ) {
		$class .= ' widget-thirds';
	} elseif( $count % 4 == 1 ) {
		$class .= ' widget-fourths';
	} elseif( $count % 2 == 0 ) {
		$class .= ' widget-halves uneven';
	} else {
		$class .= ' widget-halves';
	}
	return $class;

}

/* Navigation Top
---------------------------------------------------------------------------------------------------- */
//Reposition Primary Navigation on Top of Header

remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );

// Reposition Secondary Menu

remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_subnav', 12 );

/* Nav Social Menu */
add_filter( 'genesis_nav_items', 'tgt_social_icons', 10, 2 );
add_filter( 'wp_nav_menu_items', 'tgt_social_icons', 10, 2 );

function tgt_social_icons($menu, $args) {
	$args = (array)$args;
	if ( 'primary' !== $args['theme_location'] )
		return $menu;
	ob_start();
	genesis_widget_area('nav-social-menu');
	$social = ob_get_clean();
	return $social . $menu;
}

//Search Box in Primary Menu

add_filter( 'genesis_nav_items', 'tgt_top_menu_custom', 10, 2 );
add_filter( 'wp_nav_menu_items', 'tgt_top_menu_custom', 10, 2 );

function tgt_top_menu_custom($menu, $args) {
	$args = (array)$args;

	if ( 'primary' !== $args['theme_location'] ){
		return $menu;
        }

	ob_start();
	get_search_form();
	$search = ob_get_clean();
	$menu .= '<div class="search-menu"><li class="right search">' . $search . '</li></div>';

	return $menu;

	}

/**
 * Add Cart icon and count to header if WC is active
 */
function my_wc_cart_count() {

    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

        $count = WC()->cart->cart_contents_count;
        $cart_total = WC()->cart->get_cart_total();
        ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
        if ( $count > 0 ) {
            ?>
            <span class="cart-contents-count"><?php echo esc_html( $count ) . "-" . $cart_total; ?></span>
            <?php
        }
                ?></a><?php
    }

}

add_action( 'genesis_header_right', 'my_wc_cart_count' );

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {

    ob_start();
    $count = WC()->cart->cart_contents_count;
    $cart_total = WC()->cart->get_cart_total();
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'tgt-nicoshop' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ) . "-" . $cart_total; ?></span>
        <?php
    }
        ?></a><?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

/* Footer Menu
------------------------------------------------------------------ */
// display the Footer Navigation
add_action('genesis_before_footer', 'tgt_footer_menu',11);
function tgt_footer_menu()
{

    wp_nav_menu(array(
     'sort_column' => 'menu_order',
     'container_id' => 'footer' ,
     'menu_class' => 'menu genesis-nav-menu footer-menu js-superfish sf-js-enabled sf-arrows',
     'theme_location' => 'footer',
     'depth' => 1,
     'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>'
      ) );

}

/* Back To Top Buttom
--------------------------------------------- */
//* Add To Top button
add_action( 'genesis_before', 'genesis_to_top');
	function genesis_to_top() {
	 echo '<a href="#0" class="to-top" title=' . __('Back&nbsp;To&nbsp;Top', 'tgt-nicoshop'),'></a>';
	}

/* Posts
---------------------------------------------------------------------------------------------------- */
/* Customize Post Featured Images
--------------------------------------------- */
//* Code to Display Featured Image on top of the post in single post
add_action( 'genesis_entry_header', 'featured_page_image', 12 );
function featured_page_image() {
//*if ( !is_singular() || !has_post_thumbnail() ) {//muestra imagen destacada en posts y pages
if ( ! is_singular( 'post' ) ) {//muestra imagen destacada solo en posts
return;
}
echo '<div class="singular-thumbnail">';
genesis_image( array( 'size' => 'large' ) );
echo '</div>';
}
/*Position Image on top of Post title in Blog archive*/
/*add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 ); */

/* Customize the post info function
--------------------------------------------- */

add_filter( 'genesis_post_info', 'post_info_filter' );
function post_info_filter( $post_info ) {
	if ( !is_page() ) {
		/*$post_info = '[post_date] [post_author_link] [post_comments] [post_edit]';*/

		$post_info = __('On ', 'tgt-nicoshop') . '[post_date]';
		return $post_info;
	}
}

/* Customize Read More Link
--------------------------------------------- */
add_filter( 'the_content_more_link', 'customize_wp_read_more_link' );
function customize_wp_read_more_link() {
    return '<a class="blog-more-link button" href="' . get_permalink() . '">' . __( 'Read More', 'tgt-nicoshop' ) . '</a>';
}
add_filter( 'get_the_content_more_link', 'modify_read_more_link_text' );
function modify_read_more_link_text() {
return '... <a class="blog-more-link button" href="' . get_permalink() . '">' . __( 'Read More', 'tgt-nicoshop' ) . '</a>';
}

/* Post Navigation - Entry Widgets
--------------------------------------------- */

// Remove the after entry widget from after blog post entry
remove_action( 'genesis_after_entry', 'genesis_after_entry_widget_area' );

// Add the after entry widget at the end of the post content
add_action( 'genesis_after_entry_content', 'genesis_after_entry_widget_area', 8 );


//* Add single post navigation
add_action( 'genesis_after_entry', 'genesis_prev_next_post_nav', 9 );


/* Customize Jetpack Related Posts
---------------------------------------------------------------------------------*/
// Adjunst Number of related posts
function jetpack_change_related_posts( $options ) {
    $options['size'] = 3; // change '6' to your liking
    return $options;
}
add_filter( 'jetpack_relatedposts_filter_options', 'jetpack_change_related_posts' );

// Remove in and quotes around category names
add_filter( 'jetpack_relatedposts_post_category_context', 'sk_customize_jp_context', 10, 2 );
function sk_customize_jp_context( $post_cat_context, $category ) {
	$post_cat_context = sprintf(
		_x( '%s', 'in {category/tag name}', 'jetpack' ),
		$category->name
	);

	return $post_cat_context;

}
// Replace category name with category link and category slug as the class
add_filter( 'jetpack_relatedposts_post_category_context', 'sk_customize_jp_context1', 10, 2 );
function sk_customize_jp_context1( $post_cat_context, $category ) {
	// Get the ID of this category
	$category_id = get_cat_ID( $category->cat_name );

	// Get the URL of this category
	$category_link = get_category_link( $category_id );

	$output = '<a href="'. $category_link .'" class="'. $category->slug .'">' . $category->name . '</a>';

	$post_cat_context = sprintf(
		_x( '%s', 'in {category/tag name}', 'jetpack' ),
		// $category->name
		$output
	);

	return $post_cat_context;

}

// Remove Jetpack Related Posts from Woocommerce
function exclude_jetpack_related_from_products( $options ) {
    if ( is_product() ) {
        $options['enabled'] = false;
    }

    return $options;
}

add_filter( 'jetpack_relatedposts_filter_options', 'exclude_jetpack_related_from_products' );


/* WooCommerce
---------------------------------------------------------------------------------*/
/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	// WooCommerce - Display 12 products per page.
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

	// Replace WooCommerce pagination with Genesis pagination
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
	add_action( 'woocommerce_after_shop_loop', 'genesis_posts_nav', 10 );

	// Hide WooCommerce Shop Page Titles

	add_filter('woocommerce_show_page_title', '__return_false');

	//Full Width Pages on WooCommerce
    add_filter( 'genesis_site_layout', 'tgt_nicoshop_cpt_layout' );

	function tgt_nicoshop_cpt_layout() {

	    if( is_page ( array( 'cart', 'checkout' )) || is_shop() || 'product' == get_post_type() ) {
	        return 'full-width-content';
	    }
	}

	/* Remove SKU from Product Pages */

	add_filter( 'wc_product_sku_enabled', 'tgt_remove_product_page_skus' );

	function tgt_remove_product_page_skus( $enabled ) {
	    if ( ! is_admin() && is_product() ) {
	        return false;
	    }

	    return $enabled;
	}

	//add back to store button after cart

	add_action('woocommerce_cart_actions', 'woo_add_continue_shopping_button_to_cart');

	function woo_add_continue_shopping_button_to_cart() {
		?>
		<a class="button wc-backward" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><?php _e( 'Continue Shopping', 'tgt-nicoshop' ) ?></a>
		<?php
	}
}
