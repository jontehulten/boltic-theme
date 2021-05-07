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
                <div class="row">
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
					the_field('namn'); echo '<br>';
					the_field('nummer'); echo '<br>';
					echo 'Född: '; the_field('fodd'); echo ' | Längd: '; the_field('langd'); echo ' | '; the_field('position');
						
				?>
				<div class="spelar-presentation mt-4 mb-4">
				<?php
					the_field('presentation');
				?>
				</div>
				</div>
				<div class="spelar-stats border-top border-bottom d-flex justify-content-center">
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