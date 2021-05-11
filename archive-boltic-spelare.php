<?php
/**
 * The template for displaying archive för spelare
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row" id="alla-spelare">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
                    <h1>A-laget</h1>
					</header><!-- .page-header -->
					<div class="row">
					
						<?php
						// Start the loop.
						while ( have_posts() ) {
							the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							echo '<div class="col-3">';
							get_template_part( 'loop-templates/content', 'boltic-spelare' );
							
							
							the_title(
								sprintf( '<span class="entry-title spelar-namn"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
								'</a></span>'
							);
							echo '</div>';	
							
						}
					} else {
						get_template_part( 'loop-templates/content', 'none' );
					}
					?>
				</div>
			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
