<?php
/**
 * Shop
 * @package alphawell
 * @version 7.0.1
 * Template Name: Shop
 */
get_header(); ?>

<?php $theme_path = get_stylesheet_directory_uri(); ?>
<div id="content" class="site-content container">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php //bs_after_primary(); ?>

        <main id="main" class="site-main">

            <div class="home_img_bg_container">
                <img  class="home_img_bg desktop-img" src="<?php echo $theme_path; ?>/assets/img/pumpkin-bg-rsz.jpg" width="1113" height="575" alt="pumpkin background">
                <img  class="home_img_bg mobile-img" src="<?php echo $theme_path; ?>/assets/img/pumpkin-bg-rsz-3.jpg"  width="312" height="161" alt="pumpkin background">
                <div  class="home_img_bg_product"><?php echo do_shortcode('[products limit="1" columns="1" paginate="false" ids="33632"]'); ?></div>
            </div>

        <h2 class="margin-t-1"><?php the_archive_title(); ?></h2>
            <!-- Breadcrumb -->
            <?php // woocommerce_breadcrumb(); ?>
            <div class="row line-height-none">
                <div class="col flex-col">
                    <?php  if (have_posts()) : ?>
                    <?php  while (have_posts()) : the_post(); ?>

                    <div <?php wc_product_class( 'item-card', $product ); ?>>
                        <?php
		do_action( 'woocommerce_before_shop_loop_item' );
		do_action( 'woocommerce_before_shop_loop_item_title' );
    ?>
                       <div class="single-card-body">
 <?php echo '<h2>'. get_the_title() .'</h2>'; ?>
    <div class="product_loop_description">
		<div class="taxonomy-product-info">
         
            <div>
                <?php woocommerce_template_single_price(); ?>
            </div>
        </div>
		<div class="scale product-cart-img" data-toggle="tooltip" data-placement="bottom" title="Add to cart"> 
			
			<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>" >
		<img class="shopping_cart_loop btn-cart-icon" src="<?php  echo $theme_path; ?>/img/icon/shopping-cart-64.png" height="23" width="23" alt="shopping cart">

		</a>
        </div>
    </div>
	</div>
                    </div>

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

