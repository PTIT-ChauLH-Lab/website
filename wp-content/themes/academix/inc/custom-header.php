<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package academix
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses academix_header_style()
 */
function academix_custom_header_setup() {
	add_theme_support( 'custom-header' );
}
add_action( 'after_setup_theme', 'academix_custom_header_setup' );