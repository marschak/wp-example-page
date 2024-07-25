<?php $theme_path = get_stylesheet_directory_uri(); ?>
	<div class="row mt-5 mb-5">
		<div class="col-sm-6 mb-5">
			<?php $madagascar_vanilla_candle = wc_get_product( '32640' ); ?>
			<div class="category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/madagascar.jpg');">
				<p class="title"><?php echo $madagascar_vanilla_candle->get_name(); ?></p>
				<div class="info">
					<div class="img2"><?php echo $madagascar_vanilla_candle->get_image(); ?></div>
					<div class="desc">
						<p><?php echo $madagascar_vanilla_candle->get_name(); ?></p>
						<p><?php echo $madagascar_vanilla_candle->get_price_html(); ?></p>
						<button class="btn btn-light">shop now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mb-5">
			<?php $french_lavender_candle = wc_get_product( '32641' ); ?>
			<div class="category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/lavander.jpg');">
				<p class="title"><?php echo $french_lavender_candle->get_name(); ?></p>
				<div class="info">
					<div class="img2"><?php echo $french_lavender_candle->get_image(); ?></div>
					<div class="desc">
						<p><?php echo $french_lavender_candle->get_name(); ?></p>
						<p><?php echo $french_lavender_candle->get_price_html(); ?></p>
						<button class="btn btn-light">shop now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mb-5">
			<?php $tropical_coconut_candle = wc_get_product( '32642' ); ?>
			<div class="category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/Eucalyptus.jpg');">
				<p class="title"><?php echo $tropical_coconut_candle->get_name(); ?></p>
				<div class="info">
					<div class="img2"><?php echo $tropical_coconut_candle->get_image(); ?></div>
					<div class="desc">
						<p><?php echo $tropical_coconut_candle->get_name(); ?></p>
						<p><?php echo $tropical_coconut_candle->get_price_html(); ?></p>
						<button class="btn btn-light">shop now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mb-5">
			<?php $pumpkin_spice_candle = wc_get_product( '33632' ); ?>
			<div class="category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/Island.jpg');">
				<p class="title"><?php echo $pumpkin_spice_candle->get_name(); ?></p>
				<div class="info">
					<div class="img2"><?php echo $pumpkin_spice_candle->get_image(); ?></div>
					<div class="desc">
						<p><?php echo $pumpkin_spice_candle->get_name(); ?></p>
						<p><?php echo $pumpkin_spice_candle->get_price_html(); ?></p>
						<button class="btn btn-light">shop now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mb-5">
			<?php $pumpkin_frosting_candle = wc_get_product( '1031' ); ?>
			<div class="category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/ocean.jpg');">
				<p class="title"><?php echo $pumpkin_frosting_candle->get_name(); ?></p>
				<div class="info">
					<div class="img2"><?php echo $pumpkin_frosting_candle->get_image(); ?></div>
					<div class="desc">
						<p><?php echo $pumpkin_frosting_candle->get_name(); ?></p>
						<p><?php echo $pumpkin_frosting_candle->get_price_html(); ?></p>
						<button class="btn btn-light">shop now</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 mb-5">
			<?php $roasted_coffee_candle = wc_get_product( '33672' ); ?>
			<div class="category" data-aos="fade-up" data-aos-duration="300" style="background: center / cover no-repeat url('<?php echo $theme_path; ?>/assets/img/sandalwood.jpg');">
				<p class="title"><?php echo $roasted_coffee_candle->get_name(); ?></p>
				<div class="info" data-aos="flip-left">
					<div class="img2"><?php echo $roasted_coffee_candle->get_image(); ?></div>
					<div class="desc">
						<p><?php echo $roasted_coffee_candle->get_name(); ?></p>
						<p><?php echo $roasted_coffee_candle->get_price_html(); ?></p>
						<button class="btn btn-light">shop now</button>
					</div>
				</div>
			</div>
		</div>
	</div>

    <style>
        .category {
	height: 250px;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
}
.desc p, .desc bdi {
    color:#fff;
    font-size: 25px;
}
.category p {
	font-family: "Jost";
	font-style: normal;
	font-weight: 400;
	font-size: 36px;
	line-height: 52px;
	/* identical to box height */
	letter-spacing: 0.08em;
	color: #ffffff;
	text-align: center;
}
.category:hover .title {
	display: none;
}
.category .info {
	display: none;
	transition: .5s ease;
  	opacity: 0;
}
.category:hover .info {
	opacity: 1;
	display: flex;
	position: absolute;
	height: 100%;
	width: 100%;
	top: 0;
	align-items: center;
	flex-direction: row;
	justify-content: space-evenly;
	align-content: center;
}
.info .img2 {
	background: white;
    width: 50%;
    height: 100%;
    border: 1px solid black;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.info .img2 img {
	height: 80%;
    width: auto;
}
.info .desc p {
	font-size: 20px;
	line-height: 29px;
}
.info .desc {
    background: #000000a8;
    width: 50%;
    height: 100%;
    padding: 0 0 0 30px;
    display: flex;
    font-size: 20px;
    line-height: 29px;
    flex-direction: column;
    align-items: flex-start;
    border: 1px solid;
}
    </style>