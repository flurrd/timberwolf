<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>



<article id="content-project post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<div class="entry-content site-max-width">

		<section class="page-rte project-rte">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->


			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links site-max-width d-flex">' . esc_html__( 'Pages:', 'timberwolf' ),
				'after'  => '</div>',
			) );
			?>

		</section>

	</div><!-- .entry-content -->




</article><!-- #post-<?php the_ID(); ?> -->

