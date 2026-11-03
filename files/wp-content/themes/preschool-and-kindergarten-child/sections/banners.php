<?php
/**
 * Banner Section
 *
 * @package Preschool_and_Kindergarten_Child
 */

$ed_slider = get_theme_mod(
	'preschool_and_kindergarten_ed_banners_section'
);

$slider_caption = get_theme_mod(
	'preschool_and_kindergarten_slider_caption',
	'1'
);

$slider_readmore = get_theme_mod(
	'preschool_and_kindergarten_slider_readmore',
	__( 'Continue Reading', 'preschool-and-kindergarten' )
);

$slider_cat = get_theme_mod(
	'preschool_and_kindergarten_slider_cat'
);


/*
 * Переводим текст кнопки через Polylang.
 */
if ( function_exists( 'pll_register_string' ) && ! empty( $slider_readmore ) ) {
	pll_register_string(
		'Текст кнопки слайдера',
		$slider_readmore,
		'Preschool and Kindergarten Child'
	);

	$slider_readmore = pll__( $slider_readmore );
}


if ( $ed_slider ) :
	?>

	<div class="banner">

		<?php
		if ( $slider_cat ) {

			$qry = new WP_Query(
				array(
					'post_type'      => 'post',
					'post_status'    => 'publish',
					'posts_per_page' => -1,
					'cat'            => $slider_cat,
				)
			);

			if ( $qry->have_posts() ) :
				?>

				<div class="banner-slider owl-carousel">

					<?php
					while ( $qry->have_posts() ) {
						$qry->the_post();
						?>

						<?php if ( has_post_thumbnail() ) : ?>

							<div>

								<?php
								the_post_thumbnail(
									'preschool-and-kindergarten-banner-thumb',
									array(
										'itemprop' => 'image',
									)
								);
								?>

								<?php if ( $slider_caption ) : ?>

									<div class="banner-text">

										<div class="container">

											<div class="text-holder">

												<strong class="title">
													<?php the_title(); ?>
												</strong>

												<?php the_excerpt(); ?>

												<a
													class="btn-enroll"
													href="<?php the_permalink(); ?>"
												>
													<?php echo esc_html( $slider_readmore ); ?>
												</a>

											</div>

										</div>

									</div>

								<?php endif; ?>

							</div>

						<?php endif; ?>

						<?php
					}

					wp_reset_postdata();
					?>

				</div>

			<?php endif; ?>

		<?php } ?>

	</div>

<?php endif; ?>