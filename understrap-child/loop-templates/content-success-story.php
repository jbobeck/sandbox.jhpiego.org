<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	
 $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			
?>

<?php /*?><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?><?php */?>




			



<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<?php /*?><?php understrap_posted_on(); ?><?php */?>
			
			
			<?php the_time('F jS, Y') ?>
			<?php if( get_field('author') ):?>
			
			<?php echo "| ";?>
			
				<?php the_field( 'author'); ?>
			<?php endif; ?>	

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	

	<div class="entry-content col-md-8">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->



