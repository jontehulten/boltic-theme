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

<div class="home-bg row align-items-end d-flex justify-content-around text-center pb-4">         
    <div class="col-md-4 matcher-front" id="senaste-resultat">   
        <div class="row justify-content-center pt-1">
                <div class="h4">Senaste resultat</div>
        </div>
        <div class="row align-items-center">
                        <div class="col text-nowrap">
                            <img src="http://toto.mkv.kau.se/vt21/wd2g_09/wp-content/uploads/2021/05/if-boltic-logotyp-g9-e1621032946984.png" clas="logo-resultat" alt="If Boltic logotyp">
                            <p>If Boltic</p>
                        </div>
                        <h1 class="col text-nowrap">3 - 0</h1>
                        <div class="col text-nowrap">
                            <img src="http://toto.mkv.kau.se/vt21/wd2g_09/wp-content/uploads/2021/05/ifk_rattvik_logo.png" class="logo-resultat" alt="Rättvik logotyp">
                            <p>If Rättvik</p>
                        </div>
        </div>
    </div> 
    <div class="col-md-4 matcher-front" id="nasta-match">   
    <div class="row justify-content-center pt-1">
                <div> <h4>Nästa match</h4> </div>
                <p class="date">08-08-2021</p>
        </div>
        <div class="row align-items-center">
                        <div class="col text-nowrap">
                            <img src="http://toto.mkv.kau.se/vt21/wd2g_09/wp-content/uploads/2021/05/if-boltic-logotyp-g9-e1621032946984.png" class="logo-resultat" alt="If Boltic logotyp">
                            <p>If Boltic</p>
                        </div>
                        <h1 class="col text-nowrap"> - </h1>
                        <div class="col text-nowrap">
                            <img src="http://toto.mkv.kau.se/vt21/wd2g_09/wp-content/uploads/2021/05/hammarby_if-logo-1.png" class="logo-resultat" alt="Hammarby logotyp">
                            <p>Hammarby</p>
                        </div>
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
