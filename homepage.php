<?php
/**
 * Homepage
 * @package alphawell
 * Template Name: Homepage
 */
get_header('home'); ?>

<?php $theme_path = get_stylesheet_directory_uri(); ?>
	<div class="container pt-4">
<section>
	<div class="row sticky margin-t-5 margin-b-3">
		<div class="col-sm-6">
			<h2>Your Sensory <br>
				Travel Guide</h2>
		</div>
		<div class="col-sm-6">
			<p>At 96NORTH®, we’ve captured the essence of the world’s richest natural aromas. Each of our crafts contains the fragrance of a unique place far away. <br>
				Let our fragrances carry you to distant countries, places, and ambiances. Embark on a journey to lush fields, exotic beaches, mystic mountains and the deep blue sea from the sanctuary of your home. Allow yourself to find peace and connection in latitudes only your senses can reach.
				<br><br>
				Welcome to 96NORTH®, your senses’ travel companion. Where do you want to be today?
			</p>
			<button><a class="white-text" href="/shop">SHOP NOW</a></button>
		</div>
	</div>
</section>
<div data-aos="fade-up" data-aos-duration="500" class="separator"></div>
<section>
	<div class="row centered-blocks margin-t-3">
		<div class="col-sm-6">
			<h2 data-aos="fade-up" data-aos-duration="300">Where do you <br>want to go?</h2>
		</div>
		<div class="col-sm-6">
			<p data-aos="fade-up" data-aos-duration="300">Welcome to 96NORTH®, your senses’ travel companion. Where do you want to be today?</p>
		</div>
	</div>
	<div class="row margin-t-1 d-none d-lg-flex">
		<div class="col-sm-6 margin-b-1">
			<?php $madagascar_vanilla_candle = wc_get_product( '32640' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/madagascar.jpg');">
				<p class="title"><?php echo $madagascar_vanilla_candle->get_name(); ?></p>
				<a class="info" href="<?php echo esc_url( get_permalink( '32640' ) ); ?>" >
					<div class="img2"><?php echo $madagascar_vanilla_candle->get_image(); ?></div>
					<div class="desc">
						<h3>Luxury Soy Candles</h3>
						<p><span><?php echo $madagascar_vanilla_candle->get_name(); ?></span></p>
						<p><?php echo $madagascar_vanilla_candle->get_price_html(); ?></p>
						<button class="float-up home-btn-light">SHOP NOW</button>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-6 margin-b-1">
			<?php $french_lavender_candle = wc_get_product( '32641' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/lavander.jpg');">
				<p class="title"><?php echo $french_lavender_candle->get_name(); ?></p>
				<a class="info" href="<?php echo esc_url( get_permalink( '32641' ) ); ?>" >
					<div class="img2"><?php echo $french_lavender_candle->get_image(); ?></div>
					<div class="desc">
						<h3>Luxury Soy Candles</h3>
						<p><span><?php echo $french_lavender_candle->get_name(); ?></span></p>
						<p><?php echo $french_lavender_candle->get_price_html(); ?></p>
						<button class="float-up home-btn-light">SHOP NOW</button>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-6 margin-b-1">
			<?php $tropical_coconut_candle = wc_get_product( '32642' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/coconut.jpg');">
				<p class="title"><?php echo $tropical_coconut_candle->get_name(); ?></p>
				<a class="info" href="<?php echo esc_url( get_permalink( '32642' ) ); ?>" >
					<div class="img2"><?php echo $tropical_coconut_candle->get_image(); ?></div>
					<div class="desc">
						<h3>Luxury Soy Candles</h3>
						<p><span><?php echo $tropical_coconut_candle->get_name(); ?></span></p>
						<p><?php echo $tropical_coconut_candle->get_price_html(); ?></p>
						<button class="float-up home-btn-light">SHOP NOW</button>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-6 margin-b-1">
			<?php $pumpkin_spice_candle = wc_get_product( '33632' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/pumpkins.jpg');">
				<p class="title"><?php echo $pumpkin_spice_candle->get_name(); ?></p>
				<a class="info" href="<?php echo esc_url( get_permalink( '33632' ) ); ?>">
					<div class="img2"><?php echo $pumpkin_spice_candle->get_image(); ?></div>
					<div class="desc">
						<h3>Luxury Soy Candles</h3>
						<p><span><?php echo $pumpkin_spice_candle->get_name(); ?></span></p>
						<p><?php echo $pumpkin_spice_candle->get_price_html(); ?></p>
						<button class="float-up home-btn-light">SHOP NOW</button>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-6 margin-b-1">
			<?php $pumpkin_frosting_candle = wc_get_product( '1031' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/Eucalyptus.jpg');">
				<p class="title"><?php echo $pumpkin_frosting_candle->get_name(); ?></p>
				<a class="info" href="<?php echo esc_url( get_permalink( '1031' ) ); ?>">
					<div class="img2"><?php echo $pumpkin_frosting_candle->get_image(); ?></div>
					<div class="desc">
						<h3>Luxury Soy Candles</h3>
						<p><span><?php echo $pumpkin_frosting_candle->get_name(); ?></span></p>
						<p><?php echo $pumpkin_frosting_candle->get_price_html(); ?></p>
						<button class="float-up home-btn-light">SHOP NOW</button>
					</div>
				</a>
			</div>
		</div>
		<div class="col-sm-6 margin-b-6">
			<?php $roasted_coffee_candle = wc_get_product( '33672' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/roasted-coffee.jpg');">
				<p class="title"><?php echo $roasted_coffee_candle->get_name(); ?></p>
				<a class="info" href="<?php echo esc_url( get_permalink( '33672' ) ); ?>">
					<div class="img2"><?php echo $roasted_coffee_candle->get_image(); ?></div>
					<div class="desc">
						<h3>Luxury Soy Candles</h3>
						<p><span><?php echo $roasted_coffee_candle->get_name(); ?></span></p>
						<p><?php echo $roasted_coffee_candle->get_price_html(); ?></p>
						<button class="float-up home-btn-light">SHOP NOW</button>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="row margin-t-1 d-lg-none">
		<div class="col-sm-6 margin-b-1">
		<a href="<?php echo esc_url( get_permalink( '32640' ) ); ?>" title="<?php the_title_attribute( '1031' ); ?>">
			<?php $madagascar_vanilla_candle = wc_get_product( '32640' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/madagascar.jpg');">
				<p class="title"><?php echo $madagascar_vanilla_candle->get_name(); ?></p>
			</div>
			</a>
		</div>
		<div class="col-sm-6 margin-b-1">
		<a href="<?php echo esc_url( get_permalink( '32641' ) ); ?>" title="<?php the_title_attribute( '1031' ); ?>">
			<?php $french_lavender_candle = wc_get_product( '32641' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/lavander.jpg');">
				<p class="title"><?php echo $french_lavender_candle->get_name(); ?></p>
			</div>
			</a>
		</div>
		<div class="col-sm-6 margin-b-1">
			<a href="<?php echo esc_url( get_permalink( '32642' ) ); ?>" title="<?php the_title_attribute( '1031' ); ?>">
			<?php $tropical_coconut_candle = wc_get_product( '32642' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/coconut.jpg');">
				<p class="title"><?php echo $tropical_coconut_candle->get_name(); ?></p>
			</div>
			</a>
		</div>
		<div class="col-sm-6 margin-b-1">
		<a href="<?php echo esc_url( get_permalink( '33632' ) ); ?>" title="<?php the_title_attribute( '1031' ); ?>">
			<?php $pumpkin_spice_candle = wc_get_product( '33632' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/pumpkins.jpg');">
				<p class="title"><?php echo $pumpkin_spice_candle->get_name(); ?></p>
			</div>
		</a>
		</div>
		<div class="col-sm-6 margin-b-1">
		<a href="<?php echo esc_url( get_permalink( '1031' ) ); ?>" title="<?php the_title_attribute( '1031' ); ?>">
			<?php $pumpkin_frosting_candle = wc_get_product( '1031' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/Eucalyptus.jpg');">
				<p class="title"><?php echo $pumpkin_frosting_candle->get_name(); ?></p>
			</div>
			</a>
		</div>
		<div class="col-sm-6 margin-b-6">
		<a href="<?php echo esc_url( get_permalink( '33672' ) ); ?>" title="<?php the_title_attribute( '1031' ); ?>">
			<?php $roasted_coffee_candle = wc_get_product( '33672' ); ?>
			<div class="home_category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/roasted-coffee.jpg');">
				<p class="title"><?php echo $roasted_coffee_candle->get_name(); ?></p>
			</div>
			</a>
		</div>
	</div>
	<div data-aos="fade-up" data-aos-duration="500" class="separator"></div>
</section>

<section>
	<div class="col-12 margin-t-6 relative">
		<img src="<?php echo $theme_path; ?>/assets/img/lavanda.jpg" alt="lavender">
		<h2 class="title-on-the-image">96North is your guide, your compass.</h2>
	</div>
	<div class="row sticky margin-t-3 margin-b-3">
		<div class="col-sm-6">
			<h2 data-aos="fade-up" data-aos-duration="300">Origin Story</h2>
		</div>
		<div class="col-sm-6">
			<p data-aos="fade-up" data-aos-duration="500" class="read-more js-read-more margin-b-0-2" data-rm-words="66">Immersed in the wild nature of Canada, high up in the north, a father and his daughter went on a quest to capture the scent of nature. To them, nature was where they could reconnect to themselves. It was the environment they naturally anchored into the present moment. It was where they closed their eyes and let their senses gift them beautiful moments of carefree daydreaming.

‘What if we could travel to any place just by the means of fragrance?’, they asked themselves. ‘What if we could slow down life just a bit by using our sense of smell? What if something as simple as lighting a candle could bring back a calming memory or spark our inspiration anew?

For both father and daughter, celebrating nature went hand in hand with protecting it. Thus, it wasn't the ordinary way they wished to bring their vision to life. Scented candles known by then were made of paraffin, which produced toxic benzene and toluene when burned. They saw no sense in creating something harmful to human health and noxious to nature.

Instead, their desire was to capture the wild, beautiful essence of nature and lift the spirit of those who came in touch with its fragrance. When they found a way to elaborate scented candles with pure soy wax and lead-free wicks, 96NORTH® was born. As the epitome of their truest desire, each and every fragrance incites the senses to go on a journey into the lustrous wild.
</p>
		</div>
	</div>
	<div data-aos="fade-up" data-aos-duration="500" class="separator"></div>
</section>
<section class="margin-t-3">
	<h2 data-aos="fade-up" data-aos-duration="300">Season products</h2>
	<div class="home_img_bg_container margin-t-3">
		<img class="home_img_bg" src="<?php echo $theme_path; ?>/assets/img/pumpkin-bg-rsz.jpg" alt="pumpkin candle background">
		<div class="home_img_bg_product"><?php echo do_shortcode('[products limit="1" columns="1" paginate="false" ids="33632"]'); ?></div>
	</div>
</section>
<section>
	<div class="row sticky margin-t-6 margin-b-3">
	<div class="col-12 col-md-6"><h2>Candles collection</h2></div><div class="col-12 col-md-6"><ul class="list_tick"><li>Premium Cotton Wicks</li><li>Expertly Crafted Fragrances</li><li>100% Soy Wax</li></ul></div>
	<div class="col-12 margin-t-1 home-product-4-row"><?php echo do_shortcode('[products limit="4" columns="4" category="premium-fragrances" paginate="false"]'); ?></div>
	</div>
    </section>
	<?php // the_content(); ?>
</div>
	<div class="container">
		<?php // the_content(); ?>
	</div>


<?php get_footer(); ?>
