<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */
get_header();
?>

<section class="mar-b-3">
  <header class="page__header-image contact-header">
	<h1>Who We Work With</h1>
	<h2>Pre-coating ensures timber is protected from day one and beyond</h2>
  </header>
</section>


<div id="primary" class="content-area mar-b-3">
	<main id="main" class="site-main site-max-width category-markets">
		<?php if (have_posts() ) : ?>
		<div class="markets-list">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/teaser', get_post_type() );
				endwhile;
		endif;?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();
