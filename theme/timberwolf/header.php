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
	<link href="https://fonts.googleapis.com/css?family=Domine:400,700|Istok+Web:400,700" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'timberwolf' ); ?></a>

	<header id="masthead" class="site-header">

	<div class="site-header-flex-container site-max-width">

		<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php
					include('template-parts/logo-svg.php');?>

				</a>	
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">

				<div class="top-menu-items text-right clearfix">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu-top',
						'menu_id'        => 'primary-menu-top',
					) );
					?>
				</div>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
				
			</nav><!-- #site-navigation -->	


	</div>


	


	</header><!-- #masthead -->

	<div id="content" class="site-content">
