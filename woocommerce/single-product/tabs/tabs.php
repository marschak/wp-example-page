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
?>

<div  class="offcanvas-tabs">
<button class="btn side-desc-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas1" aria-controls="offcanvasRight">Description</button>
<button class="btn side-desc-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasRight">Candle Care</button>
<button class="btn side-desc-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas3" aria-controls="offcanvasRight">Candle Safety</button>
<button class="btn side-desc-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas4" aria-controls="offcanvasRight">Rewiews</button>
</div>
