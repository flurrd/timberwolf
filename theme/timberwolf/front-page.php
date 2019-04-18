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
					<div class="about-flex-wrapper">
						<div class="about-content">
							<h2>We Specialise</h2>
							<p>With over 20 years experience in timber restoration and applications, we are experts in making sure our Customers get the best out of their timber.&nbsp;<br></p>
							
							<p>
							We Specialise inet_pton Pre-coating timber – so that it arrives onsite, pre-treated and ready to use and Restoring and maintaining timber in both residential and commercial settings

							</p>

						</div>	
						<div class="about-image mar-t-1">
							<div class="image-cropper">


								<img src="http://localhost:9000/wp-content/uploads/2019/04/team-photo.jpg" alt="">
							</div>
						</div>						
					</div>
					<div class="about-flex-wrapper">
						<div class="about-image mar-t-1">
							<div class="image-cropper">


								<img src="http://localhost:9000/wp-content/uploads/2019/04/team-photo.jpg" alt="">
							</div>
						</div>
						<div class="about-content">
							<h2>Customers get the best out of their timber</h2>
							<p>With over 20 years experience in timber restoration and applications, we are experts in making sure our Customers get the best out of their timber.&nbsp;<br></p>
							
							<p>
							We Specialise inet_pton Pre-coating timber – so that it arrives onsite, pre-treated and ready to use and Restoring and maintaining timber in both residential and commercial settings

							</p>

						</div>	
					</div>


				</div>

		</section>

		<section class="site-max-width">
			<div class="resp-container">
				<iframe class="resp-iframe" src="https://www.youtube.com/embed/9lXGd94sSRQ" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>
			</div>		
		</section>

		<section class="site-max-width">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13267.537581229246!2d151.1215255831873!3d-33.763653090965065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a6187e6d49c5%3A0x5017d681632cfa0!2sWest+Pymble+NSW+2073!5e0!3m2!1sen!2sau!4v1555580863756!5m2!1sen!2sau" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



		<div class="wpb_text_column">
			<div class="wpb_wrapper">
				<h3>Our Office</h3>
			</div> 
		</div> 

		<div class="wpb_text_column ">
			<div class="wpb_wrapper">
				<p>1/9&nbsp; Lacy Street</p>
				<p>Braybrook, VIC 3019</p>
				<p>Email: <a href="mailto:sales@timberrevival.com.au">sales@timberrevival.com.au</a></p>
				<p>Phone: <a href="tel:93183898">(03) 9318 3898</a></p>
				<p>Fax: (03) 9318 6282</p>
			</div> 
		</div> 




>			
		</section>



	</main><!-- #main -->
</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();
