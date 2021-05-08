<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					
					    <div id="footer-sidebar" class="row align-items-center">
						  <div id="footer-one" class="col-sm-9 widget">
							  <?php
								  if(is_active_sidebar('footer-one')){
								  	dynamic_sidebar('footer-one');
								  }
								  ?>
						  </div>
						  <div id="footer-two" class="col-sm-3 widget">
							  <?php
								  if(is_active_sidebar('footer-two')){
									dynamic_sidebar('footer-two');
								  }
							  ?>
						  </div>
						</div>					

					<div class="site-info mt-5 text-center">

						<p>@Copyright Boltic grupp 9<p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

