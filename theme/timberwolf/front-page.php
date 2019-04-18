<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package timberwolf
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php echo do_shortcode('[smartslider3 slider=3]');?>
		<section class="site-max-width">
			<div class="flex-grid__row">
				<div class="flex-grid__col">
					<a class="feature-box"  href="/">
						<div class="feature-box__img" style="background-image: url('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/03/spencer-watson-327580-unsplash.jpg')"></div>
						<span class="feature-box__link-txt">Pre-Coating</span>
					</a>
				</div>
				<div class="flex-grid__col">
					<a class="feature-box"  href="/">
						<div class="feature-box__img" style="background-image: urL('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/03/brooke-campbell-43862-unsplash-1024x683.jpg')"></div>
						<span class="feature-box__link-txt">Restoration & Maintenance</span>
					</a>
				</div>
				<div class="flex-grid__col">
					<a class="feature-box"  href="/">
						<div class="feature-box__img" style="background-image: urL('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/03/adrien-olichon-1240768-unsplash.jpg')"></div>
						<span class="feature-box__link-txt">Our Work</span>
					</a>
				</div>		
				<div class="flex-grid__col">
					<a class="feature-box"  href="/">
						<div class="feature-box__img" style="background-image: urL('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/03/brooke-campbell-43862-unsplash-1024x683.jpg')"></div>
						<span class="feature-box__link-txt">Contact</span>
					</a>
				</div>
			</div>
		</section>

		<section class="site-max-width mar-t-3">
				<div class="about-flex-wrapper">
					<div class="about-image mar-t-1">
						<div class="image-cropper">


							<img src="https://via.placeholder.com/500" alt="">
						</div>
					</div>
					<div class="about-content">
								<h2>Passionate about the protection and beautification of timber</h2>
								<p>
								Here at Sydney Timber Solutions, we are passionate about the protection and beautification of timber.</p>
								<ul><li>The natural look of timber</li>
								<li>That timber is a renewable resource</li>
								<li>That timber can be maintained cost effectively&nbsp;</li>
								<li>Helping our customers maximise the lifespan of their timber</li>
							</ul>
								<p>With over 20 years experience in timber restoration and applications, we are experts in making sure our Customers get the best out of their timber.&nbsp;<br></p>
					</div>	
				</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();
