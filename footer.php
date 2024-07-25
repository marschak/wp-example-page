<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alphawell
 *
 * @version 5.2.0.0
 */

?>

    <?php
        $theme_path = get_stylesheet_directory_uri();
    ?>

<?php  if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
</div>
    <footer class="footer">
        <div class="container container margin-t-3">
        <div class="separator margin-t-3"></div>
            <div class="row margin-t-3">
                <div class="col-md-3 col-12 anim-underline">
                    <h2>Menu</h2>
                    <?php
                    wp_nav_menu( [
                        'menu'            => 'Footer',
                        'container'       => 'div',
                        'menu_class'      => 'footer-menu',
                    ] );
                    ?>
                    <?php
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('currency-swither');
?>
                </div>
                <div class="col-md-3 col-12 anim-underline">
                <h2>Help</h2>
                    <?php
                        wp_nav_menu( [
                            'menu'            => 'footer-help',
                            'container'       => 'div',
                            'menu_class'      => 'footer-menu',
                        ] );
                    ?>
                </div>
                <div class="col-md-3 col-12 anim-underline">
                    <h2>About us</h2>
                    <p>Alphawell Brands<br>
                    71-75 Shelton Street<br>
                    Covent Garden,<br> 
                    London WC2H9JQ<br></p>
                </div>
                <div class="col-md-3 col-12 footer-social">
                    <h2>Follow us</h2>
                    <a href="https://www.facebook.com/96NORTH"><img style="margin: 0 5px;" class="scale" src="<?php echo $theme_path; ?>/assets/img/facebook-logo-2.svg" width="30" alt="facebook"></a>
                    <a href="https://www.instagram.com/ninetysixnorth/"><img style="margin: 0 5px;" class="scale" src="<?php echo $theme_path; ?>/assets/img/inslagram-logo.svg" width="30" alt="instagram"></a>
                    <a href="https://www.pinterest.com/ninetysixnorth/"><img style="margin: 0 5px;" class="scale" src="<?php echo $theme_path; ?>/assets/img/pinterest-logo.svg" width="30" alt="pinterest"></a>
                </div>
            </div>
            <div class="row footer-bottom-row">
                <div class="col-md-3 col-12">
                    <a class="scale" href="/"><img src="<?php echo $theme_path; ?>/assets/img/96north-logo-footer.svg" width="167" alt="96north logo"></a>
                </div>
                <div class="col-md-9 col-12"><p>Copyright 2024, Alphawell Brands.</p></div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>

<!-- Hotjar Tracking Code for 96North.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:3266094,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<script> AOS.init(); </script>

</body>
</html>