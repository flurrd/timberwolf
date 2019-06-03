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

	<div id="primary" class="content-area site-max-width">
		<main id="main" class="site-main">

        <small>Category Projects Template</small>

	<?php if (have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->



            <div class="category-list">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				

            endwhile;
        endif;

        ?>
        
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();