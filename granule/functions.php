<?php
/**
 * Reusable theme functions
 *
 * @package Granule
 * @subpackage Template
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

/**
 * TODO BEFORE SUBMISSION
 * ---
 * test theme with and without jetpack
 * test theme with and without infinite scroll
 * delete unused scripts
 * delete unused customizer controls
 * delete unused svgs
 * theme tags
 * theme description
 * screenshot.png (880 x 660)
 * check custom header size
 * check sticky styles
 * test custom header, with and without
 * responsive styles
 * content_width
 * theme_colors
 * check custom page template styles
 * check custom logo properties are appropriate
 * rtl.css - "gulp rtl --theme granule"
 * change google font slugs so they match the font names (in granule_fonts() inc/wordpress.php and inc/wpcom.php)
 * theme scan
 * test site logo
 * readme.txt
 * test hiding header and description through customizer works
 * test logo is still visible when you hide the header text
 * test custom header
 * test custom backgrounds
 * remove granule_widgets_overlay_body_class function there are no widgets in an overlay
 * check all registered menus are being used
 * check sidebar names and that sidebar display conditions match the sidebars they display
 * go through required accessibility items - https://make.wordpress.org/themes/handbook/review/accessibility/required/
 */

// WordPress specific functionality (actions and filters).
include( 'inc/wordpress.php' );

// Custom header.
include( 'inc/custom-header.php' );

// Reusable Template Functions.
include( 'inc/template-tags.php' );

// Jetpack specific functionality.
include( 'inc/jetpack.php' );

// Wordpress.com specific functionality.
include( 'inc/wpcom.php' );

// Custom Custmomizer controls.
include( 'inc/class-custom-controls.php' );

// Customizer controls for setting theme properties.
include( 'inc/customizer.php' );