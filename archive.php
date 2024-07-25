<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alphawell
 */

get_header(); ?>
<?php $theme_path = get_stylesheet_directory_uri(); ?>

<div id="content" class="site-content container">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>
  <main id="main" class="site-main">
    <div class="row">
      <div class="col">


          <!-- Title & Description -->
          <header class="page-header category-header mb-4">
            <p class="category-above-title text-center">Category</p>
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
          </header>
      </div>
    </div>
          <!-- Grid Layout -->
          <!--
<?php // if (have_posts()) : ?>
<?php // while (have_posts()) : the_post(); ?>
<div class="card horizontal mb-4">
<div class="row">
<?php // if (has_post_thumbnail())
//  echo '<div class="card-img-left-md col-lg-5 category_card">' . get_the_post_thumbnail(null, 'medium') . '</div>';
?>
<div class="col">
<div class="card-body">
<?php // alphawell_category_badge(); ?>
<?php // $categories = get_the_category();
//	if ( ! empty( $categories ) ) {
//	echo '<a id="'. esc_html( $categories[0]->name ) .'" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
//	} ?>
<h2 class="blog-post-title">
<a href="<?php // the_permalink(); ?>">
<?php // the_title(); ?>
</a>
</h2>
<div class="card-text mt-auto">
<?php // the_excerpt(); ?> <a class="read-more" href="<?php // the_permalink(); ?>"><?php // _e('READ MORE', 'alphawell'); ?></a>
</div>
<?php // alphawell_tags(); ?>
<?php // if ('post' === get_post_type()) : ?>
<small class="text-muted mb-2">
<?php
//  alphawell_date();
//  alphawell_author();
//  alphawell_comments();
//  alphawell_edit();
?>
</small>
<?php // endif; ?>
</div>
</div>
</div>
</div>
<?php // endwhile; ?>
<?php // endif; ?>
<div>
<?php // alphawell_pagination(); ?>
</div>
</main>
</div>
<?php // get_sidebar(); ?>
</div>
</div>
</div> -->

    <div class="row post_list">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <div class="col-md-5 blog_post_element">
        <div class="blog_post_thumbnail photos__content">
          <a href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>"><?php the_post_thumbnail( array('', 300)); ?></a></div>
          <div class="blog_post_description">
            <div class="blog_post_category">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="'. esc_html( $categories[0]->name ) .'" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                } 
              ?>
            </div>
            <div>
              <div class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <div class="blog_post_excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(20); ?></a>
            </div>
          </div>
          <div style="margin: 2% 0 4%;">
            <a class="blog_readmore" href="<?php the_permalink(); ?>">READ MORE</a>
            <img src="<?php echo $theme_path; ?>/assets/img/Arrow-96north-blog.svg" width="15" alt="arrow right">
          </div>
          <div class="blog_post_date"><?php the_date('j F'); ?></div>
        </div>
      </div>
      <?php endwhile; ?>
       <?php endif; ?>
    </div>
    </main>
  </div>
</div>

<?php get_footer();