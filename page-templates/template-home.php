<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<img class="home-bg" src="<?php echo get_theme_file_uri() ?>../img/Boltic-LAIK11.jpg"></img>
<!-- <div class="sponsors-container">
    <div class="sponsor">Huvudsponsor</div>
    <div class="sponsor">Huvudsponsor</div>
    <div class="sponsor">Huvudsponsor</div>
    <div class="sponsor">Huvudsponsor</div>
</div> -->
<?php
get_footer();
