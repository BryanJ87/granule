<?php
/**
 * Image content
 *
 * @package Granule
 * @subpackage TemplatePart
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

	$image = get_the_post_thumbnail( get_the_ID(), 'granule-archive-image' );

	// No image so use default post format.
	if ( ! $image ) {

		get_template_part( 'parts/content' );
		return;

	}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>" class="thumbnail">
		<?php echo $image; ?>
	</a>

	<section class="entry entry-archive">

<?php
	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

	get_template_part( 'parts/post-meta' );
?>

	</section>

</article>