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
  </header>
<section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php timberwolf_post_thumbnail(); ?>

	<div class="entry-content site-max-width contact-flex-row">


		<section class="contact-rte" style="max-width: 600px; padding: 2rem;">

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->


			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'timberwolf' ),
				'after'  => '</div>',
			) );
			?>


        </section>
        
        <section class="padd-t-3 contact-form-section">
            
            <?php echo do_shortcode('[contact-form-7 id="128" title="Contact form 1"]'); ?>

        </section>

	</div><!-- .entry-content -->




</article><!-- #post-<?php the_ID(); ?> -->
