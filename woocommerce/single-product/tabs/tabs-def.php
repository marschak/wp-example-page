<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
  exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)) : ?>

  <div class="woocommerce-tabs wc-tabs-wrapper">
    <div class="tab-scroller d-flex overflow-auto">
      <ul class="wc-tabs nav nav-tabs mb-4 flex-grow-1" role="tablist">
        <?php foreach ($product_tabs as $key => $product_tab) : ?>
          <li class="nav-item <?php echo esc_attr($key); ?>_tab" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
            <a class="nav-link" href="#tab-<?php echo esc_attr($key); ?>">
              <?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php foreach ($product_tabs as $key => $product_tab) : ?>
      <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
        <?php
        if (isset($product_tab['callback'])) {
          call_user_func($product_tab['callback'], $key, $product_tab);
        }
        ?>
      </div>
    <?php endforeach; ?>

    <?php do_action('woocommerce_product_after_tabs'); ?>
  </div>
      -->
<?php endif; ?>
<div ></div>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas1" aria-controls="offcanvasRight">Toggle right offcanvas</button>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasRight">Toggle right offcanvas</button>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas3" aria-controls="offcanvasRight">Toggle right offcanvas</button>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas1" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <?php the_content(  ); ?>
  </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...2
  </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas3" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    ...3
  </div>
</div>