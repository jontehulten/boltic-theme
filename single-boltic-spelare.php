<?php
/**
 * The template for displaying  single players
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
                <div class="row" id="single-spelare">
                    <div class="col-3 profil-bild">
				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'boltic-spelare' );
				}
				?>
                </div>
                <div class="spelar-fakta col-6">
				<?php
					echo'<h1>'; the_field('namn'); echo '</h1><br>';
					echo'<h1>'; the_field('nummer'); echo '</h1><<br>';
					echo '<div class="spelarinfo">Född: '; the_field('fodd'); echo ' | Längd: '; the_field('langd'); echo ' | '; the_field('position'); echo('</div>');
						
				?>
				<div class="spelar-presentation mt-4 mb-4">
				<?php
					the_field('presentation');
				?>
				</div>
				</div>
				<div class="spelar-stats border-top d-flex justify-content-center mt-4 mb-4 pt-4 pb-4">
				---------------------- <br>
				----------------------	Plugin med stats?????? <br>
				-----------------------
				</div>
                </div>
			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
