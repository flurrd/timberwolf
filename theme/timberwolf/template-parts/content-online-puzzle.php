<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>

<article class="online-puzzle-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="online-puzzle-rte site-max-width">

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
        
    <div class="online-puzzle-wrapper">
        <?php echo get_post_meta($post->ID, 'embed_code_block', true); ?>
    </div>



	<footer class="entry-footer">
		<?php lovatts_puzzles_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
