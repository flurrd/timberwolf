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



			<p class="copyright text-center">© 2019 Sydney Timber &amp; Deck Renewals. | <a href="/privacy-policy/">Privacy Policy</a> | All rights reserved.</p>

		</div>
	
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<aside class="push-menu">

	<div class="push-menu-link-lists">
	<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
	</div>

</aside>

<div class="push-menu-tint">
</div>



</body>
</html>
