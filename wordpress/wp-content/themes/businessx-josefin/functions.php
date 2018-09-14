<?php
/**
 * Businessx Josefin functions and definitions.
 *
 * @package businessx-josefin
 * @since 1.0.0
 */

define( 'BUSINESSX_JOSEFIN_VERSION', '1.0.0' );

/**
 * Load assets.
 *
 * @since 1.0.0
 */
function businessx_josefin_enqueue() {
    $parent = 'businessx-style';
    $style  = '/style.css';

    // Parent style
    wp_enqueue_style( 
        $parent, 
        get_template_directory_uri() . $style,
        array(),
        BUSINESSX_VERSION
    );

    // Child style
    wp_enqueue_style( 
        'businessx-josefin-style', 
        get_stylesheet_directory_uri() . $style, 
        array( $parent ), 
        BUSINESSX_JOSEFIN_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'businessx_josefin_enqueue' );

/**
 * Dequeue default Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function businessx_josefin_dequeue_fonts() {
    wp_dequeue_style( 'businessx-fonts' );
}
add_action( 'wp_enqueue_scripts', 'businessx_josefin_dequeue_fonts', 15 );

/**
 * Enqueue Google Fonts
 *
 * @since  1.0.0
 * @return void
 */
function businessx_josefin_enqueue_fonts() {
    wp_enqueue_style( 
        'businessx-josefin-fonts', 
        businessx_josefin_fonts_setup(), 
        array(), 
        BUSINESSX_JOSEFIN_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'businessx_josefin_enqueue_fonts', 5 );

/**
 * Google Fonts setup
 *
 * @since  1.0.0
 * @return string Google Fonts URL
 */
function businessx_josefin_fonts_setup() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    $fonts[] = 'Josefin Sans:400,700,300';
    $fonts[] = 'Muli:400,300,700,900,300italic,400italic,700italic';

    $fonts_args = apply_filters( 'businessx_josefin_fonts_setup', array(
        'family' => urlencode( implode( '|', $fonts ) ),
        'subset' => urlencode( $subsets ),
    ), compact( 'fonts', 'subsets' ) );

    return add_query_arg( $fonts_args, 'https://fonts.googleapis.com/css' );
}