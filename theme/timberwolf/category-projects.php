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

<!-- <section class="mar-b-3">
  <header class="page__header-image contact-header">
	<h1>Recent Projects</h1>
	<h2>Pre-coating ensures timber is protected from day one and beyond</h2>
  </header>
</section> -->
<section>
  <header class="page__header-image">
	<h1 class="entry-title page-feature-title site-max-width">Recent Projects</h1>
  </header>
<section>

<div id="primary" class="content-area site-max-width">
	<main id="main" class="site-main category-projects">
		<?php if (have_posts() ) : ?>
		<div class="project-list">
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
