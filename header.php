<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group layout-header" role="banner">
            <div class="region region-header">
            <div id="logo" class="block-site-branding">
                    <span class="navbar-brand mainLogo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="brescia university college" width="251" height="91"></a></span>
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas" data-target="#mainNavs" aria-controls="mainNavs" aria-expanded="false" aria-label="Toggle Site Navigations">
                        <span class="icon-bar b1"></span>  <span class="icon-bar b2"></span>  <span class="icon-bar b3"></span>
                    </button>
            </div>

            <div class="navbar-collapse offcanvas-collapse" id="mainNavs">
                <nav aria-label="Main Site Navigation" class="ml-auto menu-main" id="mainNav">
                    <h2 class="visuallyHidden" id="block-woi-main-menu-menu">Main navigation</h2>
                  <?php /* Primary navigation */
                    wp_nav_menu( array(
                        'menu' => 'Primary',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                    );
                  ?>

                </nav><!-- main site nav -->
            </div>

                <!-- secondary nav -->
                <div class="utilitymenu-container">
                    <nav class="block blockMenu navigation menu-utility-menu block-utilitymenu-menu">
                        <h2 class="visuallyHidden" id="block-utilitymenu-menu">Utility Menu</h2>
                      <?php wp_nav_menu( array( 'menu' => 'Secondary Menu', 'container' => '', ) ); ?>
                    </nav>
                </div>
                <!-- secondary nav -->

                <!-- social media links -->
                <div id="block-socialmedialinks" class="block-social-media-links block block-social-media-links-block">
                    <ul class="social-media-links--platforms platforms inline horizontal">
                        <li>
                            <a href="https://www.facebook.com/WOInetwork">
                                <span class="fa fa-facebook fa-3x"></span>
                            </a>

                        </li>
                        <li>
                            <a href="https://www.twitter.com/weownitcoop">
                                <span class="fa fa-twitter fa-3x"></span>
                            </a>

                        </li>
                    </ul>

                </div>
                <!-- social media links -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>
            </div>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
