<?php
/*
	 * Template Post Type: post
	 */

get_header();  ?>
<?php $theme_path = get_stylesheet_directory_uri(); ?>

	<section>
		<div class="container">
			<div class="blog_post_head_info">
				<?php $categories = get_the_category(); 
				if( $categories[0] ) {
					echo '<a href="' . get_category_link( $categories[0]->term_id ) . '">' . $categories[0]->name . '</a>';
				} ?>
				<h1><?php the_title(); ?></h1>
				<p>
					<?php// echo sprintf( __('By %s on '), get_the_author() ); the_date( 'j F, Y' ); ?> 
				</p>
			</div>
			<div class="post-content_text-container margin-t-3" id="blog_post_trigger">
				<?php the_content(); ?>
			</div>
			<div class="row margin-t-3">
					<?php
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
			setup_postdata($post); ?>
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
                    <div  style="margin: 2% 0 4%;"><a class="blog_readmore" href="<?php the_permalink(); ?>">READ MORE</a><img src="<?php echo $theme_path; ?>/assets/img/Arrow-96north-blog.svg" width="15" alt="arrow right"></div>
                    <div class="blog_post_date"><?php the_time('j F'); ?></div>
                </div>
            </div>
		<?php } wp_reset_postdata(); ?>
							</div>
		</div>
	</section>


<?php get_footer(); ?>