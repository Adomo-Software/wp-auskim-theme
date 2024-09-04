<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
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

<body class="text-center" <?php body_class(); ?>>


<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header mb-3">
		<div class="site-branding">

			 <!-- <object type="image/svg+xml" data="/juodas.svg" class="logo"></object>  -->

<?php
// Check if the current page is the home page
$is_home = is_home() || is_front_page();
$class = $is_home ? 'home-link' : '';

echo '<a href="' . home_url() . '" class="' . esc_attr($class) . '">';
echo file_get_contents(get_template_directory() . "/juodas.svg"); 
echo "</a>";
?>

			<?php
			$_s_description = get_bloginfo( 'description', 'display' );
			if ( $_s_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation nav justify-content-center float-md-end">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php

			echo preg_replace( '#<li[^>]+>#', '<li class="nav-link fw-bold">',
		        wp_nav_menu(
		            array(
		            'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
		                // 'container'         => false,
		                // 'depth'             => 1,
		            'echo'              => false
		            )
		        )
		    );

			?>
		</nav>

		<div class="search-icon">
<i class="bi bi-search"></i>
          </div>

	</header>


<div id="page" class="site cover-container d-flex h-100 mx-auto flex-column">
	<div class="mt-5"></div>
	<div class="mt-5"></div>
