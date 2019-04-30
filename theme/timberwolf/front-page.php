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
	<main id="main" class="site-main padd-b-3">

		<?php echo do_shortcode('[smartslider3 slider=3]');?>

		<section>
			<div class="flex-grid__row">
				<div class="flex-grid__col">
					<a class="feature-box"  href="/pre-coating/">
						<div class="feature-box__img" style="background-image: url('https://www.cutek.com.au/wp-content/uploads/2017/11/AERO90X18-HSKPT2-10-1.jpg')"></div>
						<span class="feature-box__link-txt">Pre-Coating</span>
					</a>
				</div>
				<div class="flex-grid__col">
					<a class="feature-box"  href="/restoration-maintenance/">
						<div class="feature-box__img" style="background-image: urL('/wp-content/uploads/2019/04/SLIDER_Manufacturers-C_Stacks2.jpg')"></div>
						<span class="feature-box__link-txt">Restoration & Maintenance</span>
					</a>
				</div>
				<div class="flex-grid__col">
					<a class="feature-box"  href="/our-work/">
						<div class="feature-box__img" style="background-image: urL('https://sydneytimbersolutions.com.au/wp-content/uploads/2019/03/adrien-olichon-1240768-unsplash.jpg')"></div>
						<span class="feature-box__link-txt">Our Work</span>
					</a>
				</div>		
				<div class="flex-grid__col">
					<a class="feature-box"  href="/contact/">
						<div class="feature-box__img" style="background-image: urL('/wp-content/uploads/2019/04/Background222.jpg')"></div>
						<span class="feature-box__link-txt">Contact</span>
					</a>
				</div>
			</div>
		</section>

		<section class="about-section mar-b-3 padd-t-2 padd-b-2">
				<div class="site-max-width">
					<div class="about-flex-wrapper">
						<div class="about-image mar-t-1">
							<div class="image-cropper">


								<img src="http://localhost:9000/wp-content/uploads/2019/04/team-photo.jpg" alt="">
							</div>
						</div>
						<div class="about-content">
							<h2>Passionate about the protection and beautification of timber</h2>
							<p>With over 20 years experience in timber restoration and applications, we are experts in making sure our Customers get the best out of their timber.&nbsp;<br></p>
							
							<p>
							We Specialise inet_pton Pre-coating timber – so that it arrives onsite, pre-treated and ready to use and Restoring and maintaining timber in both residential and commercial settings

							</p>

						</div>	
					</div>




				</div>

		</section>

<div class="entry-content site-max-width contact-flex-row">	
	<section class="contact-rte" style="max-width: 600px; padding: 2rem;">
		<header class="entry-header">
			<h1>Contact</h1>
		</header><!-- .entry-header -->
		<p>You can find us at:</p>
		<p>Unit 6, 25a Powers Road,<br>Seven Hills, NSW, 2147</p>
		<p>m: 0405 519 109</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.4405117889964!2d150.94819125068298!3d-33.77512088058749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129883a55f7103%3A0x875e0d015119d93!2s6%2F25A+Powers+Rd%2C+Seven+Hills+NSW+2147!5e0!3m2!1sen!2sau!4v1556000843751!5m2!1sen!2sau" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	</section>	
	
	<section class="padd-t-3 contact-form-section">
            <?php echo do_shortcode('[contact-form-7 id="128" title="Contact form 1"]'); ?>

    </section>	
	
</div><!-- .entry-content -->


<!-- 
		<section class="site-max-width video-section">
			<div class="resp-container">
				<iframe class="resp-iframe" src="https://www.youtube.com/embed/9lXGd94sSRQ" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
			</div>		
		</section> -->



	</main><!-- #main -->
</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();
