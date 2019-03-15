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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h3>Archive default</h3>



		<?php 
			$term = get_queried_object();
			$image = get_field('category_image', $term);

            $args = array (
                'post_type'        => 'publication_issue'
            );

			$the_query = new WP_Query( $args ); 
		?>


		<?php if( $image ): ?>
		<p>There is a category image</p>
		<img src="<?php echo $image['url'];?>">
		<?php endif; ?>		



	<?php if ( $the_query->have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->



            <div class="publications-list">

			<?php
			/* Start the Loop */
			while ( $the_query->have_posts() ) : $the_query->the_post();
				get_template_part( 'template-parts/content', get_post_type() );
				

            endwhile;
        endif;

        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
