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
<div class="landing-hero-wrapper not-landing">
    <div class="landing-hero">
        <div class="landing-hero-image-wrapper" data-parallax="yes">
            <div class="landing-hero-image-wrapper" data-start="transform: translateY(0px);"
                data-1440="transform: translateY(-500px);">
                <div class="landing-hero-content">
                    <h2 data-0=" opacity: 1; top: 50%;" data-300="opacity: 0; top: 10%;">RECENT PROJECTS</h2>
                    <div class="image">
                        <img src="https://sydneytimbersolutions.com.au/wp-content/uploads/2019/08/STS-HOME-PAGE-HERO-IMAGE-iStock-629074900.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="primary" class="content-area site-max-width">
	<main id="main" class="site-main category-projects padd-l-1 padd-r-1">
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
