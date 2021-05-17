<?php
/**
 * The template for displaying category pages
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

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
						<?php
						echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
                        echo '<p>Ska försöka ta bort Category: </p>';
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					
                        <div class="row">
                        <div class="col-8">
						<?php
						// Start the loop.
						while ( have_posts() ) {
							
							the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
                            get_template_part( 'loop-templates/content', get_post_format() );
							
						}
					} else {
						get_template_part( 'loop-templates/content', 'none' );
					}
					?>
                    </div>
                    <div class="col-4">
                        <div class="plugin-box">
                            <p>Här vore det om det gick att lägga in ett facebook-plugin</p>
                        </div>
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
