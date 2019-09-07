<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

get_header();
?>



<div class="landing-hero-wrapper not-landing">
    <div class="landing-hero">
        <div class="landing-hero-image-wrapper" data-parallax="yes">
            <div class="landing-hero-image-wrapper" data-start="transform: translateY(0px);"
                data-1440="transform: translateY(-500px);">
                <div class="landing-hero-content">
                    <h2 data-0=" opacity: 1; top: 50%;" data-300="opacity: 0; top: 10%;"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h2>
                    <div class="image">
                        <img src="https://sydneytimbersolutions.com.au/wp-content/uploads/2019/08/STS-HOME-PAGE-HERO-IMAGE-iStock-629074900.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



	<div id="primary" class="content-area">
		<main id="main" class="site-main">



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>





		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();
