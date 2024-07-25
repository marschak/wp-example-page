<?php
/**
 * blog
 * @package alphawell
 * Template Name: blog
 */
get_header(); ?>
<?php $theme_path = get_stylesheet_directory_uri(); ?>

<div class="container">
<?php
$my_posts = get_posts( array(
	'numberposts' => 0,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
?>
    <div class="row post_list">
        <?php foreach( $my_posts as $post ){
            setup_postdata( $post );

            ?>
            <div class="col-md-5 blog_post_element">
                <div class="blog_post_thumbnail photos__content"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('', 300)); ?></a></div>
                <div class="blog_post_description">
                    <div class="blog_post_category">
						<?php $categories = get_the_category();
							if ( ! empty( $categories ) ) {
							echo '<a class="'. esc_html( $categories[0]->name ) .'" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
						} ?>
					</div>
                    <div>
                        <div class="blog_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="blog_post_excerpt"><a href="<?php the_permalink(); ?>"><?php the_excerpt(20); ?></a></div>
                    </div>
                    <div  style="margin: 2% 0 4%;"><a class="blog_readmore" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">READ MORE</a><img src="<?php echo $theme_path; ?>/assets/img/Arrow-96north-blog.svg" width="15" alt="arrow right"></div>
                    <div class="blog_post_date"><?php the_time('j F'); ?></div>
                </div>
            </div>
        <?php
}

wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer(); ?>