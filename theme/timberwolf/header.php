<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package timberwolf
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'timberwolf' ); ?></a>

	<header id="masthead" class="site-header">

	<div class="site-header-flex-container padd-1 site-max-width">

		<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php
					include('template-parts/logo-svg.php');?>

				</a>	
			</div><!-- .site-branding -->





			<div class="socials mar-t-3">
				<a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
				<a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
				<a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
			</div>


			<div class="phone mar-t-3">
			<i class="fas fa-phone-alt"></i>&nbsp; 0405 519 109
			</div>

			<div class="hamburger-pos-wrapper">
				<div class="hamburger">
						<span class="hamburger__line"></span>
						<span class="hamburger__line"></span>
						<span class="hamburger__line"></span>
				</div>	

			</div>		
	</div>


	<nav id="site-navigation" class="hover-nav nav02">

	<div class="site-max-width">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'main-menu',
			'menu_id'        => 'primary-menu',
		) );
		?>

	</div>

</nav><!-- #site-navigation -->	


	


	</header><!-- #masthead -->

	<div id="content" class="site-content">
