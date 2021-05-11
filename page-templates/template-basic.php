<?php
/**
 * Template Name: Basic Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper bg-secondary" id="basic-page-wrapper">
    <!--HÄR BÖR VI KUNNA LÄGGA IN VÅR BANNER!!!!-->

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->
    
    <hr class="bg-primary">
<div class="container spons">
    <?php get_template_part( 'sidebar-templates/sidebar-hero' ); ?>
</div>
<hr class="bg-primary">

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
