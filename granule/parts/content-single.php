<?php
/**
 * Single post content
 *
 * @package Granule
 * @subpackage TemplatePart
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

<?php
	the_title( '<h1 class="entry-title">', '</h1>' );
	get_template_part( 'parts/post-meta' );
?>

	</header>

	<section class="entry entry-single">

<?php
	the_content(
		sprintf(
			esc_html__( 'Read more %s', 'granule' ),
			the_title( '<span class="screen-reader-text">', '</span>', false )
		)
	);

	get_template_part( 'parts/edit-post' );

	wp_link_pages(
		array(
			'before'      => '<div class="pagination">',
			'after'       => '</div>',
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'granule' ) . ' </span>%',
		)
	);

	if ( is_single() ) {

		granule_contributor();

	}
?>

	</section>

</article>

<?php
	the_post_navigation(
		array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'granule' ) . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Next', 'granule' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'granule' ) . '</span> ' .
				'<span class="screen-reader-text">' . esc_html__( 'Previous', 'granule' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		)
	);