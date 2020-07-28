<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'wordpress-bootstrap-starter-theme' ); ?></a>
	<header id="masthead" class="site-header">

		

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<strong><?php bloginfo( 'name' ); ?></strong>
	
		</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

	

	
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-end',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
		?>
		
		
    </div>
</nav>
		

		<!--Navbar-->


	</header><!-- #masthead -->


