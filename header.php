<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alphawell
 * 
 * @version 5.2.0.0
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
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php $theme_path = get_stylesheet_directory_uri(); ?>


<header id="masthead" class="site-header">

<div class="container margin-b-2">
	<div class="row top-header">
		<div class="col-3 justify-content-center d-flex">
		<button class="header-burger-button" aria-label="nav-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><img class="scale header-sidebar-menu menu-icon" src="<?php echo $theme_path; ?>/assets/img/burger-black.svg" width="25" height="18" alt="nav menu icon"></button>
<div class="offcanvas offcanvas-start bootstrap-burger-menu-content" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
		<div class="col-6 justify-content-center d-flex">
			<a href="/" aria-label="logo"><img src="<?php echo $theme_path; ?>/assets/img/96north-logo-footer.svg" width="200" height="92" alt="logo"></a>
		</div>
		<div class="col-3 justify-content-center d-flex">
		<button type="button" class="scale header-burger-button" aria-label="search" data-bs-toggle="modal"
							data-bs-target="#exampleModal"><img
								src="<?php echo $theme_path; ?>/assets/img/search-icon.svg" width="25" height="25" alt="search"></button>

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
			<!-- <a class="scale" href="#"><img src="<?php // echo $theme_path; ?>/assets/img/cart-icon.svg" width="20"></a> -->
			 <span class=" ms-1 ms-md-2 position-relative header-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart" aria-controls="offcanvas-cart" aria-label="shopping cart">
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
		</div>
	</div>
	<!--<div class="row justify-content-center bottom-header d-none d-md-flex">
		<div class="col-md-12 col-lg-9 ">
		<?php
		 // wp_nav_menu( [
			// 'menu'            => 'header-nav',
			// 'menu_class'      => 'header-menu',
			// 'add_li_class'    => 'scale',
		 // ] );
		?>
		</div>
	</div>-->
</div>

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

</header>
<header>
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
								<div class="side-currency">
									<?php
										if ( function_exists('dynamic_sidebar') )
											dynamic_sidebar('currency-swither');
									?>
								</div>
							</div>
						</div> -->
					</div>
					<div class="col-4 d-flex justify-content-center">
						<a href="/"  aria-label="logo"><img src="<?php echo $theme_path; ?>/assets/img/96north-logo-footer.svg"
								width="160" height="53" alt="logo"></a>
					</div>
					<div class="col-3 justify-content-center d-flex">
					<button type="button" class="scale header-burger-button" aria-label="search" data-bs-toggle="modal"
							data-bs-target="#exampleModal"><img
								src="<?php echo $theme_path; ?>/assets/img/search-icon.svg" width="25" height="25" alt="search"></button>
<!-- Mini Cart Toggler -->
              <span class=" ms-1 ms-md-2 position-relative  header-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart" aria-controls="offcanvas-cart" aria-label="shopping cart">
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
						<!-- <a class="scale" href="#"><img src="<?php // echo $theme_path; ?>/assets/img/cart-icon.svg" width="20"></a> -->


					</div>
					<div class="col-md-1 col-12 justify-content-center d-none d-md-block"></div>
				</div>
			</div>
		</div>
	</div>
</header>
<style>
    /*critical*/
@media (max-width: 1500px) {
	.margin-t-6 {
        margin-top: 4em !important;
    }
    .margin-t-5 {
        margin-top: 1.2em !important;
    }
    .margin-t-3 {
        margin-top: 2.25em !important;
    }
    .margin-t-1 {
        margin-top: 1em !important;
    }
    .margin-b-6 {
        margin-bottom: 4em !important;
    }
    .margin-b-3 {
        margin-bottom: 2.25em;
    }
    .title-on-the-image {
        left: 15%; /*homepage.css*/
    }
}
</style>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap');
</style>