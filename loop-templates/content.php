<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="nyhets-wrapper">
	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<div class="row p-2">
			<div class="col-8">
				<?php the_excerpt(); ?>
				<span class="entry-date">Publicerat: <?php echo get_the_date(); ?></span>
			</div>
			<div class="col-4">
				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
		</div>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	</div>
</article><!-- #post-## -->

