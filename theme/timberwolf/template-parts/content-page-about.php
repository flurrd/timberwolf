<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>

<section>
  <header class="page__header-image">
	<h1 class="entry-title page-feature-title site-max-width">About Us</h1>
  </header>
<section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php timberwolf_post_thumbnail(); ?>
	<div class="entry-content page-rte site-max-width padd-b-3">

        
        <section class="padd-t-3 page-rte">
				<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'timberwolf' ),
				'after'  => '</div>',
			) );
			?>         

        </section>

	</div><!-- .entry-content -->




</article><!-- #post-<?php the_ID(); ?> -->
