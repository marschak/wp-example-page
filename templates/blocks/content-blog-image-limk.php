<?php
/**
 * Block Name: Blog image link
 */
?>


<?php if( get_field('block_image_link')) { ?>

<div class="blog_post_element">
    <?php if( get_field('image') ): ?>
        <div class="blog-content-image-block">
            <a href="<?php the_field('image_link'); ?>">
                <img src="<?php the_field('image'); ?>" 
                    alt="<?php the_field('alt_image'); ?>"
                    <?php if( get_field('lazy_loading') ): ?>
                        <?php echo 'loading="lazy"'; ?>
	                <?php endif; ?>
                />
            </a>
        </div>
    <?php endif; ?>
</div>

<?php } ?>