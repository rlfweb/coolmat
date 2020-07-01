<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

<!-- Below is not the correct WordPress way to do it - instead use functions.php to load in our custom.css

Here we use the template URL code and then join our CSS file location onto the end.
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css"> -->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coolmat' ); ?></a>

<!-- Outer element that takes up the full page width - 1440px  -->
	<header id="masthead" class="site-header">
<!-- Inner element that takes up 1380px-->
	<div class="header-inner container">
	<div class="site-branding">	
		<!-- here we link to logo from assets folder -->
		<img src="<?php bloginfo('template_url'); ?>/assets/coolmat_logo.svg" class="logo"/>

		</div>
		
		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<!-- todo - make this work - Language selector -->
    <div class="language-select">
    KR | EN 
    </div>
	</div>
	


	</header><!-- #masthead -->
