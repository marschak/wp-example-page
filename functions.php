<?php

/**
 * alphawell functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alphawell
 */


// WooCommerce
require get_template_directory() . '/woocommerce/woocommerce-functions.php';
 add_theme_support( 'woocommerce' );

 if ( function_exists( 'add_image_size' ) ) {

	add_image_size( 'product-mob', 400, 400, true );
  	add_image_size( 'product-desctop', 1000, 1000, true );
}

// WooCommerce END
add_action( 'widgets_init', 'alphawell_widgets_init' );
function alphawell_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'currency swither', 'alphawell' ),
		'id'            => 'currency-swither',
		'before_widget' => '<div id="%1$s" class="widget currency-swither %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	/*register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) ); */
}
/**
 * Remove WooCommerce breadcrumbs 
 */
add_action( 'init', 'my_remove_breadcrumbs' );
 
function my_remove_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// Register Bootstrap 5 Nav Walker
if (!function_exists('register_navwalker')) :
  function register_navwalker() {
    require_once('inc/class-bootstrap-5-navwalker.php');
    // Register Menus
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('footer-menu', 'Footer menu');
  }
endif;
add_action('after_setup_theme', 'register_navwalker');
// Register Bootstrap 5 Nav Walker END


// Register Comment List
if (!function_exists('register_comment_list')) :
  function register_comment_list() {
    // Register Comment List
    require_once('inc/comment-list.php');
  }
endif;
add_action('after_setup_theme', 'register_comment_list');
// Register Comment List END


if (!function_exists('alphawell_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function alphawell_setup() {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on alphawell, use a find and replace
		 * to change 'alphawell' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('alphawell', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support('html5', array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
  }
endif;
add_action('after_setup_theme', 'alphawell_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alphawell_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('alphawell_content_width', 640);
}
add_action('after_setup_theme', 'alphawell_content_width', 0);




//Enqueue scripts and styles
function alphawell_scripts() {

  // Get modification time. Enqueue files with modification date to prevent browser from loading cached scripts and styles when file content changes.
  $modificated_styleCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/style.css'));
  if (file_exists(get_template_directory() . '/css/main.css')) {
    $modificated_alphawellCss = date('YmdHi', filemtime(get_template_directory() . '/css/main.css'));
  } else {
    $modificated_alphawellCss = 1;
  }
  $modificated_bootstrapJs = date('YmdHi', filemtime(get_template_directory() . '/js/lib/bootstrap.bundle.min.js'));
  $modificated_themeJs = date('YmdHi', filemtime(get_template_directory() . '/js/theme.js'));

  // Style CSS
  wp_enqueue_style('alphawell-style', get_stylesheet_uri(), array(), $modificated_styleCss);

  // alphawell
  require_once 'inc/scss-compiler.php';
  alphawell_compile_scss();
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), $modificated_alphawellCss);

  // Bootstrap JS
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/lib/bootstrap.bundle.min.js', array(), $modificated_bootstrapJs, true);

  // Theme JS
  wp_enqueue_script('alphawell-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), $modificated_themeJs, true);

  // IE Warning
  wp_localize_script('alphawell-script', 'alphawell', array(
    'ie_title'                 => __('Internet Explorer detected', 'alphawell'),
    'ie_limited_functionality' => __('This website will offer limited functionality in this browser.', 'alphawell'),
    'ie_modern_browsers_1'     => __('Please use a modern and secure web browser like', 'alphawell'),
    'ie_modern_browsers_2'     => __(' <a href="https://www.mozilla.org/firefox/" target="_blank">Mozilla Firefox</a>, <a href="https://www.google.com/chrome/" target="_blank">Google Chrome</a>, <a href="https://www.opera.com/" target="_blank">Opera</a> ', 'alphawell'),
    'ie_modern_browsers_3'     => __('or', 'alphawell'),
    'ie_modern_browsers_4'     => __(' <a href="https://www.microsoft.com/edge" target="_blank">Microsoft Edge</a> ', 'alphawell'),
    'ie_modern_browsers_5'     => __('to display this site correctly.', 'alphawell'),
  ));
  // IE Warning End

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'alphawell_scripts');
//Enqueue scripts and styles END

add_action( 'wp_print_styles', 'add_styles' );
if ( !function_exists( 'add_styles' ) ) {
	function add_styles() {
	    if ( is_admin() ) return false;
		// wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
		wp_enqueue_style( 'sass', get_stylesheet_directory_uri() . '/assets/css/common.css' );
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/styles.css' );
    wp_enqueue_style( 'homepage-header', get_stylesheet_directory_uri() . '/assets/css/homepage-header.css' );
    if (is_page_template('templates/homepage.php')) {
      wp_enqueue_style( 'homepagestyle', get_stylesheet_directory_uri() . '/assets/css/homepage.css' );
    }
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/optimized-bootstrap.css' );
    wp_enqueue_style( 'aos', get_stylesheet_directory_uri() . '/assets/css/aos.css' );
    if (is_page_template('templates/blog.php') || is_category()) {
      wp_enqueue_style( 'blog-styles', get_stylesheet_directory_uri() . '/assets/css/blog-styles.css' );
    }
    if ( is_single()) {
      wp_enqueue_style( 'blog-post-page', get_stylesheet_directory_uri() . '/assets/css/blog-post-page.css' );
    }
    if (is_page_template('templates/discount.php')) {
      wp_enqueue_style( 'discount', get_stylesheet_directory_uri() . '/assets/css/discount-page.css' );
    }
	}
}

add_action( 'wp_footer', 'add_scripts' );
if ( !function_exists( 'add_scripts' ) ) { 
	function add_scripts() { 
    if ( is_admin() ) return false;
    if (is_product()) {
      wp_enqueue_script( 'product-slider', get_stylesheet_directory_uri() . '/assets/js/product-page-swiper.js', '', '', true );
    }
	  wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', '', '3.6.0', true );
		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/script.js', '', '', true );
		wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . '/assets/js/aos.js', '', '', true );
		wp_enqueue_script( 'homepagejs', get_stylesheet_directory_uri() . '/assets/js/homepage.js', '', '', true );
    if (is_page_template('templates/discount.php')) {
      wp_enqueue_script( 'discount', get_stylesheet_directory_uri() . '/assets/js/discount.js' );
    }
	
 // if (is_singular( 'product' )) {
 //   wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
 //   wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );
	//  wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '1.8.1', true );
 // }
 }
}
function slick_enqueue_scripts() {
  if (is_singular( 'product' )) {
    wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );
    wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );
	  wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '1.8.1', true );
  }
}

add_action( 'wp_enqueue_scripts', 'slick_enqueue_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}


// Amount of posts/products in category
if (!function_exists('wpsites_query')) :

  function wpsites_query($query) {
    if ($query->is_archive() && $query->is_main_query() && !is_admin()) {
      $query->set('posts_per_page', 24);
    }
  }
  add_action('pre_get_posts', 'wpsites_query');

endif;
// Amount of posts/products in category END


// Pagination Categories
if (!function_exists('alphawell_pagination')) :

  function alphawell_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    // default page to one if not provided
    if(empty($paged)) $paged = 1;
    if ($pages == '') {
      global $wp_query;
      $pages = $wp_query->max_num_pages;

      if (!$pages)
        $pages = 1;
    }

    if (1 != $pages) {
      echo '<nav aria-label="Page navigation" role="navigation">';
      echo '<span class="sr-only">Page navigation</span>';
      echo '<ul class="pagination justify-content-center ft-wpbs mb-4">';


      if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(1) . '" aria-label="First Page">&laquo;</a></li>';

      if ($paged > 1 && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '" aria-label="Previous Page">&lsaquo;</a></li>';

      for ($i = 1; $i <= $pages; $i++) {
        if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems))
          echo ($paged == $i) ? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '"><span class="sr-only">Page </span>' . $i . '</a></li>';
      }

      if ($paged < $pages && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(($paged === 0 ? 1 : $paged) + 1) . '" aria-label="Next Page">&rsaquo;</a></li>';

      if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages)
        echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($pages) . '" aria-label="Last Page">&raquo;</a></li>';

      echo '</ul>';
      echo '</nav>';
      // Uncomment this if you want to show [Page 2 of 30]
      // echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';	 	
    }
  }

endif;
//Pagination Categories END


// Pagination Buttons Single Posts
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
  $code = 'class="page-link"';
  return str_replace('<a href=', '<a ' . $code . ' href=', $output);
}
// Pagination Buttons Single Posts END


// Excerpt to pages
add_post_type_support('page', 'excerpt');
// Excerpt to pages END


// Breadcrumb
if (!function_exists('the_breadcrumb')) :
  function the_breadcrumb() {
    if (!is_home()) {
      echo '<nav class="breadcrumb mb-4 mt-2 bg-light py-2 px-3 small rounded">';
      echo '<a href="' . home_url('/') . '">' . ('<i class="fa-solid fa-house"></i>') . '</a><span class="divider">&nbsp;/&nbsp;</span>';
      if (is_category() || is_single()) {
        the_category(' <span class="divider">&nbsp;/&nbsp;</span> ');
        if (is_single()) {
          echo ' <span class="divider">&nbsp;/&nbsp;</span> ';
          the_title();
        }
      } elseif (is_page()) {
        echo the_title();
      }
      echo '</nav>';
    }
  }
  add_filter('breadcrumbs', 'breadcrumbs');
endif;
// Breadcrumb END


// Comment Button
function alphawell_comment_form($args) {
  $args['class_submit'] = 'btn btn-outline-primary'; // since WP 4.1    
  return $args;
}
add_filter('comment_form_defaults', 'alphawell_comment_form');
// Comment Button END


// Password protected form
function alphawell_pw_form() {
  $output = '
		  <form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post" class="form-inline">' . "\n"
    . '<input name="post_password" type="password" size="" class="form-control me-2 my-1" placeholder="' . __('Password', 'alphawell') . '"/>' . "\n"
    . '<input type="submit" class="btn btn-outline-primary my-1" name="Submit" value="' . __('Submit', 'alphawell') . '" />' . "\n"
    . '</p>' . "\n"
    . '</form>' . "\n";
  return $output;
}
add_filter("the_password_form", "alphawell_pw_form");
// Password protected form END


// Allow HTML in term (category, tag) descriptions
foreach (array('pre_term_description') as $filter) {
  remove_filter($filter, 'wp_filter_kses');
  if (!current_user_can('unfiltered_html')) {
    add_filter($filter, 'wp_filter_post_kses');
  }
}

foreach (array('term_description') as $filter) {
  remove_filter($filter, 'wp_kses_data');
}
// Allow HTML in term (category, tag) descriptions END


// Allow HTML in author bio
remove_filter('pre_user_description', 'wp_filter_kses');
add_filter('pre_user_description', 'wp_filter_post_kses');
// Allow HTML in author bio END


// Hook after #primary
function bs_after_primary() {
  do_action('bs_after_primary');
}
// Hook after #primary END


// Open links in comments in new tab
if (!function_exists('bs_comment_links_in_new_tab')) :
  function bs_comment_links_in_new_tab($text) {
    return str_replace('<a', '<a target="_blank" rel=”nofollow”', $text);
  }
  add_filter('comment_text', 'bs_comment_links_in_new_tab');
endif;
// Open links in comments in new tab END


// Disable Gutenberg blocks in widgets (WordPress 5.8)
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');
// Disable Gutenberg blocks in widgets (WordPress 5.8) END

/*add shortcodes*/
add_shortcode( 'product_grid', 'shortcode_product_grid' );

function shortcode_product_grid() {
	ob_start();
		get_template_part( 'templates/shortcodes/product-grid' );
	return ob_get_clean();
}
/*add shortcodes end*/

/*excerpt-length*/
function my_excerpt_length( $length ) {
    return 12; 
}
add_filter( 'excerpt_length', 'my_excerpt_length' );
function new_excerpt_more($more) {
       global $post;
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
/*excerpt-length-end*/

/*add class for query*/
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

/*remove "Category" for category name */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('', false);
  } elseif (is_tag()) {
      $title = single_tag_title('', false);
  } elseif (is_author()) {
      $title = '<span class="vcard">' . get_the_author() . '</span>';
  } elseif (is_tax()) { //for custom post types
      $title = sprintf(__('%1$s'), single_term_title('', false));
  } elseif (is_post_type_archive()) {
      $title = post_type_archive_title('', false);
  }
  return $title;
});



/*
*   shiping zones 
*/

add_action('woocommerce_checkout_update_order_meta', function ($order_id, $posted) {

$shipping_packages =  WC()->cart->get_shipping_packages();
$shipping_zone = wc_get_shipping_zone(reset($shipping_packages));
//$zone_id   = $shipping_zone->get_id(); 
$zone_name = $shipping_zone->get_zone_name();

$order = wc_get_order($order_id);

	
$order->update_meta_data('order-zone',  $zone_name);
$order->save();
}, 10, 2);


//add_action( 'wp_insert_post', 'process_offline_order', 10, 3 );
add_action( 'save_post_shop_order', 'process_offline_order', 10, 3 );
function process_offline_order( $post_id, $post, $update ){

    $order = new WC_Order( $post_id ); 
	
	$data = $order->get_data(); 
	$country_code = $data['shipping']['country'];
    $defined_zones = WC_Shipping_Zones::get_zones();

// Loop through defined shipping zones
foreach ($defined_zones as $zone) {
	foreach ($zone['zone_locations'] as $location ) {
        if ( $country_code === $location->code ) {
            $zone_name = $zone['zone_name'];
            $country_found = true;
            break; // Country found stop "locations" loop
        }
    }
}
      update_post_meta( $post_id, 'order-zone', $zone_name ); 
}


// display the extra data in the order admin panel
function display_order_data_in_admin( $order ){  ?>
<div class="order_data_column">
    <h4><?php _e( 'Shipping zone' ); ?></h4>
    <?php 
      
        echo '<p><strong>' . __( 'Shipping zone' ) . ':</strong>' . get_post_meta( $order->id, 'order-zone', true ) . '</p>'; ?>
</div>
<?php }
add_action( 'woocommerce_admin_order_data_after_order_details', 'display_order_data_in_admin' );


add_filter('woocommerce_rest_orders_prepare_object_query', function ($args) {

/*
	if ($_GET['consumer_key'] == 'ck_49e6fee05cc2590389be040972e8df2398dd68fa') {
		$args['meta_query'][] = array(
			'key'   => 'order-zone',
			'value' => 'UK',
		);
	}
  

if ( $_SERVER['HTTP_USER_AGENT'] == 'WooCommerce API Client-PHP/1.3.0'){
	//echo $_SERVER['HTTP_USER_AGENT'];
		$args['meta_query'][] = array(
			'key'   => 'order-zone',
			'value' => 'EU',
		);
}*/
	//echo $_SERVER['HTTP_USER_AGENT'];
	if ($_GET['consumer_key'] == 'cck_0fbbe2a317e6d058621ff506878a4b658a693dce') {
		$args['meta_query'][] = array(
			'key'   => 'order-zone',
			'value' => 'EU',
		);
	}

	return $args;
}, 10, 2);

/*
*   shiping zones  end

* Оптимизация скриптов WooCommerce
* Убираем WooCommerce Generator tag, стили, и скрипты для страниц, не относящихся к WooCommerce.
*/
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
function child_manage_woocommerce_styles() {
    //убираем generator meta tag
    remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
    //для начала проверяем, активен ли WooCommerce, дабы избежать ошибок
    if ( function_exists( 'is_woocommerce' ) ) {
        //отменяем загрузку скриптов и стилей
        if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
           wp_dequeue_style( 'wc-blocks-style' );
           wp_dequeue_style( 'woocommerce' );
            wp_dequeue_script( 'wc_price_slider' );
            wp_dequeue_script( 'wc-single-product' );
           wp_dequeue_script( 'wc-add-to-cart' );
           // wp_dequeue_script( 'wc-cart-fragments' );
            wp_dequeue_script( 'wc-checkout' );
            wp_dequeue_script( 'wc-add-to-cart-variation' );
            wp_dequeue_script( 'wc-single-product' );
           wp_dequeue_script( 'wc-cart' );
           wp_dequeue_script( 'wc-chosen' );
            wp_dequeue_script( 'woocommerce' );
            wp_dequeue_script( 'prettyPhoto' );
            wp_dequeue_script( 'prettyPhoto-init' );
           wp_dequeue_script( 'jquery-blockui' );
           wp_dequeue_script( 'jquery-placeholder' );
            wp_dequeue_script( 'fancybox' );
           wp_dequeue_script( 'jqueryui' );
        }
        if ( is_woocommerce() ) {
          wp_dequeue_style( 'wc-blocks-style' );
      }
    }
}
add_action( 'wp_enqueue_scripts', 'disable_gutenberd_styles', 999 );
 
function disable_gutenberd_styles() {
 
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
 
}

/* Add custom widget */

// function north_block_render_callback($block) {
// 	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
// 	$slug = str_replace('acf/', '', $block['name']);

// 	// include a template part from within the "template-parts/block" folder
// 	if (file_exists(get_theme_file_path("/templates/blocks/content-{$slug}.php"))) {
// 		include(get_theme_file_path("/templates/blocks/content-{$slug}.php"));
// 	}
// }

// add_action('acf/init', 'north_acf_init');
// function north_acf_init() {

// 	// check function exists
// 	if (function_exists('acf_register_block')) {

//     acf_register_block(array(
// 			'name'            => 'blog-image-link',
// 			'title'           => 'Blog image link',
// 			'description'     => '',
// 			'render_callback' => 'north_block_render_callback',
// 			'category'        => 'widgets',
// 			'icon'            => 'format-image'
// 		));
// 	}
// }


// Add class atr to nav menu link
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );



add_action('woocommerce_product_options_sku','add_barcode_custom_field' );
function add_barcode_custom_field(){
    woocommerce_wp_text_input( array(
        'id'          => '_barcode',
        'label'       => __('Barcode','woocommerce'),
        'placeholder' => 'Scan Barcode',
        'desc_tip'    => 'true',
        'description' => __('Scan barcode.','woocommerce')
    ) ); 
}

add_action( 'woocommerce_process_product_meta', 'save_barcode_custom_field', 10, 1 );
function save_barcode_custom_field( $post_id ){
    if( isset($_POST['_barcode']) )
        update_post_meta( $post_id, '_barcode', esc_attr( $_POST['_barcode'] ) );
}

// add_action('woocommerce_product_options_stock','add_multiwarehouse_custom_field' );
// function add_multiwarehouse_custom_field(){

//   echo '<div class="stock_fields show_if_simple show_if_variable">';

//     woocommerce_wp_text_input(   array(
//       'id'                => '_stock',
//       'value'             => wc_stock_amount( $product_object->get_stock_quantity( 'edit' ) ),
//       'label'             => __( 'Stock quantity UK', 'woocommerce' ),
//       'desc_tip'          => true,
//       'description'       => __( 'Stock quantity. If this is a variable product this value will be used to control stock for all variations, unless you define stock at variation level.', 'woocommerce' ),
//       'type'              => 'number',
//       'custom_attributes' => array(
//         'step' => 'any',
//       ),
//       'data_type'         => 'stock',
//     ) );

//     echo '<input type="hidden" name="_original_stock" value="' . esc_attr( wc_stock_amount( $product_object->get_stock_quantity( 'edit' ) ) ) . '" />';
// };
