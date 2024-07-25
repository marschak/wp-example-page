<?php
/**
 * Shop
 * @package alphawell
 * Template Name: Shop
 */
get_header(); ?>
<?php $theme_path = get_stylesheet_directory_uri(); ?>
<div id="content" class="site-content container">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php //bs_after_primary(); ?>

        <main id="main" class="site-main">
        <section>
            <div class="home_img_bg_container">
                <img class="home_img_bg" src="<?php echo $theme_path; ?>/assets/img/pumpkin-bg-rsz.jpg">
                <div data-aos="fade-up" data-aos-duration="300" class="home_img_bg_product"><?php echo do_shortcode('[products limit="1" columns="1" paginate="false" ids="33632"]'); ?></div>
            </div>
        </section>
        <h2 class="margin-t-1"><?php the_archive_title(); ?></h2>
            <!-- Breadcrumb -->
            <?php // woocommerce_breadcrumb(); ?>
            <div class="row">
                <div class="col ">
                    <?php  if (have_posts()) : ?>
                    <?php  while (have_posts()) : the_post(); ?>

                    <li <?php wc_product_class( 'item-card', $product ); ?>>
                        <?php
		do_action( 'woocommerce_before_shop_loop_item' );
		do_action( 'woocommerce_before_shop_loop_item_title' );
    ?>
                        <div class="product_loop_description">
                            <div>
                                <?php
				do_action( 'woocommerce_shop_loop_item_title' );
				do_action( 'woocommerce_after_shop_loop_item_title' ); 
			?>
                            </div>
                            <div class="scale product-cart-img">
                                <a href="<?php echo esc_url( get_permalink() ); ?>"
                                    title="<?php the_title_attribute(); ?>"><img class="shopping_cart_loop"
                                       src="<?php  echo $theme_path; ?>/img/icon/shopping-cart-64.png" height="23" width="23"></a>
                            </div>
                        </div>
                    </li>

                    <?php  endwhile ?>
                    <?php  endif ?>
                </div>
                <!-- sidebar -->
                <?php // get_sidebar(); ?>
                <!-- row -->
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- #content -->
<?php get_footer(); ?>

