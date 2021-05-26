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
                <div class="row pr-2" id="single-spelare">
                    <div class="col-md-3 profil-bild">
						<?php
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'boltic-spelare' );
						}
						?>
                	</div>
                <div class="spelar-fakta col-md-6">
					<?php
						echo'<h1>'; the_field('namn'); echo '</h1><br>';
						echo'<h1>'; the_field('nummer'); echo '</h1><br>';
						echo '<ul><li class="border-right pr-4">Född: '; the_field('fodd'); echo '</li><li class="border-right pr-4 pl-4">Längd: '; the_field('langd'); echo '</li><li class="pl-4"> Position: '; the_field('position'); echo('<l/i></ul>');
							
					?>
				<div class="spelar-presentation mt-4 mb-4">
					<?php
						the_field('presentation');
					?>
				</div>
				</div>			
				<div class="spelar-stats border-top d-flex justify-content-left mt-4 mb-4 pt-4 pb-4">
				<h3>Statistik</h3>	
				<div id="one"></div>
				<div id="two"></div>
				<div id="three"></div>
				</div>
                </div>
			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
			<div id="spelar-sidebar" class="row col-md-3">
					<div id="sidebar-one" class="widget pl-4 col">
						<?php
							if(is_active_sidebar('sidebar-one')){
							dynamic_sidebar('sidebar-one');
							}
							?>
					</div>
				</div>
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
