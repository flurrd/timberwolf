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
	<h1 class="entry-title page-feature-title site-max-width">Pre-Coating</h1>
  </header>
<section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php timberwolf_post_thumbnail(); ?>
	<div class="entry-content site-max-width ">

        
        <section class="padd-t-3 rte page-rte">
				<?php
			the_content();
			?>    
					<a href="https://www.cutek.com.au/what-is-the-cutek-difference/" class="btn btn--primary">Learn more about 'The Cutek Difference'</a>

<!-- 					<section class="site-max-width video-section mar-b-3 mar-t-3">
			<div class="resp-container">
				<iframe class="resp-iframe" src="https://www.youtube.com/embed/JK0ENtp5__k" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
			</div>		
	</section> -->


        </section>

			
	
	</div><!-- .entry-content -->



		





</article><!-- #post-<?php the_ID(); ?> -->
