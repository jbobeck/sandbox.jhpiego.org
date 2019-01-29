<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


        
        
        
          <!-- Full Page Intro -->
  <div class="view mt-md-0 mt-5 pt-5 pb-5" style="background-image: url('<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/understrap-child/img/misc/home-top-bg.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class=" d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
           
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 white-text col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
               <h1 class="h1-responsive font-weight-bold mt-sm-5">A hard truth</h1>
               <h6 class="mb-4">In the time it takes to introduce you to Anesta, a woman like her has died from preventable causes related to pregnancy and childbirth.</h6>
              <a class="btn rust-red-color">Donate</a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
        
        

		




<?php get_footer(); ?>
