<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );

 $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );

?>

<header class="entry-header col-md-12">
		
		
		   <!-- Full Page Intro -->
  <div class="view" style="background: url('<?php echo $backgroundImg[0] ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 50vh;">
	  
	  
    
  </div>
	
	<?php if( get_field('featured_image_photo_credit') ):?>
				<?php the_field( 'featured_image_photo_credit'); ?>
			<?php endif; ?>	
	
  <!-- Full Page Intro -->

	</header><!-- .entry-header -->

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">
                
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'success-story' ); ?>

					<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			

		</div><!-- .row -->

	</div><!-- #content -->
    
  
   	<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">

<!-- Do the right sidebar check -->
			<?php /*?><?php get_template_part( 'global-templates/right-sidebar-check' ); ?><?php */?>

</div><!-- #right-sidebar -->
           
       
</div><!-- #single-wrapper -->

<?php get_footer(); ?>
