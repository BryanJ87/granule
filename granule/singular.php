<?php
/**
 * Single post & page template
 *
 * @package Granule
 * @subpackage Template
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

	get_header();

?>

	<main role="main">

		<div class="main-content content-single">

<?php

	if ( have_posts() ) {

		while ( have_posts() ) {

			the_post();

			get_template_part( 'parts/content-single', get_post_type() );
			get_template_part( 'parts/comments' );

		}
	} else {

		get_template_part( 'parts/content-empty' );

	}

?>

		</div>

	</main>

<?php
	get_footer();