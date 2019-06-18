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
	<h1 class="entry-title">Restoration & Maintenance</h1>
	<h2>We are experts in rejuvenating any external timber surface</h2>
  </header>
<section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php timberwolf_post_thumbnail(); ?>
	<div class="entry-content site-max-width contact-flex-row">


		<section class=" contact-form-section">
			<img class="mar-t-3 padd-t-3 mar-b-3 mar-l-auto mar-r-auto"src="https://sydneytimbersolutions.com.au/wp-content/uploads/2019/06/kyle-glenn-602592-unsplash.jpg" alt="">
        </section>
        
        <section class="padd-t-3 contact-rte">
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
