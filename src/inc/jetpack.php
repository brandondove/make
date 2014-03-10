<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ttf-one
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ttf_one_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ttf_one_jetpack_setup' );
