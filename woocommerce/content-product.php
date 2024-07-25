<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<?php $theme_path = get_stylesheet_directory_uri(); ?>

<div <?php wc_product_class( 'item-card', $product ); ?>>
<div class="product-icon">
		<span id="<?php the_field('product_tag'); ?>" aria-label="<?php the_field('product_tag'); ?>"><?php the_field('product_tag'); ?></span>
</div>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
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
			
			<a href="<?php echo esc_url( get_permalink() ); ?>" aria-label="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" >
		<img class="shopping_cart_loop btn-cart-icon" src="<?php  echo $theme_path; ?>/img/icon/shopping-cart-64.png" height="23" width="23" alt="shopping cart">

		</a>
        </div>
    </div>
	</div>
</div>