<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="single-nyhet">
	<header class="entry-header ">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<span class="entry-date">Publicerat: <?php echo get_the_date(); ?></span>

	</header><!-- .entry-header -->
	<div class="single-nyhet-bild">
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>
	

	<div class="entry-content">
	
		<?php the_content(); ?>
		
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
