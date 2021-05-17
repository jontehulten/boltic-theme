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

<div class="home-bg align-items-end d-flex justify-content-around text-center pb-4">         
    <div class="col-md-4 matcher-front" id="senaste-resultat">   
        <div class="row justify-content-center">
                <div>Senaste resultat</div>
        </div>
        <div class="row align-items-center">
                        <div class="col">
                            <img src="http://toto.mkv.kau.se/vt21/wd2g_09/wp-content/uploads/2021/05/if-boltic-logotyp-g9-e1621032946984.png" clas="logo-resultat" alt="">
                            <span>If Boltic</span>
                        </div>
                        <h1 class="col">1 - 0</h1>
                        <div class="col">
                            <img src="http://toto.mkv.kau.se/vt21/wd2g_09/wp-content/uploads/2021/05/ifk_rattvik_logo.png" class="logo-resultat" alt="">
                            <span>If Rättvik</span>
                        </div>
        </div>
    </div> 
    <div class="col-md-4 matcher-front" id="nasta-match">   
        <div class="row justify-content-center">
                <div>Nästa match</div>
        </div>
        <div class="row">
                        <div class="col">Hej</div>
                        <div class="col">hej</div>
                        <div class="col">hej</div>
        </div>
    </div> 
</div>

<!--<img class="home-bg" src=" <?php //echo get_template_directory_uri(); ?>/img/Boltic-LAIK11.jpg"></img> -->
<!-- <div class="sponsors-container">
    <div class="sponsor">Huvudsponsor</div>
    <div class="sponsor">Huvudsponsor</div>
    <div class="sponsor">Huvudsponsor</div>
    <div class="sponsor">Huvudsponsor</div>

</div> -->
<?php
get_footer();
