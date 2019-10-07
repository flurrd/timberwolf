<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

?>


<div class="landing-hero-wrapper not-landing">
    <div class="landing-hero">
        <div class="landing-hero-image-wrapper" data-parallax="yes">
            <div class="landing-hero-image-wrapper" data-start="transform: translateY(0px);"
                data-1440="transform: translateY(-500px);">
                <div class="landing-hero-content">
                    <h2 data-0=" opacity: 1; top: 50%;" data-300="opacity: 0; top: 10%;"><?php the_title(); ?></h2>
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
			

		<article id="content-project post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="entry-content site-max-width">

	<section class="page-rte project-rte">


		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links site-max-width d-flex">' . esc_html__( 'Pages:', 'timberwolf' ),
			'after'  => '</div>',
		) );
		?>

	</section>

</div><!-- .entry-content -->




</article><!-- #post-<?php the_ID(); ?> -->


		</main><!-- #main -->
	</div><!-- #primary -->
