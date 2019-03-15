<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>

<article class="service-post site-max-width" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h3>Content-Service Template (single)</h3>

	<div class="pubication-flex-wrapper">

		<div class="service-cover">
			<?php timberwolf_post_thumbnail(); ?>
		</div>


		<div class="service-rte">

			<header class="entry-header">
				<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
				?>


			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'timberwolf' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'timberwolf' ),
					'after'  => '</div>',
				) );
				?>




			</div><!-- .entry-content -->
		</div>


	</div>





	<footer class="entry-footer">
		<?php timberwolf_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
