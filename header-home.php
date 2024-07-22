<?php
/**
 * header.php
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alphawell
 * @since 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS and other */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS"
		href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
        $theme_path = get_stylesheet_directory_uri();
    ?>


	<header id="masthead" class="site-header">
		<div class="header-video">
			<!--<video poster="<?php echo $theme_path; ?>/assets/img/home-poster2.jpg" playsinline autoplay muted loop>
				<source src="<?php echo $theme_path; ?>/assets/video/96_north_old.mp4" type="video/mp4">
			</video> -->
			<img class="back-img desktop-img" src="https://96north.com/wp-content/uploads/2022/12/home-img-3-scaled-1.webp" alt="header background the sun shines on the girl">
			<img class="back-img mobile-img" src="https://96north.com/wp-content/uploads/2022/12/home-img-3-scaled-1-1.webp" alt="header background the sun shines on the girl">
		</div>
		<div class="row header-content top-header video-header-menu">
			<div class="col-1 justify-content-center d-none d-md-block"></div>
			<div class="col-3 justify-content-center d-flex">

				<button class="header-burger-button" aria-label="nav-menu" type="button" data-bs-toggle="offcanvas"
					data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img
						class="scale header-sidebar-menu menu-icon"
						src="<?php echo $theme_path; ?>/assets/img/burger-white.svg" width="25" height="18" alt="nav menu icon"></button>
				<div class="offcanvas offcanvas-start bootstrap-burger-menu-content" data-bs-scroll="true"
					data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
					aria-labelledby="offcanvasScrollingLabel">
					<div class="offcanvas-header">
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
							aria-label="Close"></button>
					</div>
					<div class="offcanvas-body anim-underline">
						<?php
							wp_nav_menu( [
								'menu'            => 'homepage_top_menu',
								'menu_class'      => 'sidebar-menu',
								'add_li_class'    => '',
								'link_class'   	  => 'nav-link',
							] );
						?>
						<div class="side-currency">
							 <?php
								if ( function_exists('dynamic_sidebar') )
									dynamic_sidebar('currency-swither');
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 d-flex justify-content-center">
				<div class="home-header-logo"><img
						src="<?php echo $theme_path; ?>/assets/img/homepage-header-logo.svg" width="200" height="92" alt="96north logo"></div>
			</div>
			<div class="col-3 justify-content-center d-flex">



				<button type="button" class="scale header-burger-button" aria-label="search" data-bs-toggle="modal"
					data-bs-target="#exampleModal"><img
						src="<?php echo $theme_path; ?>/assets/img/search-icon-white.svg" width="25" height="25" alt="search icon"></button>
	 <span class=" ms-1 ms-md-2 position-relative header-cart-btn" type="button" data-bs-toggle="offcanvas" aria-label="shopping cart" data-bs-target="#offcanvas-cart" aria-controls="offcanvas-cart">
               <img src="<?php echo $theme_path; ?>/img/icon/shopping-cart-white-65.webp" width="25" height="25" alt="shopping cart"><span class="visually-hidden-focusable">Cart</span>
                <?php //if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
                  $count = WC()->cart->cart_contents_count;
                ?>
                  <span class="cart-content">
                    <?php if ($count > 0) { ?>
                      <?php echo esc_html($count); ?>
                    <?php
                    }
                    ?></span>
                <?php //} ?>
              </span>

							<!--		<div class="header-currency">
							 <?php
							 /*
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('currency-swither');
		*/
?>
</div> -->
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body">
								<?php echo do_shortcode( '[ivory-search id="33958" title="testsearch"]' ); ?>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-1 justify-content-center d-none d-md-block"></div>
		</div>
		<div class="overlay"></div>


						<!-- offcanvas cart -->
      <div class="offcanvas offcanvas-end side-cart" tabindex="-1" id="offcanvas-cart">
        <div class="offcanvas-header bg-light">
          <span class="h5 mb-0"><?php esc_html_e('Cart', 'alphawell'); ?></span>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
        <!--  <div class="cart-loader bg-white position-absolute end-0 bottom-0 start-0 d-flex align-items-center justify-content-center">
            <div class="loader-icon ">
              <div class="spinner-border text-primary"></div>
            </div>
          </div> -->
          <div class="cart-list">
            <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
          </div>
        </div>
      </div>
			<!-- offcanvas cart end-->
	</header><!-- #masthead -->



	<style>
		@import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap');
	</style>


	<div class="header-fade">
		<div class="header-container container">
			<div class="row">
				<div class="header-content top-header">
					<div class="col-1 justify-content-center d-none d-md-block"></div>
					<div class="col-3 justify-content-center d-flex">
						<button class="header-burger-button" aria-label="nav-menu" type="button" data-bs-toggle="offcanvas"
							data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img
								class="scale header-sidebar-menu menu-icon"
								src="<?php echo $theme_path; ?>/assets/img/burger-black.svg" width="25" height="18" alt="nav menu icon"></button>
						<!-- <div class="offcanvas offcanvas-start bootstrap-burger-menu-content" data-bs-scroll="true"
							data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
							aria-labelledby="offcanvasScrollingLabel">
							<div class="offcanvas-header">
								<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
									aria-label="Close"></button>
							</div>
							<div class="offcanvas-body anim-underline">
								<?php
									//  wp_nav_menu( [
									//	'menu'            => 'homepage_top_menu',
									//	'menu_class'      => 'sidebar-menu',
									//	'add_li_class'    => '',
									//  ] );
									?>
							</div>
						</div> -->
					</div>
					<div class="col-4 d-flex justify-content-center">
						<a href="/"><img src="<?php echo $theme_path; ?>/assets/img/96north-logo-footer.svg"
								width="160" height="53" alt="96north logo"></a>
					</div>
					<div class="col-3 justify-content-center d-flex">
						<button type="button" class="scale header-burger-button" aria-label="search" data-bs-toggle="modal"
							data-bs-target="#exampleModal"><img
								src="<?php echo $theme_path; ?>/assets/img/search-icon.svg" width="25" height="25" alt="search icon"></button>
	 <span class=" ms-1 ms-md-2 position-relative header-cart-btn" type="button" data-bs-toggle="offcanvas" aria-label="shopping cart" data-bs-target="#offcanvas-cart" aria-controls="offcanvas-cart">
               <img src="<?php echo $theme_path; ?>/img/icon/shopping-cart-65.png" width="25" height="25" alt="shopping cart"><span class="visually-hidden-focusable">Cart</span>
                <?php //if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
                  $count = WC()->cart->cart_contents_count;
                ?>
                  <span class="cart-content">
                    <?php if ($count > 0) { ?>
                      <?php echo esc_html($count); ?>
                    <?php
                    }
                    ?></span>
                <?php //} ?>
              </span>

						<div class="header-currency">
							<?php
								if ( function_exists('dynamic_sidebar') )
									dynamic_sidebar('currency-swither');
							?>
						</div>
						<!-- Modal
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
							aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-body">
										<?php // echo do_shortcode( '[ivory-search id="33958" title="testsearch"]' ); ?>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="col-md-1 col-12 justify-content-center d-none d-md-block"></div>
				</div>
			</div>
		</div>
	</div>


	<style>


	</style>