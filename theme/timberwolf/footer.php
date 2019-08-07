<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package timberwolf
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-max-width">

			<div class="footer-card-wrap">
				<div class="footer__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php
								include('template-parts/logo-svg.php');?>

					</a>	
				</div>

			</div>

			<div class="footer-nav">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-nav',
					) );
					?>				
			</div>



			<small class="copyright mar-t-1 d-block text-center">© 2019 Sydney Timber Solutions | <a href="/privacy-policy/">Privacy Policy</a> | All rights reserved.</small>

		</div>
	
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<aside class="push-menu">

	<div class="push-menu-link-lists">

	<?php
				wp_nav_menu( array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'push-menu',
				) );
				?>
	</div>

</aside>

<div class="push-menu-tint">
</div>



</body>
</html>
