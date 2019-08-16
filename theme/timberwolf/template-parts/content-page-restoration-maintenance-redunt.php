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
	<h1 class="entry-title page-feature-title site-max-width">Restoration + Maintenance</h1>
  </header>
<section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php timberwolf_post_thumbnail(); ?>
	<div class="entry-content site-max-width contact-flex-row">

        
        <section class="padd-t-3 padd-b-3 mar-b-3 contact-rte page-rte">
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
