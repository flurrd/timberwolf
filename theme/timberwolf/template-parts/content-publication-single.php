<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>

<article class="publication-post site-max-width" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h3>Content-Publication Template</h3>

	<div class="pubication-flex-wrapper">

		<div class="publication-cover">
			<?php lovatts_puzzles_post_thumbnail(); ?>
		</div>


		<div class="publication-rte">

			<header class="entry-header">
				<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
				?>

			<p>Cover Price AU: $<?php echo get_post_meta($post->ID, 'cover_price_au', true); ?></p>

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

				<a class="btn btn--default" href="<?php echo get_post_meta($post->ID, 'au_store_link_url', true); ?>">Subscribe Australia</a>
				<a class="btn btn--default" href="<?php echo get_post_meta($post->ID, 'nz_store_link_url', true); ?>">Subscribe New Zealand</a>
				<a class="btn btn--default" href="<?php echo get_post_meta($post->ID, 'rotw_store_link_url', true); ?>">Subscribe International</a>


			</div><!-- .entry-content -->
		</div>


	</div>





	<footer class="entry-footer">
		<?php lovatts_puzzles_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
