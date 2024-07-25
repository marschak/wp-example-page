<?php

/**
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @version 7.0.1
 */

defined('ABSPATH') || exit;
$theme_path = get_stylesheet_directory_uri();
global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
?>
<div class="container">
  <?php do_action('woocommerce_before_single_product'); ?>
</div>
<?php
if (post_password_required()) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-5">
        <div class="float">
          <?php
          /**
           * Hook: woocommerce_before_single_product_summary.
           *
           * @hooked woocommerce_show_product_sale_flash - 10
           * @hooked woocommerce_show_product_images - 20
           */
          //do_action( 'woocommerce_before_single_product_summary' );
          ?>

          <div class="product-gallery ">
            <?php

            if (wp_is_mobile()) {
              echo '<img src="' . wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'product-mob', true) . '" class="singl-prod-image" width="400" height="400" alt="' . get_the_title() . ' Candle"/>';
            } else {
              echo '<img src="' . wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'product-desctop', true) . '" class="singl-prod-image"  width="600" height="600" alt="' . get_the_title() . ' Candle"/>';
            }
            //gallery
            $attachment_ids = $product->get_gallery_image_ids();
            foreach ($attachment_ids as $attachment_id) {
              if (wp_is_mobile()) {
                echo '<img data-lazy="' . wp_get_attachment_image_url($attachment_id, 'product-mob', true) . '" class="singl-prod-image" loading="lazy" width="400" height="400"/>';
              } else {
                echo '<img data-lazy="' . wp_get_attachment_image_url($attachment_id, 'product-desctop', true) . '" class="singl-prod-image" loading="lazy" width="600" height="600"/>';
              }
            }
            ?>
          </div>
          <div class="product-gallery-thumbnail">
            <?php

            echo '<img data-lazy="' . wp_get_attachment_image_url(get_post_thumbnail_id($product->get_id()), 'thumbnail', true) . '" class="singl-prod-image" loading="lazy" width="150" height="150" >';
            //gallery
            $attachment_ids = $product->get_gallery_image_ids();
            foreach ($attachment_ids as $attachment_id) {
              echo '<img data-lazy="' . wp_get_attachment_image_url($attachment_id, 'thumbnail', true) . '" class="singl-prod-image" loading="lazy" width="150" height="150" >';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-7">
        <div class="product-info ">
          <?php
          woocommerce_template_single_title();
          woocommerce_template_single_rating();
          woocommerce_template_single_excerpt();
          //  echo wc_get_stock_html($product);
          // echo do_shortcode( '[woocommerce_multi_inventory_change_inventory select_store_text="Select Store" your_store_text="Your Store: "]');
          ?>

          <div class="buy-btn-section">
            <?php
            woocommerce_template_single_price();
            ?>
            <div class="buy-btn-block">
              <?php
              //	woocommerce_template_single_add_to_cart();

  //https://geotargetingwp.com/docs/geotargetingwp/functions-api
              if (geot_target(['UK', 'GB'])) {
              
                if (get_field('amazon_uk')) {
              ?>
                  <!--<span>-or- </span> --><a href="<?php echo get_field('amazon_uk'); ?>" class="btn  amazon-btn">Buy on Amazon</a>
                <?php
                } else {
                 echo "<p>Out Of Stock</p>";
                }
              } else if (geot_target(['DE'])) {
                if (get_field('amazon_de')) {
                ?>
                  <!--<span>-or- </span> --> <a href="<?php echo get_field('amazon_de'); ?>" class="btn  amazon-btn">Buy on Amazon</a>
                <?php
              } else {
                echo "<p>Out Of Stock</p>";
              }
              } else {
                if (get_field('amazon_us')) {
                ?>
                  <!--<span>-or- </span> --> <a href="<?php echo get_field('amazon_us'); ?>" class="btn  amazon-btn">Buy on Amazon</a>
              <?php
            } else {
                 echo "<p>Out Of Stock</p>";
                }
              }

              ?>
            </div>
          </div>
          <div class="add-to-cart-info-block">
            <div class="add-to-cart-info-block_extra"><img src="<?php echo $theme_path; ?>/assets/img/lock-2.svg" width="25" alt="security">
              <p>Secure transaction</p>
            </div>
            <div class="add-to-cart-info-block_extra"><img src="<?php echo $theme_path; ?>/assets/img/money.svg" width="25" alt="delivery">
              <p>Money-back guarantee</p>
            </div>
            <div class="add-to-cart-info-block_extra"><img src="<?php echo $theme_path; ?>/assets/img/fast-delivery-truck.svg" width="25" alt="delivery">
              <p>Free shipping</p>
            </div>
          </div>

          <?php
          /**
           * Hook: woocommerce_single_product_summary.
           *
           * @hooked woocommerce_template_single_title - 5
           * @hooked woocommerce_template_single_rating - 10
           * @hooked woocommerce_template_single_price - 10
           * @hooked woocommerce_template_single_excerpt - 20
           * @hooked woocommerce_template_single_add_to_cart - 30
           * @hooked woocommerce_template_single_meta - 40
           * @hooked woocommerce_template_single_sharing - 50
           * @hooked WC_Structured_Data::generate_product_data() - 60
           */

          //do_action( 'woocommerce_single_product_summary' );
          ?>
          <?php if (have_rows('spec')) : ?>

            <?php while (have_rows('spec')) : the_row(); ?>

              <table class="table table-striped">

                <tbody>
                  <tr>
                    <th scope="row">Scent</th>
                    <td><?php the_sub_field('scent'); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Candle Type</th>
                    <td><?php the_sub_field('candle_type'); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Burn Time</th>
                    <td><?php the_sub_field('burn_time'); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">Dimensions Measures</th>
                    <td><?php the_sub_field('dimensions_measures'); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Total Weight </th>
                    <td><?php the_sub_field('total_weight'); ?> </td>
                  </tr>
                  <tr>
                    <th scope="row">Net Weight</th>
                    <td> <?php the_sub_field('net_weight'); ?></td>
                  </tr>
                </tbody>
              </table>

            <?php endwhile; ?>

          <?php endif; ?>
          <?php if (get_field('product_text_under_tabble')) {
            the_field('product_text_under_tabble');
          } ?>
          <div style="margin: 30px 0;"><?php if (get_field('notes_gallery_top_text')) {
                                          the_field('notes_gallery_top_text');
                                        } ?></div>
          <?php if (have_rows('notes_gallery')) : ?>
            <?php while (have_rows('notes_gallery')) : the_row(); ?>

              <div class="product-notes-gallery">

                <div class="product-notes-gallery_item">
                  <p class="product-notes-gallery_item-title"><?php the_sub_field('note_one_title'); ?></p>
                  <?php if (get_sub_field('note_one_image')) : ?>
                    <img src="<?php the_sub_field('note_one_image'); ?>" width="120" height="120">
                  <?php endif ?>
                  <p class="product-notes-gallery_item-text"><?php the_sub_field('note_one_description'); ?></p>
                </div>

                <div class="product-notes-gallery_item">
                  <p class="product-notes-gallery_item-title"><?php the_sub_field('note_two_title'); ?></p>
                  <?php if (get_sub_field('note_two_image')) : ?>
                    <img src="<?php the_sub_field('note_two_image'); ?>" width="120" height="120">
                  <?php endif ?>
                  <p class="product-notes-gallery_item-text"><?php the_sub_field('note_two_description'); ?></p>
                </div>

                <div class="product-notes-gallery_item">
                  <p class="product-notes-gallery_item-title"><?php the_sub_field('note_three_title'); ?></p>
                  <?php if (get_sub_field('note_three_image')) : ?>
                    <img src="<?php the_sub_field('note_three_image'); ?>" width="120" height="120">
                  <?php endif ?>
                  <p class="product-notes-gallery_item-text"><?php the_sub_field('note_three_description'); ?></p>
                </div>

              </div>

            <?php endwhile; ?>
          <?php endif; ?>

          <div style="margin: 15px 0 30px 0;"><?php the_field('notes_gallery_bottom_text'); ?></div>

          <div class="accordion" id="accordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  AROMATHERAPY BENEFITS
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <?php if (have_rows('description')) : ?>
              <?php while (have_rows('description')) : the_row(); ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      DESIGN AND PACKAGING
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <?php the_sub_field('design_and_packaging'); ?>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      SUSTAINABILITY
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <?php the_sub_field('sustainability'); ?>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      CANDLE CARE AND SAFETY
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                    <div class="accordion-body">
                      <?php the_sub_field('candle_care_and_safety'); ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php if (get_field('more_info')) : ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    More info
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                  <div class="accordion-body">
                    <?php the_field('more_info'); ?>
                  </div>
                </div>
              </div>
            <?php endif; ?>
            <div class="accordion-item" id="review">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prodreviews" aria-expanded="false" aria-controls="reviews">
                  Reviews
                </button>
              </h2>
              <div id="prodreviews" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
                <div class="accordion-body">
                  <?php comments_template(); ?>
                </div>
              </div>

            </div>
          </div>
          <?php //	woocommerce_output_product_data_tabs(); // float sidebar btn in tabs.php 
          ?>
        </div>
      </div>
      <div class="woocommerce columns-4 related-prod">
        <?php
        // woocommerce_upsell_display();
        woocommerce_output_related_products();

        ?>
      </div>
    </div>
  </div>
</div>





<?php //do_action( 'woocommerce_after_single_product_summary' );
?>