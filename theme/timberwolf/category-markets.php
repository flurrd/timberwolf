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



<div id="primary" class="content-area mar-b-3">

	<main id="main" class="site-main site-max-width category-markets">
	<h1 class="text-center mar-b-3">Who We Work With</h1>
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
